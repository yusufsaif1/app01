<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RouteMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        echo " This is route Middleware";
        echo "This will also work as global middleware";
        return $next($request);
    }
}
