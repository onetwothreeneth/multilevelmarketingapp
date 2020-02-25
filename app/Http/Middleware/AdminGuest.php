<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;   
use Illuminate\Support\Facades\Auth; 

class AdminGuest
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::check()){  
            if ($request->session()->get('type') == 'admin') {
                return redirect()->route('admin.dashboard');
            }  
        } 

        return $next($request);
    }
}
