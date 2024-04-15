<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PreventDeletingOwnAccount
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Check if user is logged in
        if (Auth::check()) {
            $userId = $request->route('user'); // Adjust this according to your route parameter

            // Check if the authenticated user is trying to delete their own account
            if ($userId == Auth::user()->id) {
                return redirect()->route('user.index')->with('success', 'you cannot delete your account');
            }
        }

        return $next($request);
    }
}
