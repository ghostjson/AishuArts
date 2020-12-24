<?php

namespace App\Http\Middleware;

use App\Models\WebsiteStatistics;
use Closure;
use Illuminate\Http\Request;

class TrafficStatisticsMiddleware
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
        WebsiteStatistics::addTraffic();
        return $next($request);
    }
}
