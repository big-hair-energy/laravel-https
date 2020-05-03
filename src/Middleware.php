<?php

namespace BigHairEnergy\Https;

use Closure;

class Middleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!config('https.enabled')) {
            return $next($request);
        }

        // TODO
    }
}
