<?php

namespace App\Http\Middleware;

use Illuminate\Cookie\Middleware\EncryptCookies as CoreEncrypter;

class EncryptCookies extends CoreEncrypter
{
    /**
     * @var array
     */
    protected $except = [];
}
