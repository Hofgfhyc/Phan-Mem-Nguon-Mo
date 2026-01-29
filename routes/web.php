<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AgeController;

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
| AGE (PHẢI VÀO ĐÂY TRƯỚC)
|--------------------------------------------------------------------------
*/
Route::get('/age', [AgeController::class, 'form'])->name('age.form');
Route::post('/age', [AgeController::class, 'check'])->name('age.check');

/*
|--------------------------------------------------------------------------
| SIGN IN (BỊ KIỂM TRA TUỔI)
|--------------------------------------------------------------------------
*/
Route::get('/signin', [AuthController::class, 'signIn'])
    ->middleware('check.age')
    ->name('signin');

Route::post('/signin', [AuthController::class, 'checkSignIn'])
    ->middleware('check.age')
    ->name('check.signin');

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
| FALLBACK 404 (LUÔN ĐỂ CUỐI)
|--------------------------------------------------------------------------
*/
Route::fallback(function () {
    return response()->view('error.404', [], 404);
});
