<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */


     public function handle(Request $request, Closure $next)
     {
         $tokenHeader = [ "Authorization" => $request -> header("Authorization")];
 
         $response = Http::withHeaders($tokenHeader) -> get("http://127.0.1:8001/api/validate");
         if($response -> successful())
             return $next($request);
         return response(["message" => "No autorizado"], 403);
 
         
     }
}
