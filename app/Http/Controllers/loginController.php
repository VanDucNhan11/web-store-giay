<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Đăng nhập thành công
            return redirect()->intended('dashboard');
        }

        // Đăng nhập thất bại
        return redirect()->back()->withErrors(['email' => 'These credentials do not match our records.']);
    }
}
