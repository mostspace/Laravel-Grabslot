<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppearedStoreController extends Controller
{
    public function index() {
        return view('appeared-store');
    }
}
