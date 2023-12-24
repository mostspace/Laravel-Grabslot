<?php

namespace App\Http\Controllers;
use App\Models\RegionArea;
use App\Models\Region;

use Illuminate\Http\Request;

class RegionController extends Controller
{
    public function getRegionList() {
        $areas = RegionArea::all();
        $regions = Region::all();

        return view('home', compact('areas', 'regions'));
    }

    public function regionFilter(Request $request) {
        $search_key = $request->input('region');
        $region = Region::where('name', 'like', '%' . $search_key . '%')->first();

        return $region;
    }
}
