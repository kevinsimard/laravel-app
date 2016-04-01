<?php

namespace App\Modules\Auth\Http\Middleware;

class RedirectIfAuthenticated
{
    /**
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, \Closure $next, $guard = null)
    {
        if (auth()->guard($guard)->check()) {
            return redirect('/');
        }

        return $next($request);
    }
}
