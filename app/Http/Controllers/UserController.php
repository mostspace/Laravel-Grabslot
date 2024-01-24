<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Utils\ServerSideTable;
use Auth;
use App\Models\Payment;
use App\Models\Store;

class UserController extends Controller
{
    public function index() {
        return view('profile');
    }

    public function getPricingPage() {
        return view('pricing');
    }

    public function userCourse(Request $request) {
        $user = Auth::user();
        $data = Payment::where('user_id', $user->id)->get();

        $userPayments = Payment::select('payment.course', 'tbl_store_list.name', 'payment.created_at', 'payment.transaction_id')
                                ->leftJoin('tbl_store_list', 'payment.store_id', '=', 'tbl_store_list.id')
                                ->where('payment.user_id', $user->id)
                                ->get();

        $dataTable = new ServerSideTable($userPayments);
        $dataTable->getAjaxTable();
    }

    public function userAccount(Request $request) {
        dd($request->input('user_email'));
    }
    
}
