<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ForceHttps
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
        if (!$request->secure() || strpos($request->header('host'), 'www') === false) {
            $url = $request->secure() ? 'https://' : 'https://www.';
            $url .= $request->getHost();
            if (!in_array($request->getPort(), [80, 443])) {
                $url .= ':' . $request->getPort();
            }
            $url .= $request->getRequestUri();

            return redirect()->away($url);
        }

        return $next($request);
    }
}