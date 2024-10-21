<?php

namespace App\Providers;

<<<<<<< HEAD
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
=======
// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
>>>>>>> danhmuc_list

class AuthServiceProvider extends ServiceProvider
{
    /**
<<<<<<< HEAD
     * The policy mappings for the application.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @var array<class-string, class-string>
=======
     * @var array
>>>>>>> origin/them_slide
=======
     * @var array<class-string, class-string>
>>>>>>> Login_Register
=======
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
>>>>>>> danhmuc_list
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
<<<<<<< HEAD
     *
     * @return void
     */
    public function boot()
=======
     */
    public function boot(): void
>>>>>>> danhmuc_list
    {
        $this->registerPolicies();

        //
    }
}
