<?php

declare(strict_types=1);

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Torchlight\Middleware\RenderTorchlight;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware
            ->append(RenderTorchlight::class)
            ->validateCsrfTokens(except: ['support-bubble']);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
