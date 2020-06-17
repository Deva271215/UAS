<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    // menampilkan page auths login
    public function login()
    {
        return view('auths.login');
    }

    // melakukan postlogin admin, kemudian jika berhasil akan diarahkan pada page admin
    public function postlogin(Request $request)
    {
        // dd($request->all());
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/admin');
        }
        return redirect('/login');
    }

    // melakukan logout 
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
