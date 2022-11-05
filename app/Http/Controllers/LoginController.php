<?php

namespace App\Http\Controllers;

class LoginController extends Controller
{
    public function __construct()
    {
        
    }

    public function index(){
        return view('pages.login');
    }
}
