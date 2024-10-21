<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * This is used by Laravel authentication to redirect users after login.
=======
     * Typically, users are redirected here after authentication.
>>>>>>> danhmuc_list
=======
     * Typically, users are redirected here after authentication.
>>>>>>> danhmuc_list
     *
     * @var string
     */
    public const HOME = '/home';

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * The controller namespace for the application.
     *
     * When present, controller route declarations will automatically be prefixed with this namespace.
     *
     * @var string|null
     */
    // protected $namespace = 'App\\Http\\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
=======
     * Define your route model bindings, pattern filters, and other route configuration.
     */
    public function boot(): void
>>>>>>> danhmuc_list
=======
     * Define your route model bindings, pattern filters, and other route configuration.
     */
    public function boot(): void
>>>>>>> danhmuc_list
    {
        $this->configureRateLimiting();

        $this->routes(function () {
<<<<<<< HEAD
<<<<<<< HEAD
            Route::prefix('api')
                ->middleware('api')
                ->namespace($this->namespace)
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
=======
=======
>>>>>>> danhmuc_list
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
<<<<<<< HEAD
>>>>>>> danhmuc_list
=======
>>>>>>> danhmuc_list
                ->group(base_path('routes/web.php'));
        });
    }

    /**
     * Configure the rate limiters for the application.
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by(optional($request->user())->id ?: $request->ip());
=======
=======
>>>>>>> danhmuc_list
     */
    protected function configureRateLimiting(): void
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
<<<<<<< HEAD
>>>>>>> danhmuc_list
=======
>>>>>>> danhmuc_list
        });
    }
}
