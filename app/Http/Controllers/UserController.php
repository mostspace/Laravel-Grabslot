<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Utils\ServerSideTable;
use App\Models\Payment;
use App\Models\Store;
use App\Models\User;
use Auth;

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
        try {
            $request->validate([
                'user_email' => 'required|email',
            ]);
    
            $user = Auth::user();
    
            if ($user) {
                $user->email = $request->input('user_email');
                $user->save();
    
                return response()->json(['result' => 'success', 'message' => 'あなたのメールが更新されました.']);
            }
    
            return response()->json(['result' => 'warning', 'message' => 'メールの更新に失敗しました.'], 404);
        } catch (\Exception $e) {
            return response()->json(['result' => 'danger', 'message' => 'リクエストの処理中にエラーが発生しました.'], 500);
        }
    }
    
    public function userPassword(Request $request) {
        try {
            $oldPassword = $request->input('old_pwd');
            $newPassword = $request->input('new_pwd');
    
            $correctOldPasswordHash = Auth::user()->password;
    
            if (Hash::check($oldPassword, $correctOldPasswordHash)) {
                $newPasswordHash = Hash::make($newPassword);
    
                Auth::user()->update(['password' => $newPasswordHash]);
    
                return response()->json(['result' => 'success', 'message' => 'パスワードは正常に変更されました.']);
            } else {
                return response()->json(['result' => 'warning', 'message' => '古いパスワードが正しくありません. パスワードの変更に失敗しました.'], 422);
            }
        } catch (\Exception $e) {
            return response()->json(['result' => 'danger', 'message' => 'リクエストの処理中にエラーが発生しました.'], 500);
        }
    }
    
    

    
}
