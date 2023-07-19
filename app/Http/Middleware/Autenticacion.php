<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use Illuminate\Auth\Middleware\Autenticacion as Middleware;

class Autenticacion
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $tokenHeader = [ "Authorization" => $request -> header("Authorization")];

        $response = Http::withHeaders($tokenHeader) -> get("http://127.0.0.1:8001/api/validate");
        if($response -> successful())
            return $next($request);
        return response(["message" => "No autorizado"], 403);

        
    }
}