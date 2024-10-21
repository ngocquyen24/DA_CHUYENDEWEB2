<?php

namespace App\Providers;

use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\ServiceProvider;

class BroadcastServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @return void
     */
    public function boot()
=======
     */
    public function boot(): void
>>>>>>> danhmuc_list
=======
     */
    public function boot(): void
>>>>>>> danhmuc_list
    {
        Broadcast::routes();

        require base_path('routes/channels.php');
    }
}
