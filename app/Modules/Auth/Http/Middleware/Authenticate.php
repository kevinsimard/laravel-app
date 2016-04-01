<?php

namespace App\Modules\Auth\Http\Middleware;

class Authenticate
{
    /**
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  ...$guards
     * @return mixed
     *
     * @throws \Symfony\Component\HttpKernel\Exception\HttpException
     */
    public function handle($request, \Closure $next, ...$guards)
    {
        if ($this->check($guards)) {
            return $next($request);
        }

        if ($request->ajax() || $request->wantsJson() || $request->isJson()) {
            abort(401);
        }

        return redirect()->guest('login');
    }

    /**
     * @param  array  $guards
     * @return bool
     */
    protected function check(array $guards)
    {
        if (empty($guards)) {
            return auth()->check();
        }

        foreach ($guards as $guard) {
            if (auth()->guard($guard)->check()) {
                auth()->shouldUse($guard);

                return true;
            }
        }

        return false;
    }
}
