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
    public function store(Request $request, $region_id, $store_id) {
        $store = StoreList::where('id', $store_id)->first();
        $region = Region::where('id', $region_id)->first();

        return view('hall-data/data-list', compact('region', 'store'));
    }

    public function getStoreList(Request $request, $store_id) {
        $list = StoreDataByDate::where('store_id', $store_id)->get();

        $dataTable = new ServerSideTable($list);
        $dataTable->getAjaxTable();
    }

    // Get Store Data
    public function storeData(Request $request, $region_id, $store_id, $store_data_id) {
        $region = Region::where('id', $region_id)->first();
        $store = StoreList::where('id', $store_id)->first();
        $store_data_by_date = StoreDataByDate::where('store_id', $store_id)->first();

        return view('hall-data/store-data', compact('region', 'store', 'store_data_by_date'));
    }

    public function getStoreDataList(Request $request, $store_data_id) {
        $list = ModelData::where('store_data_id', $store_data_id)->get();

        $dataTable = new ServerSideTable($list);
        $dataTable->getAjaxTable();
    }
    
}
