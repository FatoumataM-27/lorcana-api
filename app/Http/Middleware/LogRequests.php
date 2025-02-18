<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LogRequests
{
    public function handle(Request $request, Closure $next)
    {
        Log::info('Request URL: ' . $request->fullUrl());
        Log::info('Request Method: ' . $request->method());
        Log::info('Request Headers: ' . json_encode($request->headers->all()));
        
        return $next($request);
    }
}
