<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function __construct()
{
    
}
public function index2()
{
    return view('admin.inicial');
}

public function post()
{
    return view('admin.post');
}
    
}
