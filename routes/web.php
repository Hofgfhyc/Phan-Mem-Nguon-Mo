<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AgeController;

/*
|--------------------------------------------------------------------------
| AGE
|--------------------------------------------------------------------------
*/

Route::get('/', [AgeController::class, 'form'])->name('age.form');
Route::post('/age', [AgeController::class, 'check'])->name('age.check');


/*
|--------------------------------------------------------------------------
| AUTH
|--------------------------------------------------------------------------
*/

Route::get('/signin', [AuthController::class, 'showSignin'])
    ->middleware('check.age')
    ->name('signin');

Route::post('/signin', [AuthController::class, 'checkSignIn'])
    ->middleware('check.age')
    ->name('check.signin');

Route::get('/login', [AuthController::class, 'showLogin'])
    ->middleware('check.age')
    ->name('login');

Route::post('/login', [AuthController::class, 'checkLogin'])
    ->middleware('check.age')
    ->name('check.login');

Route::get('/logout', [AuthController::class, 'logout'])
    ->middleware(['check.age','check.login'])
    ->name('logout');


/*
|--------------------------------------------------------------------------
| HOME (PHẢI LOGIN)
|--------------------------------------------------------------------------
*/

Route::get('/home', function () {
    return view('home');
})->middleware(['check.age','check.login'])->name('home');


/*
|--------------------------------------------------------------------------
| PRODUCT (PHẢI LOGIN)
|--------------------------------------------------------------------------
*/

Route::prefix('product')->middleware(['check.age','check.login'])->group(function () {

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
| BANCO
|--------------------------------------------------------------------------
*/
Route::prefix('banco')->middleware('check.age')->group(function () {

    Route::get('/form', function (\Illuminate\Http\Request $request) {

        $n = $request->n;

        return view('banco_form', compact('n'));

    })->name('banco.form');

});



/*
|--------------------------------------------------------------------------
| SINH VIEN
|--------------------------------------------------------------------------
*/

Route::get('/sinhvien', function () {
    return view('sinhvien', [
        'name' => 'Pham Dinh Hong Phuc',
        'mssv' => '40103'
    ]);
})->middleware('check.age')->name('sinhvien');


use App\Http\Controllers\CategoryController;

Route::resource('categories', CategoryController::class);

/*
|--------------------------------------------------------------------------
| FALLBACK
|--------------------------------------------------------------------------
*/

Route::fallback(function () {
    return response()->view('error.404', [], 404);
});
