<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function signIn()
    {
        return view('auth.signin');
    }

    public function checkSignIn(Request $request)
    {
        if (
            $request->username === 'hongphuc4444' &&
            $request->password === 'doibuon123' &&
            $request->repass   === 'doibuon123' &&
            $request->mssv     === '4010367' &&
            $request->class    === '67PM2' &&
            $request->gender   === 'Nam'
        ) {
            return view('auth.result', [
                'success' => true,
                'message' => 'Đăng ký thành công!'
            ]);
        }

        return view('auth.result', [
            'success' => false,
            'message' => 'Đăng ký thất bại!'
        ]);
    }
}
