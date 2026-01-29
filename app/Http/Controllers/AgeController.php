<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgeController extends Controller
{
    // Hiển thị form nhập tuổi
    public function form()
    {
        return view('age.form');
    }

    // Xử lý form
    public function check(Request $request)
    {
        $age = $request->age;

        // Kiểm tra dữ liệu hợp lệ
        if (!is_numeric($age)) {
            return "Không được phép truy cập!";
        }

        // Lưu vào session
        session(['age' => (int)$age]);

        // Chuyển sang trang đăng ký
        return redirect()->route('signin');
    }
}
