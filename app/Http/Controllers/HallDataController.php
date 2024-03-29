<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Region;
use App\Models\StoreList;
use App\Models\RegionArea;
use App\Models\StoreDataByDate;
use App\Models\ModelData;
use App\Utils\ServerSideTable;
use Carbon\Carbon;
use Auth;

class HallDataController extends Controller
{
    // Get Region List
    public function getRegionList() {
        $areas = RegionArea::all();
        $regions = Region::all();
        $user_id = Auth::id();

        return view('home', compact('areas', 'regions', 'user_id'));
    }

    // Get Hall
    public function store(Request $request, $region_id) {
        $region = Region::findOrFail($region_id);
        $storeCount = StoreList::where('region_id', $region_id)->count();

        if ($storeCount) {
            return view('hall-data.region', compact('region'));
        } else {
            return redirect('/waiting');
        }
    }

    public function getStoreList(Request $request, $region_id) {
        $stores = StoreList::where('region_id', $region_id)->get();

        $dataTable = new ServerSideTable($stores);
        $dataTable->getAjaxTable();
    }

    // Search Hall Data
    public function searchHallDataList(Request $request, $hall_name) {
        $stores = ($hall_name === "whole") ? StoreList::all() : StoreList::where('name', 'like', "%$hall_name%")->get();

        $dataTable = new ServerSideTable($stores);
        $dataTable->getAjaxTable();
    }

    // Get Store
    public function model(Request $request, $region_id, $store_id) {
        $region = Region::findOrFail($region_id);
        $store = StoreList::findOrFail($store_id);

        return view('hall-data.data-list', compact('region', 'store'));
    }

    public function getModelList(Request $request, $store_id) {
        $models = [];
        $list = StoreDataByDate::where('store_id', $store_id)->get();

        if ($list->isNotEmpty()) {
            $storeDataIds = $list->pluck('id')->toArray();

            $models = ModelData::select('model_name')
                ->whereIn('store_data_id', $storeDataIds)
                ->where('extra_sheet', '!=', '')
                ->distinct()
                ->get();

            $dataTable = new ServerSideTable($models);
            $dataTable->getAjaxTable();
        } else {
            $dataTable = new ServerSideTable($models);
            $dataTable->getAjaxTable();
        }
    }

    public function modelDetail(Request $request, $region_id, $store_id, $model_name) {
        $modelMonthData = [];

        $region = Region::findOrFail($region_id);
        $store = StoreList::findOrFail($store_id);

        // Get One month date of the model
        $modelDate = ModelData::select('B.id', 'B.date')
            ->from('tbl_model_data as A')
            ->leftJoin('tbl_store_data_by_date as B', 'A.store_data_id', '=', 'B.id')
            ->whereIn('A.store_data_id', function ($query) use ($store_id) {
                $query->select('id')
                    ->from('tbl_store_data_by_date')
                    ->where('store_id', $store_id);
            })
            ->where('A.model_name', $model_name)
            ->whereRaw('STR_TO_DATE(B.date, "%Y/%m/%d") > (SELECT DATE_SUB(MAX(STR_TO_DATE(B.date, "%Y/%m/%d")), INTERVAL 1 MONTH) FROM tbl_model_data as A LEFT JOIN tbl_store_data_by_date as B ON A.store_data_id = B.id WHERE A.store_data_id IN (SELECT id FROM tbl_store_data_by_date WHERE store_id = ?) AND A.model_name = ?)', [$store_id, $model_name])
            ->orderBy('B.date')
            ->distinct()
            ->get();

        // Get One month datas of the model
        $modelsData = ModelData::select('A.id', 'A.store_data_id', 'A.model_name', 'B.date', 'A.machine_number', 'A.g_number', 'A.extra_sheet', 'A.bb', 'A.rb', 'A.composite_probability', 'A.bb_probability', 'A.rb_probability')
            ->from('tbl_model_data as A')
            ->leftJoin('tbl_store_data_by_date as B', 'A.store_data_id', '=', 'B.id')
            ->whereIn('A.store_data_id', function ($query) use ($store_id) {
                $query->select('id')
                    ->from('tbl_store_data_by_date')
                    ->where('store_id', $store_id);
            })
            ->where('A.model_name', $model_name)
            ->whereRaw('STR_TO_DATE(B.date, "%Y/%m/%d") > (SELECT DATE_SUB(MAX(STR_TO_DATE(B.date, "%Y/%m/%d")), INTERVAL 1 MONTH) FROM tbl_model_data as A LEFT JOIN tbl_store_data_by_date as B ON A.store_data_id = B.id WHERE A.store_data_id IN (SELECT id FROM tbl_store_data_by_date WHERE store_id = ?) AND A.model_name = ?)', [$store_id, $model_name])
            ->orderBy('B.date')
            ->orderBy('A.machine_number')
            ->get();

        // Add Number attribute Color 
        function itemColor($extra_sheet, $g_number) {
            $result = [];

            if ($g_number <= 2000) {
                $result = ["color" => "td-gray", "red" => 0, "blue" => 0];
            } else {
                if ($extra_sheet <= -3000) {
                    $result = ["color" => "td-red", "red" => 1, "blue" => 0];
                } elseif ($extra_sheet > -3000 && $extra_sheet < 0) {
                    $result = ["color" => "td-pink", "red" => 1, "blue" => 0];
                } elseif ($extra_sheet >= 0 && $extra_sheet < 1000) {
                    $result = ["color" => "td-white", "red" => 0, "blue" => 0];
                } elseif ($extra_sheet >= 1000 && $extra_sheet < 3000) {
                    $result = ["color" => "td-light-blue", "red" => 0, "blue" => 1];
                } elseif ($extra_sheet >= 3000 && $extra_sheet < 5000) {
                    $result = ["color" => "td-blue", "red" => 0, "blue" => 1];
                } elseif ($extra_sheet >= 5000) {
                    $result = ["color" => "td-dark-blue", "red" => 0, "blue" => 1];
                } else {
                    $result = ["color" => "td-white", "red" => 0, "blue" => 0];
                }
            }
            return $result;
        }

        foreach ($modelDate as $date_key => $date_value) {
            $temp_store_obj = [];
            $colorCnts = ['red' => 0, 'blue' => 0];

            foreach ($modelsData as $model_key => $model_value) {
                if ($date_value['id'] == $model_value['store_data_id']) {
                    $temp_store_obj[] = [
                        'id' => $model_value['id'],
                        'machine_number' => $model_value['machine_number'],
                        'date' => $model_value['date'],
                        'extra_sheet' => intval(str_replace(',', '', $model_value['extra_sheet'])),
                        'item_color' => itemColor(intval(str_replace(',', '', $model_value['extra_sheet'])), intval(str_replace(',', '', $model_value['g_number']))),
                    ];

                    $colorCnts['red'] += $temp_store_obj[count($temp_store_obj) - 1]['item_color']['red'];
                    $colorCnts['blue'] += $temp_store_obj[count($temp_store_obj) - 1]['item_color']['blue'];
                }
            }

            $temp_store_obj[] = $colorCnts;
            $modelMonthData[$date_value['date']] = $temp_store_obj;
        }

        return view('hall-data.model-detail-data', compact('modelMonthData', 'region', 'store', 'model_name'));
    }

    public function getModelData(Request $request) {
        $model = ModelData::findOrFail($request->input('model_id'));

        return response()->json(['model' => $model]);
    }
}