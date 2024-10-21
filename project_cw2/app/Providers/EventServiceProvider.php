<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * The event listener mappings for the application.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @var array<class-string, array<int, class-string>>
=======
     * @var array
>>>>>>> origin/them_slide
=======
     * @var array<class-string, array<int, class-string>>
>>>>>>> Login_Register
=======
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
>>>>>>> danhmuc_list
=======
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
>>>>>>> danhmuc_list
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @return void
     */
    public function boot()
    {
        //
    }
=======
=======
>>>>>>> danhmuc_list
     */
    public function boot(): void
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
<<<<<<< HEAD
>>>>>>> danhmuc_list
=======
>>>>>>> danhmuc_list
}
