<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\CheckLogin;

/* Route::get('/test500', function () {
    abort(500);
}); test หน้า error 500 */


Route::middleware([CheckLogin::class])->group(function () {
    Route::get('/users', [UserController::class, 'index']);
    Route::get('/user/{id}', [UserController::class, 'edit']);
    Route::put('/user', [UserController::class, 'edit_action']);
    Route::delete('/user', [UserController::class, 'delete']);

    Route::get('/product', [ProductController::class, 'index']);
    Route::post('/product', [ProductController::class, 'add_product']);
});

Route::get('/',
    [HomeController::class, 'index'])->middleware([CheckLogin::class]);

Route::get('/login',
    [LoginController::class, 'index']);
Route::post('/login',
    [LoginController::class, 'login']);
Route::get('/logout', function () {
    session()->forget('user');
    session()->flush();
    return redirect('/login');
});

Route::get('/register',
    [RegisterController::class, 'index']);
Route::get('/home',
    [HomeController::class, 'index']);
Route::get('/',
    [HomeController::class, 'index']);

Route::post('/register',
    [RegisterController::class, 'create']);


Route::get('/users', [UserController::class, 'index']);
Route::get('/user/{id}', [UserController::class, 'edit']);
Route::put('/user', [UserController::class, 'edit_action']);
Route::delete('/user', [UserController::class, 'delete']);

Route::get('/mycontroller/{id?}',
    [MyController::class, 'myfunction']);
Route::post('/mycontroller/{id?}',
    [MyController::class, 'MYFUNCTION']);
