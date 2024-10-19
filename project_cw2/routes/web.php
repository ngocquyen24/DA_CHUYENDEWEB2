<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

  #Product
  Route::prefix('products')->group(function () {
    Route::get('add', [ProductController::class, 'create']);
    Route::post('add', [ProductController::class, 'store']);
    Route::get('list', [ProductController::class, 'index']);
    Route::get('edit/{product}', [ProductController::class, 'show']);
    Route::post('edit/{product}', [ProductController::class, 'update']);
    Route::DELETE('destroy', [ProductController::class, 'destroy']);
});
