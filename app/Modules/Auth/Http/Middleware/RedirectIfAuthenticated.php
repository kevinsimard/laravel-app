<?php

namespace App\Modules\Auth\Http\Middleware;

use Closure;

class RedirectIfAuthenticated
{
    /**
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, string $guard = null)
    {
        if (auth()->guard($guard)->check()) {
            return redirect('/');
        }

        return $next($request);
    }
}
