<?php

return [
    // default session driver
    // supported: "file", "cookie", "database", "apc", "memcached", "redis", "array"
    'driver' => env('SESSION_DRIVER', 'file'),

    // session lifetime
    'lifetime' => 120,

    // session expire on close
    'expire_on_close' => false,

    // session encryption
    'encrypt' => false,

    // session file location
    'files' => storage_path('framework/sessions'),

    // session database connection
    'connection' => null,

    // session database table
    'table' => 'session',

    // session sweeping lottery
    'lottery' => [2, 100],

    // session cookie name
    'cookie' => 'PHPSESSID',

    // session cookie path
    'path' => '/',

    // session cookie domain
    'domain' => null,

    // HTTP only cookies
    'secure' => false,

    // HTTP access only
    'http_only' => true,
];
