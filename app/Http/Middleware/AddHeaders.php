<?php

namespace App\Http\Middleware;

public function handle($request, Closure $next){
    $jwt_token = $request->cookie("jwt_token");
    if(! $jwt_token){
        return $next($request);
    }

    $request->headers->set('Authorization', 'Bearer {$jwt_token}');

    return $next($request);
}