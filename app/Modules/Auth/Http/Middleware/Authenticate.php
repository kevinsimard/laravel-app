<?php

namespace App\Modules\Auth\Http\Middleware;

use Closure;

class Authenticate
{
    /**
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     *
     * @throws \Symfony\Component\HttpKernel\Exception\HttpException
     */
    public function handle($request, Closure $next, string $guard = null)
    {
        if (auth()->guard($guard)->guest()) {
            if ($request->ajax() || $request->wantsJson()) {
                abort(401);
            } else {
                return redirect()->guest('login');
            }
        }

        return $next($request);
    }
}
