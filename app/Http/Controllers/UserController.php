<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    public function index() {
        return view('profile');
    }

    public function getPricingPage() {
        return view('pricing');
    }
}
