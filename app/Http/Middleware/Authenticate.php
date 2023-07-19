<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Authenticate extends Middleware
{
 

    public function handle(Request $request, Closure $next)
    {
        $tokenHeader = [ "Authorization" => $request -> header("Authorization")];

        $response = Http::withHeaders($tokenHeader) -> get("http://127.0.0.1:8001/api/validate");
        if($response -> successful())
            return $next($request);
        return response(["message" => "No autorizado"], 403);

        
    }
}
