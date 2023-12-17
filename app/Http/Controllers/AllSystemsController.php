<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllSystemsController extends Controller
{
    public function index() {
        return view('all-systems/index');
    }

    public function prefecture(Request $request, $prefecture) {
        return view('all-systems/prefecture', compact('prefecture'));
    }
}
