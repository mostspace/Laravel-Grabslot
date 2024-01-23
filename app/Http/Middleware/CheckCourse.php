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
        $user = Payment::where('user_id', Auth::user()->id)->latest()->first();

        // Check if the created_at date is within one month before the current date
        if ($user->created_at->greaterThanOrEqualTo($oneMonthAgo)) {
            // Check if the user has a corresponding payment record for the specified store
            if ($store_id == $user->store_id || $user->store_id == '0') {
                return $next($request);
            }
        }

        return redirect('/pricing');
    }
}
