<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        // ganti 'home' dengan nama view yang ada, misalnya 'welcome'
        return view('home');
    }
}