<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\TrimStrings as Middleware;

class TrimStrings extends Middleware
{
    /**
     * The names of the attributes that should not be trimmed.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @var array<int, string>
=======
     * @var array
>>>>>>> origin/them_slide
=======
     * @var array<int, string>
>>>>>>> Login_Register
=======
     * @var array<int, string>
>>>>>>> danhmuc_list
=======
     * @var array<int, string>
>>>>>>> danhmuc_list
     */
    protected $except = [
        'current_password',
        'password',
        'password_confirmation',
    ];
}
