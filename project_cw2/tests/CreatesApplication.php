<?php

namespace Tests;

use Illuminate\Contracts\Console\Kernel;
<<<<<<< HEAD
=======
use Illuminate\Foundation\Application;
>>>>>>> danhmuc_list

trait CreatesApplication
{
    /**
     * Creates the application.
<<<<<<< HEAD
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
=======
     */
    public function createApplication(): Application
>>>>>>> danhmuc_list
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Kernel::class)->bootstrap();

        return $app;
    }
}
