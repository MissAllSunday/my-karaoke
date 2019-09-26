<?php

namespace App\Http\Controllers;

class LoginController extends Controller
{
    public function __construct()
    {
    }

    public function nick()
    {
        return view('login', []);
    }
}