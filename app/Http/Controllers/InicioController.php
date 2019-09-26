<?php

namespace App\Http\Controllers;

class InicioController extends Controller
{
    public function __construct()
    {
        return view('inicio', ['something' => 'something']);
    }
}