<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Trả về view đăng ký
    public function signIn()
    {
        return view('auth.signin');
    }

    // Xử lý đăng ký
    public function checkSignIn(Request $request)
    {
        // Lấy dữ liệu từ form
        $username = $request->input('username');
        $password = $request->input('password');
        $repass   = $request->input('repass');
        $mssv     = $request->input('mssv');
        $class    = $request->input('class');
        $gender   = $request->input('gender');

        // Kiểm tra dữ liệu
        if (
            $username === 'hongphuc4444' &&
            $password === 'doibuon123' &&
            $repass   === 'doibuon123' &&
            $mssv     === '4010367' &&
            $class    === '67PM2' &&
            $gender   === 'Nam'
        ) {
            return view('auth.result', [
                'success' => true,
                'message' => 'Đăng ký thành công!'
            ]);
        }

        return view('auth.result', [
            'success' => false,
            'message' => 'Đăng ký thất bại! Vui lòng kiểm tra lại thông tin.'
        ]);
    }
}
