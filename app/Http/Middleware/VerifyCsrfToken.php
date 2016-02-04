<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as CoreVerifier;

class VerifyCsrfToken extends CoreVerifier
{
    /**
     * @var array
     */
    protected $except = [];
}
