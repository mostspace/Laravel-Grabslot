<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
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
        $user = Payment::where('user_id', Auth::user()->id)->first();

        // Check if the user has a corresponding payment record for the specified store
        if ($store_id == $user->store_id) {
            return $next($request);
        }

        return redirect('/home');
    }
}
