<?php

use Illuminate\Support\Facades\Route;

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
| BÀN CỜ - FORM & VIEW
|--------------------------------------------------------------------------
*/

// Form nhập n
Route::get('/banco', function () {
    return view('banco_form');
})->name('banco.form');

// Hiển thị bàn cờ
Route::get('/banco/view', function () {
    $n = request('n');

    // kiểm tra hợp lệ
    if (!$n || $n < 2 || $n > 20) {
        $n = 8;
    }

    return view('banco', compact('n'));
})->name('banco.view');

/*
|--------------------------------------------------------------------------
| FALLBACK 404
|--------------------------------------------------------------------------
*/
Route::fallback(function () {
    return response()->view('error.404', [], 404);
});
