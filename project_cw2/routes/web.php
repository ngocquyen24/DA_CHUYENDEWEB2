<?php
<<<<<<< HEAD
<<<<<<< HEAD

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
<<<<<<< HEAD
use App\Http\Controllers\Admin\ProductController;
=======
>>>>>>> Login_Register
=======
=======
>>>>>>> danhmuc_list
namespace Illuminate\Session\Middleware;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Users\LoginController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SliderController;



<<<<<<< HEAD
>>>>>>> danhmuc_list
=======
>>>>>>> danhmuc_list

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
<<<<<<< HEAD
<<<<<<< HEAD
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
=======
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
>>>>>>> danhmuc_list
=======
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
>>>>>>> danhmuc_list
|
*/

Route::get('/', function () {
    return view('welcome');
});
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

  #Product
  Route::prefix('products')->group(function () {
    Route::get('add', [ProductController::class, 'create']);
    Route::post('add', [ProductController::class, 'store']);
    Route::get('list', [ProductController::class, 'index']);
    Route::get('edit/{product}', [ProductController::class, 'show']);
    Route::post('edit/{product}', [ProductController::class, 'update']);
    Route::DELETE('destroy', [ProductController::class, 'destroy']);
});
=======
use App\Http\Controllers\Admin\Users\LoginController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SliderController;

=======
>>>>>>> Login_Register
Route::get('admin/users/login', [LoginController::class, 'index'])->name('login');
Route::post('admin/users/login/store', [LoginController::class, 'store']);

Route::get('signout', [LoginController::class, 'signOut'])->name('signout');
<<<<<<< HEAD

Route::middleware(['auth'])->group(function () {

=======
=======
>>>>>>> danhmuc_list

Route::get('admin/users/login',[LoginController::class, 'index'])->name('login');
Route::post('admin/users/login/store',[LoginController::class, 'store']);



// Route::get('admin/main',[MainController::class,'index'])->name('admin')->middleware('auth');


Route::middleware(['auth'])->group(function () {
<<<<<<< HEAD
>>>>>>> danhmuc_list
=======
>>>>>>> danhmuc_list
    Route::prefix('admin')->group(function () {

        Route::get('/', [MainController::class, 'index'])->name('admin');
        Route::get('main', [MainController::class, 'index']);

        #Menu
        Route::prefix('menus')->group(function () {
            Route::get('add', [MenuController::class, 'create']);
            Route::post('add', [MenuController::class, 'store']);
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> danhmuc_list
=======

>>>>>>> danhmuc_list
            Route::get('list', [MenuController::class, 'index']);
            Route::get('edit/{menu}', [MenuController::class, 'show']);
            Route::post('edit/{menu}', [MenuController::class, 'update']);
            Route::DELETE('destroy', [MenuController::class, 'destroy']);
        });
<<<<<<< HEAD
<<<<<<< HEAD

        #Product
        Route::prefix('products')->group(function () {
            Route::get('add', [ProductController::class, 'create']);
            Route::post('add', [ProductController::class, 'store']);
            Route::get('list', [ProductController::class, 'index']);
            Route::get('edit/{product}', [ProductController::class, 'show']);
            Route::post('edit/{product}', [ProductController::class, 'update']);
            Route::DELETE('destroy', [ProductController::class, 'destroy']);
        });

        #Slider
        Route::prefix('sliders')->group(function () {
            Route::get('add', [SliderController::class, 'create']);
            Route::post('add', [SliderController::class, 'store']);
            Route::get('list', [SliderController::class, 'index']);
            Route::get('edit/{slider}', [SliderController::class, 'show']);
            Route::post('edit/{slider}', [SliderController::class, 'update']);
            Route::DELETE('destroy', [SliderController::class, 'destroy']);
        });

        #Upload
        Route::post('upload/services', [\App\Http\Controllers\Admin\UploadController::class, 'store']);

        #Cart
        Route::get('customers', [\App\Http\Controllers\Admin\CartController::class, 'index']);
        Route::get('customers/view/{customer}', [\App\Http\Controllers\Admin\CartController::class, 'show']);
    });
});

Route::get('/', [App\Http\Controllers\MainController::class, 'index']);
Route::post('/services/load-product', [App\Http\Controllers\MainController::class, 'loadProduct']);

Route::get('danh-muc/{id}-{slug}.html', [App\Http\Controllers\MenuController::class, 'index']);
Route::get('san-pham/{id}-{slug}.html', [App\Http\Controllers\ProductController::class, 'index']);

Route::post('add-cart', [App\Http\Controllers\CartController::class, 'index']);
Route::get('carts', [App\Http\Controllers\CartController::class, 'show']);
Route::post('update-cart', [App\Http\Controllers\CartController::class, 'update']);
Route::get('carts/delete/{id}', [App\Http\Controllers\CartController::class, 'remove']);
Route::post('carts', [App\Http\Controllers\CartController::class, 'addCart']);

=======
>>>>>>> Login_Register
Route::get('admin/users/register',[LoginController::class, 'indexRegister'])->name('indexRegister');
Route::post('admin/users/register',[LoginController::class, 'register'])->name('register');


Route::get('admin/users/forget-password',[LoginController::class, 'forgetPassword'])->name('forgetPassword');//Hien thi form quen mat khau
Route::post('admin/users/forget-password',[LoginController::class, 'postForgetPass'])->name('postForgetPass'); // khi submit quen mat khau
Route::get('admin/users/get-password',[LoginController::class, 'getPassword'])->name('getPassword');    // gui link
Route::get('admin/users/get-password/{customer}/{token}',[LoginController::class, 'postGetPassword']);    // nhap lai mat khau 2 lan
<<<<<<< HEAD
>>>>>>> origin/them_slide
=======
>>>>>>> Login_Register
=======
=======
>>>>>>> danhmuc_list
    });
});




<<<<<<< HEAD
>>>>>>> danhmuc_list
=======
>>>>>>> danhmuc_list
