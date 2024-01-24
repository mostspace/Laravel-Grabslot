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

        $user_course = Payment::where('user_id', Auth::user()->id)->latest()->first();

        if ($user_course != null) {
            // Check if the created_at date is within one month before the current date
            if ($user_course->created_at->greaterThanOrEqualTo($oneMonthAgo)) {
                // Check if the user has a corresponding payment record for the specified store
                if ($store_id == $user_course->store_id || $user_course->store_id == '0') {
                    return $next($request);
                }
            }
        } else {
            session()->flash('alert', 'You need to make a payment first!');
            
            if (Auth::user()->created_at->greaterThanOrEqualTo($oneWeekAgo)) {
                return $next($request);
            }
        }

        return redirect('/pricing');
    }
}
