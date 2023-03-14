<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RemoveDoubleSlashes
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
        $path = $request->path();
        $segments = explode('/', $path);
        $filteredSegments = array_filter($segments, function ($segment) {
            return $segment !== '';
        });
        $path = implode('/', $filteredSegments);
        $request->server->set('REQUEST_URI', $path);
        return $next($request);
    }
}