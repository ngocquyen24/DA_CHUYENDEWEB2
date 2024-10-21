<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
<<<<<<< HEAD
<<<<<<< HEAD
    public function index()
    {
        return view('admin.home', [
           'title' => 'Trang Quản Trị Admin'
=======
    public function index(){
        return view('admin.home',[
            'title' => 'Quan tri Admin'
>>>>>>> danhmuc_list
=======
    public function index(){
        return view('admin.home',[
            'title' => 'Quan tri Admin'
>>>>>>> danhmuc_list
        ]);
    }
}
