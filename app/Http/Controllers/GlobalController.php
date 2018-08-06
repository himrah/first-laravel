<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GlobalController extends Controller
{
    //
    public function index()
    {
        return view('my');
    }

    public function profile()
    {
        return view('profile');
    }
}
