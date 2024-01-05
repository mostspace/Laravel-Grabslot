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
        $model_name = $request->input('model_name');
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
        ->where('A.model_name', $model_name)
        ->whereRaw('STR_TO_DATE(B.date, "%Y/%m/%d") > (SELECT DATE_SUB(MAX(STR_TO_DATE(B.date, "%Y/%m/%d")), INTERVAL 1 MONTH) FROM tbl_model_data as A LEFT JOIN tbl_store_data_by_date as B ON A.store_data_id = B.id WHERE A.store_data_id IN (SELECT id FROM tbl_store_data_by_date WHERE store_id = ?) AND A.model_name = ?)', [$store_id, $model_name])
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
        ->where('A.model_name', $model_name)
        ->whereRaw('STR_TO_DATE(B.date, "%Y/%m/%d") > (SELECT DATE_SUB(MAX(STR_TO_DATE(B.date, "%Y/%m/%d")), INTERVAL 1 MONTH) FROM tbl_model_data as A LEFT JOIN tbl_store_data_by_date as B ON A.store_data_id = B.id WHERE A.store_data_id IN (SELECT id FROM tbl_store_data_by_date WHERE store_id = ?) AND A.model_name = ?)', [$store_id, $model_name])
        ->orderBy('B.date')
        ->orderBy('A.machine_number')
        ->get();
    
        // Add Number attribute Color 
        function itemColor($value) {
            $result = [];

            if ($value <= -3000) {
                $result = ["color" => "td-red", "red" => 1, "blue" => 0];
            } elseif ($value > -3000 && $value < 0) {
                $result = ["color" => "td-pink", "red" => 1, "blue" => 0];
            } elseif ($value >= 0 && $value < 1000) {
                $result = ["color" => "td-white", "red" => 0, "blue" => 0];
            } elseif ($value >= 1000 && $value < 3000) {
                $result = ["color" => "td-light-blue", "red" => 0, "blue" => 1];
            } elseif ($value >= 3000 && $value < 5000) {
                $result = ["color" => "td-blue", "red" => 0, "blue" => 1];
            } elseif ($value >= 5000) {
                $result = ["color" => "td-dark-blue", "red" => 0, "blue" => 1];
            // } elseif ($value == 2000) {
            //     $result = ["color" => "td-gray", "red" => 0, "blue" => 0];
            } else {
                $result = ["color" => "td-white", "red" => 0, "blue" => 0];
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
                        'item_color' => itemColor(intval(str_replace(',', '', $model_value['extra_sheet']))),
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

    public function validateModel(Request $request) {
        $data_type = $request->input('type');
        $data_value = $request->input('value');
        $exists = false;

        if ($data_type == 'store') {
            $exists = StoreList::where('name', $data_value)->exists();
        } else {
            $exists = ModelData::where('model_name', $data_value)->exists();
        }

        return response()->json(['type' => $data_type, 'value' => $exists ? 1 : 0]);
    }

}
