<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    function index(){
        return view('admin.index');
    }

    function users(){
        return view('admin.users.index');
    }

    function categories(){
        return view('admin.categories');
    }
}
