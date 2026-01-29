<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * Global middleware
     */
    protected $middleware = [];

    /**
     * Middleware groups
     */
    protected $middlewareGroups = [
        'web' => [
            \Illuminate\Session\Middleware\StartSession::class,
        ],

        'api' => [],
    ];

    /**
     * Route middleware
     */
    protected $routeMiddleware = [
        'check.age' => \App\Http\Middleware\CheckAge::class,
    ];
}
