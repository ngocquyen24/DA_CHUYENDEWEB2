<?php

namespace App\Models;

<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> Login_Register
=======
=======
>>>>>>> danhmuc_list
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
<<<<<<< HEAD
>>>>>>> danhmuc_list
=======
>>>>>>> danhmuc_list
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

class User extends Authenticatable
{
    use HasFactory, Notifiable;
>>>>>>> origin/them_slide
=======
>>>>>>> Login_Register
=======
>>>>>>> danhmuc_list
=======
>>>>>>> danhmuc_list

    /**
     * The attributes that are mass assignable.
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
    protected $fillable = [
        'name',
        'email',
        'password',
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
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        'phone',
        'avatar',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
>>>>>>> origin/them_slide
=======
>>>>>>> Login_Register
=======
>>>>>>> danhmuc_list
=======
>>>>>>> danhmuc_list
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * The attributes that should be cast.
     *
     * @var array<string, string>
=======
     * The attributes that should be cast to native types.
     *
     * @var array
>>>>>>> origin/them_slide
=======
     * The attributes that should be cast.
     *
     * @var array<string, string>
>>>>>>> Login_Register
=======
     * The attributes that should be cast.
     *
     * @var array<string, string>
>>>>>>> danhmuc_list
=======
     * The attributes that should be cast.
     *
     * @var array<string, string>
>>>>>>> danhmuc_list
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
