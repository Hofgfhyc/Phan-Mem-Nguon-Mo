<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // REGISTER PAGE
    public function showSignin()
    {
        return view('auth.signin');
    }

    // HANDLE REGISTER
    public function checkSignIn(Request $request)
    {
        // Demo: đăng ký xong chuyển sang login
        return redirect()->route('login')
            ->with('success', 'Đăng ký thành công! Vui lòng đăng nhập.');
    }

    // LOGIN PAGE
    public function showLogin()
    {
        return view('auth.login');
    }

    // LOGIN HANDLE
    public function checkLogin(Request $request)
    {
        $username = $request->username;
        $password = $request->password;

        if ($username === 'hongphuc4444' && $password === 'ditmecuocdoi123') {

            session([
                'logged_in' => true,
                'user' => $username
            ]);

            return redirect()->route('home');
        }

        return back()->with('error', 'Sai tài khoản hoặc mật khẩu!');
    }

    // LOGOUT
    public function logout()
    {
        session()->forget(['logged_in', 'user']);
        return redirect()->route('signin');
    }
}
