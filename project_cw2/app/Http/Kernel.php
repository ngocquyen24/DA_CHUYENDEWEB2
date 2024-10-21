<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @var array<int, class-string|string>
=======
     * @var array
>>>>>>> origin/them_slide
=======
     * @var array<int, class-string|string>
>>>>>>> Login_Register
=======
     * @var array<int, class-string|string>
>>>>>>> danhmuc_list
=======
     * @var array<int, class-string|string>
>>>>>>> danhmuc_list
     */
    protected $middleware = [
        // \App\Http\Middleware\TrustHosts::class,
        \App\Http\Middleware\TrustProxies::class,
<<<<<<< HEAD
<<<<<<< HEAD
        \Fruitcake\Cors\HandleCors::class,
=======
        \Illuminate\Http\Middleware\HandleCors::class,
>>>>>>> danhmuc_list
=======
        \Illuminate\Http\Middleware\HandleCors::class,
>>>>>>> danhmuc_list
        \App\Http\Middleware\PreventRequestsDuringMaintenance::class,
        \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
        \App\Http\Middleware\TrimStrings::class,
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
    ];

    /**
     * The application's route middleware groups.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @var array<string, array<int, class-string|string>>
=======
     * @var array
>>>>>>> origin/them_slide
=======
     * @var array<string, array<int, class-string|string>>
>>>>>>> Login_Register
=======
     * @var array<string, array<int, class-string|string>>
>>>>>>> danhmuc_list
=======
     * @var array<string, array<int, class-string|string>>
>>>>>>> danhmuc_list
     */
    protected $middlewareGroups = [
        'web' => [
            \App\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
<<<<<<< HEAD
<<<<<<< HEAD
            // \Illuminate\Session\Middleware\AuthenticateSession::class,
=======
>>>>>>> danhmuc_list
=======
>>>>>>> danhmuc_list
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \App\Http\Middleware\VerifyCsrfToken::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],

        'api' => [
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            // \Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class,
=======
>>>>>>> origin/them_slide
=======
            // \Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class,
>>>>>>> Login_Register
            'throttle:api',
=======
            // \Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class,
            \Illuminate\Routing\Middleware\ThrottleRequests::class.':api',
>>>>>>> danhmuc_list
=======
            // \Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class,
            \Illuminate\Routing\Middleware\ThrottleRequests::class.':api',
>>>>>>> danhmuc_list
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],
    ];

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @var array<string, class-string|string>
=======
     * @var array
>>>>>>> origin/them_slide
=======
     * @var array<string, class-string|string>
>>>>>>> Login_Register
     */
    protected $routeMiddleware = [
        'auth' => \App\Http\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
=======
=======
>>>>>>> danhmuc_list
     * The application's middleware aliases.
     *
     * Aliases may be used to conveniently assign middleware to routes and groups.
     *
     * @var array<string, class-string|string>
     */
    protected $middlewareAliases = [
        'auth' => \App\Http\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'auth.session' => \Illuminate\Session\Middleware\AuthenticateSession::class,
<<<<<<< HEAD
>>>>>>> danhmuc_list
=======
>>>>>>> danhmuc_list
        'cache.headers' => \Illuminate\Http\Middleware\SetCacheHeaders::class,
        'can' => \Illuminate\Auth\Middleware\Authorize::class,
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
        'password.confirm' => \Illuminate\Auth\Middleware\RequirePassword::class,
<<<<<<< HEAD
<<<<<<< HEAD
        'signed' => \Illuminate\Routing\Middleware\ValidateSignature::class,
=======
        'signed' => \App\Http\Middleware\ValidateSignature::class,
>>>>>>> danhmuc_list
=======
        'signed' => \App\Http\Middleware\ValidateSignature::class,
>>>>>>> danhmuc_list
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
        'verified' => \Illuminate\Auth\Middleware\EnsureEmailIsVerified::class,
    ];
}
