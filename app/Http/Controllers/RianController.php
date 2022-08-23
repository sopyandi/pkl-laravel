<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RianController extends Controller
{
    public function login()
    {
        return view('login');
    }
}
