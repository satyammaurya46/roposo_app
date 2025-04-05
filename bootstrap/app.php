<?php

use App\Providers\CategoryServiceProvider;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Route;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
        // then: function () {
        //     Route::middleware('web')
        //         ->prefix('admin')
        //         ->group(base_path('routes/admin.php'));
        // }
    )
    ->withProviders([
        CategoryServiceProvider::class, // ✅ Register custom service provider
    ])
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'is_admin' => \App\Http\Middleware\IsAdmin::class, // ✅ Register custom middleware
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
// ✅ Load admin.php after the application is created
Route::middleware('web')
    ->prefix('admin')
    ->group(base_path('routes/admin.php'));