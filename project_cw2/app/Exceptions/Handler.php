<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * A list of the exception types that are not reported.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @var array<int, class-string<Throwable>>
=======
     * @var array
>>>>>>> origin/them_slide
=======
     * @var array<int, class-string<Throwable>>
>>>>>>> Login_Register
=======
=======
>>>>>>> danhmuc_list
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array<class-string<\Throwable>, \Psr\Log\LogLevel::*>
     */
    protected $levels = [
        //
    ];

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
<<<<<<< HEAD
>>>>>>> danhmuc_list
=======
>>>>>>> danhmuc_list
     */
    protected $dontReport = [
        //
    ];

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * A list of the inputs that are never flashed for validation exceptions.
     *
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
     * A list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
>>>>>>> danhmuc_list
=======
     * A list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
>>>>>>> danhmuc_list
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @return void
     */
    public function register()
=======
     */
    public function register(): void
>>>>>>> danhmuc_list
=======
     */
    public function register(): void
>>>>>>> danhmuc_list
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }
}
