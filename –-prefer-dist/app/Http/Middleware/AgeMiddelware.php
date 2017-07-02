<?php

namespace TestApp\Http\Middleware;

use Closure;

class AgeMiddelware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $age)
    {
		echo 'My freaking age:'.$age;
        return $next($request);
    }
}
