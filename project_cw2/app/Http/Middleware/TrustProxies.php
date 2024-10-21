<?php

namespace App\Http\Middleware;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Http\Middleware\TrustProxies as Middleware;
=======
use Fideloper\Proxy\TrustProxies as Middleware;
>>>>>>> origin/them_slide
=======
use Illuminate\Http\Middleware\TrustProxies as Middleware;
>>>>>>> Login_Register
=======
use Illuminate\Http\Middleware\TrustProxies as Middleware;
>>>>>>> danhmuc_list
=======
use Illuminate\Http\Middleware\TrustProxies as Middleware;
>>>>>>> danhmuc_list
use Illuminate\Http\Request;

class TrustProxies extends Middleware
{
    /**
     * The trusted proxies for this application.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @var array<int, string>|string|null
=======
     * @var array|string|null
>>>>>>> origin/them_slide
=======
     * @var array<int, string>|string|null
>>>>>>> Login_Register
=======
     * @var array<int, string>|string|null
>>>>>>> danhmuc_list
=======
     * @var array<int, string>|string|null
>>>>>>> danhmuc_list
     */
    protected $proxies;

    /**
     * The headers that should be used to detect proxies.
     *
     * @var int
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> Login_Register
=======
>>>>>>> danhmuc_list
=======
>>>>>>> danhmuc_list
    protected $headers =
        Request::HEADER_X_FORWARDED_FOR |
        Request::HEADER_X_FORWARDED_HOST |
        Request::HEADER_X_FORWARDED_PORT |
        Request::HEADER_X_FORWARDED_PROTO |
        Request::HEADER_X_FORWARDED_AWS_ELB;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
    protected $headers = Request::HEADER_X_FORWARDED_FOR | Request::HEADER_X_FORWARDED_HOST | Request::HEADER_X_FORWARDED_PORT | Request::HEADER_X_FORWARDED_PROTO | Request::HEADER_X_FORWARDED_AWS_ELB;
>>>>>>> origin/them_slide
=======
>>>>>>> Login_Register
=======
>>>>>>> danhmuc_list
=======
>>>>>>> danhmuc_list
}
