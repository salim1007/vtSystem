<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/register', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('index');
});

Route::get('/dynamic', function () {
    return view('viewchanger');
});

Route::get('/userProfile', function () {
    return view('user');
});

Route::get('/users', [UserController::class, 'index'])->name('users.index');
