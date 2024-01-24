<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Carbon\Carbon;
use Auth;
use App\Models\Payment;

class CheckCourse
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $store_id = $request->route('store_id');
        $oneMonthAgo = Carbon::now()->subMonth();
        $oneWeekAgo = Carbon::now()->subWeek();
        $user_id = Auth::id();

        $latest_payment = Payment::where('user_id', $user_id)->latest()->first();

        if ($latest_payment && $latest_payment->created_at->greaterThanOrEqualTo($oneMonthAgo)) {
            // Check if the user has a corresponding payment record for the specified store or store_id is '0'
            if ($store_id == $latest_payment->store_id || $latest_payment->store_id == '0') {
                return $next($request);
            }
        } elseif (Auth::user()->created_at->greaterThanOrEqualTo($oneWeekAgo)) {
            return $next($request);
        }

        // Redirect back to the previous URL
        return redirect()->back()->with('error', 'You do not have access to this store.');
    }
}
