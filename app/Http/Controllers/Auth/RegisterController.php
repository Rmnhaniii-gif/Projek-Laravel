<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function index()
    {
        return view('pages.auth.register');
    }

    public function action(Request $request)
    {
        // Validasi input
        $request->validate([
            'firstname' => 'required|string|max:150',
            'lastname'  => 'required|string|max:150',
            'username'  => 'required|string|max:150|unique:users,username',
            'email'     => 'required|email|max:150|unique:users,email',
            'password'  => 'required|string|min:6',
        ]);

        // Data user
        $data = [
            'firstname' => $request->input('firstname'),
            'lastname'  => $request->input('lastname'),
            'username'  => $request->input('username'),
            'email'     => $request->input('email'),
            'password'  => bcrypt($request->input('password')),
        ];

        // Simpan user baru
        $operation = User::create($data);

        if ($operation) {
            return redirect()->back()->with('success', 'Successfully registered account!');
        } else {
            return redirect()->back()->with('error', 'Failed to register account!');
        }
    }
}
