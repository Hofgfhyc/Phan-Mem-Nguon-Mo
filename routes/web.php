<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| HOME
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('home');
})->name('home');

/*
|--------------------------------------------------------------------------
| SIGN IN
|--------------------------------------------------------------------------
*/
Route::get('/signin', [AuthController::class, 'signIn'])->name('signin');
Route::post('/signin', [AuthController::class, 'checkSignIn'])->name('check.signin');

/*
|--------------------------------------------------------------------------
| PRODUCT
|--------------------------------------------------------------------------
*/
Route::prefix('product')->group(function () {

    Route::get('/', function () {
        $products = [
            ['id' => 1, 'name' => 'iPhone 15', 'price' => 25000000],
            ['id' => 2, 'name' => 'Samsung S23', 'price' => 22000000],
            ['id' => 3, 'name' => 'Xiaomi 13', 'price' => 18000000],
        ];
        return view('product.index', compact('products'));
    })->name('product.index');

    Route::get('/add', function () {
        return view('product.add');
    })->name('product.add');

    Route::get('/{id}', function ($id) {
        return view('product.detail', compact('id'));
    })->name('product.detail');
});

/*
|--------------------------------------------------------------------------
| SINH VIÊN
|--------------------------------------------------------------------------
*/
Route::get('/sinhvien/{name?}/{mssv?}', function ($name = "Hong Phuc", $mssv = "4010367") {
    return view('sinhvien', compact('name', 'mssv'));
})->name('sinhvien');

/*
|--------------------------------------------------------------------------
| BÀN CỜ
|--------------------------------------------------------------------------
*/
Route::get('/banco', function () {
    return view('banco_form');
})->name('banco.form');

Route::get('/banco/view', function () {
    $n = request('n');

    if (!$n || $n < 2 || $n > 20) {
        $n = 8;
    }

    return view('banco', compact('n'));
})->name('banco.view');

/*
|--------------------------------------------------------------------------
| FALLBACK 404 (LUÔN ĐỂ CUỐI)
|--------------------------------------------------------------------------
*/
Route::fallback(function () {
    return response()->view('error.404', [], 404);
});
