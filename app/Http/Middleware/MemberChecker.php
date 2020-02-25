<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;  
use Illuminate\Support\Facades\Auth; 

class MemberChecker
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
        
        if (!Auth::check() && $request->session()->get('type') != 'member'){   
            return redirect()->route('member.auth.login'); 
        }

        return $next($request);
    }
}
