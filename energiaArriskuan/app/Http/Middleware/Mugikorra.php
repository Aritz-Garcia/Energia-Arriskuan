<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Jenssegers\Agent\Agent;

class Mugikorra
{
    public function handle(Request $request, Closure $next): Response
    {
        $agent = new Agent();
        if ($agent->isMobile() || $agent->isTablet()) {
            return redirect()->route('index');
        }
        return $next($request);
    }
}
