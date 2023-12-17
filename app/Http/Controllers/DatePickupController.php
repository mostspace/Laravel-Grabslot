<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatePickupController extends Controller
{
    public function index() {
        return view('date-pickup');
    }
}
