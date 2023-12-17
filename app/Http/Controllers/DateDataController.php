<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DateDataController extends Controller
{
    public function dateData(Request $request, $dateData) {
        return view('date-data', compact('dateData'));
    }
}
