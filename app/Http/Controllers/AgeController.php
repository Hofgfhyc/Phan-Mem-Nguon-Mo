<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgeController extends Controller
{
    public function form()
    {
        return view('age.form');
    }

    public function check(Request $request)
    {
        $age = $request->age;

        if ($age >= 18) {
            session(['age' => $age]);
            return redirect()->route('signin');
        }

        return back()->with('error', 'Bạn chưa đủ 18 tuổi!');
    }
}
