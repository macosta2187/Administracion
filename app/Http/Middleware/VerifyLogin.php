<?php

namespace App\Http\Middleware;


use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class VerifyLogin
{

  
    public function handle($request, Closure $next)
    {
       
        if (!Auth::check()) {
            return response()->view('login'); 
        }

        return $next($request);
    }
    
}