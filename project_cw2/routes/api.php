<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
<<<<<<< HEAD
<<<<<<< HEAD
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

<<<<<<< HEAD
<<<<<<< HEAD
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
=======
Route::middleware('auth:api')->get('/user', function (Request $request) {
>>>>>>> origin/them_slide
=======
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
>>>>>>> Login_Register
=======
=======
>>>>>>> danhmuc_list
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
<<<<<<< HEAD
>>>>>>> danhmuc_list
=======
>>>>>>> danhmuc_list
    return $request->user();
});
