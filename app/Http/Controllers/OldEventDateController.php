<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OldEventDateController extends Controller
{
    public function index() {
        return view('old-event-date/index');
    }

    public function prefecture(Request $request, $prefecture) {
        return view('old-event-date/prefecture', compact('prefecture'));
    }

    public function eventDate(Request $request, $prefecture, $eventDate) {
        return view('old-event-date/event-date', compact('eventDate'));
    }
}
