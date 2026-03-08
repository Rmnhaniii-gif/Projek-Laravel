<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // tampilkan form login
    public function showLoginForm()
    {
        return view('pages.auth.login');
    }

    // proses login (sementara kosong dulu)
    public function login(Request $request)
    {
        // sementara untuk test aja
        return "Login berhasil dengan username: " . $request->username;
    }
}