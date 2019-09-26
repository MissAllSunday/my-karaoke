<?php

namespace App\Http\Controllers;

class RateController extends Controller
{
    public function __construct()
    {
        return view('rate', ['something' => 'something']);
    }
}