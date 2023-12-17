<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnniversaryController extends Controller
{
    public function index() {
        return view('anniversary/index');
    }

    public function prefecture(Request $request, $prefecture) {
        return view('anniversary/prefecture', compact('prefecture'));
    }

    public function monthList(Request $request, $prefecture, $month) {
        return view('anniversary/month-list', compact('prefecture', 'month'));
    }
}
