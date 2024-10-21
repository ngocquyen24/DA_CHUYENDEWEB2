<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
>>>>>>> origin/them_slide
=======
>>>>>>> Login_Register
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
=======
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
>>>>>>> danhmuc_list
    {
        // $schedule->command('inspire')->hourly();
    }

    /**
     * Register the commands for the application.
<<<<<<< HEAD
     *
     * @return void
     */
    protected function commands()
=======
     */
    protected function commands(): void
>>>>>>> danhmuc_list
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
