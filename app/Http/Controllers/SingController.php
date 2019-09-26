<?php

namespace App\Http\Controllers;

class SingController extends Controller
{
    public function __construct()
    {
        return view('sing', ['something' => 'something']);
    }
}