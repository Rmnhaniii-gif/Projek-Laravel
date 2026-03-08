<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
 public function index () {
$loggedIn = true;
return view('user.home', array(
'loggedIn' => $loggedIn
));
}

    public function register()
    {
        return view('register');
    }

    public function storeRegister(Request $request)
    {
        // Validasi input
        $request->validate([
            'firstname' => 'required',
            'lastname'  => 'required',
            'username'  => 'required',
            'email'     => 'required|email',
            'password'  => 'required|min:6',
        ]);

        // Sementara: hanya redirect dengan session success
        return redirect()->route('user.register')
                         ->with('success', 'Register berhasil disimpan!');
    }

}