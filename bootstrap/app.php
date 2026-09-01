<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

$app = Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();

/* Tambahkan baris ini biar Vercel nggak error 500 */
if (isset($_ENV['VERCEL']) || isset($_ENV['AWS_LAMBDA_FUNCTION_NAME'])) {
    $app->useStoragePath('/tmp/storage');
}

return $app;