<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StoreList;
use App\Models\StoreDataByDate;
use App\Models\ModelData;

// require 'vendor/autoload.php'; // Autoload the Composer-generated files

// use BaconQrCode\Encoder\QrCode;
// use Endroid\QrCode\Writer\PngWriter;

class PromotionPrintingController extends Controller
{

    public function index() {
        $modelMonthData = [];

        return view('admin/promotion-printing', compact('modelMonthData'));
    }

    // // Your data to be encoded in the QR code
    // $data = 'https://www.example.com';

    // // Generate QR code
    // $qrCode = new QrCode($data);
    // $writer = new PngWriter();
    // header('Content-Type: image/png');
    // echo $writer->write($qrCode);

    public function updateTable(Request $request) {
        $data_value = $request->input('model_name');
        $modelMonthData = [];

        $store = StoreList::where('name', $request->input('store_name'))->first();
        $store_id = $store->id;

        // Get One month date of the model
        $modelDate = ModelData::select(
            'B.id',
            'B.date'
        )
        ->from('tbl_model_data as A')
        ->leftJoin('tbl_store_data_by_date as B', 'A.store_data_id', '=', 'B.id')
        ->whereIn('A.store_data_id', function ($query) use ($store_id) {
            $query->select('id')
                ->from('tbl_store_data_by_date')
                ->where('store_id', $store_id);
        })
        ->where('A.model_name', $data_value)
        ->whereRaw('STR_TO_DATE(B.date, "%Y/%m/%d") > (SELECT DATE_SUB(MAX(STR_TO_DATE(B.date, "%Y/%m/%d")), INTERVAL 1 MONTH) FROM tbl_model_data as A LEFT JOIN tbl_store_data_by_date as B ON A.store_data_id = B.id WHERE A.store_data_id IN (SELECT id FROM tbl_store_data_by_date WHERE store_id = ?) AND A.model_name = ?)', [$store_id, $data_value])
        ->orderBy('B.date')
        ->distinct()
        ->get();
       
        // Get One month datas of the model
        $modelsData = ModelData::select(
            'A.id',
            'A.store_data_id',
            'A.model_name',
            'B.date',
            'A.machine_number',
            'A.g_number',
            'A.extra_sheet',
            'A.bb',
            'A.rb',
            'A.composite_probability',
            'A.bb_probability',
            'A.rb_probability'
        )
        ->from('tbl_model_data as A')
        ->leftJoin('tbl_store_data_by_date as B', 'A.store_data_id', '=', 'B.id')
        ->whereIn('A.store_data_id', function ($query) use ($store_id) {
            $query->select('id')
                ->from('tbl_store_data_by_date')
                ->where('store_id', $store_id);
        })
        ->where('A.model_name', $data_value)
        ->whereRaw('STR_TO_DATE(B.date, "%Y/%m/%d") > (SELECT DATE_SUB(MAX(STR_TO_DATE(B.date, "%Y/%m/%d")), INTERVAL 1 MONTH) FROM tbl_model_data as A LEFT JOIN tbl_store_data_by_date as B ON A.store_data_id = B.id WHERE A.store_data_id IN (SELECT id FROM tbl_store_data_by_date WHERE store_id = ?) AND A.model_name = ?)', [$store_id, $data_value])
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

        // Process the request and fetch updated table data
        $tableData = view('components.dynamicTable', compact('modelMonthData'))->render();

        return response()->json(['tableData' => $tableData, 'modelMonthData' => $modelMonthData]);
    }

    // public function validateStore(Request $request) {
    //     $data_type = $request->input('type');
    //     $data_value = $request->input('value');
    
    //     $store_list = [];

    //     $stores = StoreList::where('name', 'like', '%' . $data_value . '%')->get();

    //     if ($stores->isNotEmpty()) {
    //         for ($i = 0; $i < count($stores); $i++) {
    //             $store_list[$i]['name'] = $stores[$i]->name;
    //             $store_list[$i]['id'] = $stores[$i]->id;
    //         }

    //         return response()->json(['type' => $data_type, 'value' => 1, 'data' => $store_list]);
    //     } else {
    //         return response()->json(['type' => $data_type, 'value' => 0]);
    //     }
    // }

    // public function validateModel(Request $request) {
    //     $model_list = [];
    //     $data_type = $request->input('type');
    //     $store_id = $request->input('store_id');
    //     $data_value = $request->input('model_name');

    //     $list = StoreDataByDate::where('store_id', $store_id)->get();

    //     if ($list->isNotEmpty()) {
    //         $storeDataIds = $list->pluck('id')->toArray();
            
    //         $models = ModelData::select('model_name')
    //                 ->whereIn('store_data_id', $storeDataIds)
    //                 ->where('model_name', 'like', '%' . $data_value . '%')
    //                 ->distinct()
    //                 ->get();

    //         if ($models->isNotEmpty()) {
    //             for ($i = 0; $i < count($models); $i++) {
    //                 $model_list[$i] = $models[$i]->model_name;
    //             }

    //             return response()->json(['type' => $data_type, 'value' => 1, 'data' => $model_list]);
    //         } else {
    //             return response()->json(['type' => $data_type, 'value' => 0]);
    //         }

    //     }
    // }

    public function validatePromotionTable(Request $request) {
        $data_list= [];
        $data_type = $request->input('type');
        $store_id = $request->input('store_id');
        $data_value = $request->input('value');

        if ($data_type == "store") {
            $list = StoreList::where('name', 'like', '%' . $data_value . '%')->get();

            if ($list->isNotEmpty()) {
                for ($i = 0; $i < count($list); $i++) {
                    $data_list[$i]['name'] = $list[$i]->name;
                    $data_list[$i]['id'] = $list[$i]->id;
                }
    
                return response()->json(['type' => $data_type, 'value' => 1, 'data' => $data_list]);
            } else {
                return response()->json(['type' => $data_type, 'value' => 0]);
            }
        } else {
            $list = StoreDataByDate::where('store_id', $store_id)->get();

            if ($list->isNotEmpty()) {
                $storeDataIds = $list->pluck('id')->toArray();
                
                $models = ModelData::select('model_name')
                        ->whereIn('store_data_id', $storeDataIds)
                        ->where('model_name', 'like', '%' . $data_value . '%')
                        ->distinct()
                        ->get();
    
                if ($models->isNotEmpty()) {
                    for ($i = 0; $i < count($models); $i++) {
                        $data_list[$i] = $models[$i]->model_name;
                    }
    
                    return response()->json(['type' => $data_type, 'value' => 1, 'data' => $data_list]);
                } else {
                    return response()->json(['type' => $data_type, 'value' => 0]);
                }
            }
        }

        
    }
    
}
