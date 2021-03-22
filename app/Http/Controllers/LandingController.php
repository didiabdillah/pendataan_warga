<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        return view('landing.form');
    }

    public function cek()
    {
        return view('landing.cek');
    }
}
