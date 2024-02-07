<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\Utils\ServerSideTable;
use App\Models\Payment;
use App\Models\Store;
use App\Models\User;
use Auth;

class UserController extends Controller
{
    public function index() {
        $oneMonthAgo = Carbon::now()->subMonth();
        $oneWeekAgo = Carbon::now()->subWeek();
        $user_id = Auth::id();

        $latest_payment = Payment::where('user_id', $user_id)->latest()->first();

        if ($latest_payment) {
            if ($latest_payment->course == "light") {
                $course = "light";
            } else {
                $course = "standard";
            }
        } else {
            $course = "free";
        }

        return view('profile', compact('course'));
    }

    public function availableDays(Request $request) {
        $user_id = Auth::id();

        $latest_payment = Payment::where('user_id', $user_id)->latest()->first();

        if ($latest_payment == null) {
            // Calculate the difference in seconds between current time and creation time of the latest payment
            $time_diff_seconds = abs(strtotime(Auth::user()->created_at) - time());
    
            // Convert seconds to days
            $remaining_days = ceil($time_diff_seconds / (60 * 60 * 24)); // 60 seconds * 60 minutes * 24 hours = 1 day
            if ($remaining_days >= 0 && $remaining_days <= 7) {
                $message = "無料期間　あと" . 8 - $remaining_days . "日！";
            } else {
                $message = "無料期間が終了しました！ 有料コースのご登録はこちら！";
            }
        }

        return response()->json(['result' => $remaining_days, 'message' => $message]);
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
    
                return response()->json(['result' => 'success', 'message' => 'メールアドレスが更新されました']);
            }
    
            return response()->json(['result' => 'warning', 'message' => 'メールの更新に失敗しました'], 404);
        } catch (\Exception $e) {
            return response()->json(['result' => 'danger', 'message' => 'リクエストの処理中にエラーが発生しました'], 500);
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
    
                return response()->json(['result' => 'success', 'message' => '新しくパスワードが変更されました。']);
            } else {
                return response()->json(['result' => 'warning', 'message' => '古いパスワードが正しくありません。 パスワードの変更に失敗しました。'], 422);
            }
        } catch (\Exception $e) {
            return response()->json(['result' => 'danger', 'message' => 'リクエストの処理中にエラーが発生しました'], 500);
        }
    }
        
}
