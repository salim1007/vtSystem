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
    $token = session()->get('jwt_token');
    return view('viewchanger', ['token' => $token]);
});


Route::get('/userProfile', function () {
    return view('user');
});


//admin routes here..........

Route::get('/dashboard', function () {
    $token = session()->get('jwt_token');
    session()->put('vali','dashboard');
    return view('adminview', ['token' => $token]);
});

Route::get('/candlist', function () {
    $token = session()->get('jwt_token');
    session()->put('vali','candlist');
    return view('adminview', ['token' => $token]);
});
Route::get('/createPosts', function () {
    $token = session()->get('jwt_token');
    session()->put('vali','createPosts');
    return view('adminview', ['token' => $token]);
});
Route::get('/editCandidate', function () {
    $token = session()->get('jwt_token');
    session()->put('vali','editCandidate');
    return view('adminview', ['token' => $token]);
});
Route::get('/progress', function () {
    $token = session()->get('jwt_token');
    session()->put('vali','progress');
    return view('adminview', ['token' => $token]);
});
Route::get('/mailbox', function () {
    $token = session()->get('jwt_token');
    session()->put('vali','mailbox');
    return view('adminview', ['token' => $token]);
});
Route::get('/settings', function () {
    $token = session()->get('jwt_token');
    session()->put('vali','settings');
    return view('adminview', ['token' => $token]);
});
Route::get('/pdf', function () {
    return view('livewire.admin-pages.create-p-d-f');
});



//user routes here.........


Route::get('/profile', function () {
    $token = session()->get('jwt_token');
    session()->put('vali','profile');
    return view('viewchanger', ['token' => $token]);
});
Route::get('/candidates', function () {
    $token = session()->get('jwt_token');
    session()->put('vali','candidates');
    return view('viewchanger', ['token' => $token]);
});
Route::get('/how_to', function () {
    $token = session()->get('jwt_token');
    session()->put('vali','how_to');
    return view('viewchanger', ['token' => $token]);
});
Route::get('/vote', function () {
    $token = session()->get('jwt_token');
    session()->put('vali','vote');
    return view('viewchanger', ['token' => $token]);
});
Route::get('/chatroom', function () {
    $token = session()->get('jwt_token');
    session()->put('vali','chatroom');
    return view('viewchanger', ['token' => $token]);
});
Route::get('/results', function () {
    $token = session()->get('jwt_token');
    session()->put('vali','results');
    return view('viewchanger', ['token' => $token]);
});
Route::get('/mail', function () {
    $token = session()->get('jwt_token');
    session()->put('vali','mail');
    return view('viewchanger', ['token' => $token]);
});
Route::get('/privacy_policy', function () {
    $token = session()->get('jwt_token');
    session()->put('vali','privacy_policy');
    return view('viewchanger', ['token' => $token]);
});
Route::get('/terms_of_service', function () {
    $token = session()->get('jwt_token');
    session()->put('vali','terms_of_service');
    return view('viewchanger', ['token' => $token]);
});


Route::get('/users', [UserController::class, 'index'])->name('users.index');
