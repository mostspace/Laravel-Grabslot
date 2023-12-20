<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Region;
use App\Models\StoreList;
use App\Models\StoreDataByDate;
use App\Models\ModelData;
use App\Utils\ServerSideTable;

class HallDataController extends Controller
{
    private $tempData = [];

    public function index() {
        return view('hall-data/index');
    }

    // Get Hall
    public function region(Request $request, $region_id) {
        $region = Region::where('id', $region_id)->first();
        $ctn_data = StoreList::where('region_id', $region_id)->count();

        if($ctn_data) {
            return view('hall-data/region', compact('region'));
        } else {
            return redirect('/waiting');
        }
    }

    public function getHallDataList(Request $request, $region_id) {
        $stores = StoreList::where('region_id', $region_id)->get();

        $dataTable = new ServerSideTable($stores);
        $dataTable->getAjaxTable();
    }

    // Get Store
    public function model(Request $request, $region_id, $store_id) {
        $region = Region::where('id', $region_id)->first();
        $store = StoreList::where('id', $store_id)->first();

        return view('hall-data/data-list', compact('region', 'store'));
    }

    public function getModelList(Request $request, $store_id) {
        $list = StoreDataByDate::where('store_id', $store_id)->get();

        if ($list->isNotEmpty()) {
            $storeDataIds = $list->pluck('id')->toArray();
            $models = ModelData::select('model_name')
                    ->whereIn('store_data_id', $storeDataIds)
                    ->distinct()
                    ->get();

            $dataTable = new ServerSideTable($models);
            $dataTable->getAjaxTable();
        } else {
            dd('No records found in StoreDataByDate for store_id: ' . $store_id);
        }
    }

    public function modelDetailData(Request $request, $region_id, $store_id, $model_name)
    {
        $modelMonthData = [];

        $region = Region::where('id', $region_id)->first();
        $store = StoreList::where('id', $store_id)->first();

        $storeDataByDate = StoreDataByDate::where('store_id', $store_id)->get();
        $storeDataIds = $storeDataByDate->pluck('id')->toArray();

        $modelsData = ModelData::where('model_name', $model_name)->whereIn('store_data_id', $storeDataIds)->get();

        foreach ($storeDataByDate as $store_key => $store_value) {
            $temp_store_obj = [];
            foreach ($modelsData as $model_key => $model_value) {
                if ($store_value['id'] == $model_value['store_data_id']) {
                    $temp_store_obj[] = [
                        'machine_number' => $model_value['machine_number'],
                        'extra_sheet' => intval(str_replace(',', '', $model_value['extra_sheet'])),
                    ];
                }
            }
            $modelMonthData[$store_value['date']] = $temp_store_obj;
        }

        return view('hall-data/model-detail-data', compact('modelMonthData', 'region', 'store', 'model_name'));
    }


    // public function getModelDetailDataList(Request $request, $store_data_id) {
    //     $list = ModelData::where('store_data_id', $store_data_id)->get();

    //     $dataTable = new ServerSideTable($list);
    //     $dataTable->getAjaxTable();
    // }

    
}
