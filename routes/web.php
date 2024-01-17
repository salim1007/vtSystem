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
    if (auth()->user()->role == 'admin') {
        $token = session()->get('jwt_token');
        session()->put('vali', 'dashboard');
        return view('adminview', ['token' => $token]);
    }
    return '<div >
        <div > 401 - Unauthorized</div>
    </div>';
});

Route::get('/candlist', function () {
    if(auth()->user()->role == 'admin') {
        $token = session()->get('jwt_token');
        session()->put('vali', 'candlist');
        return view('adminview', ['token' => $token]);
    }
    return '<div >
        <div > 401 - Unauthorized</div>
    </div>';
});
Route::get('/createPosts', function () {
    if (auth()->user()->role == 'admin') {
        $token = session()->get('jwt_token');
        session()->put('vali', 'createPosts');
        return view('adminview', ['token' => $token]);
    }
    return '<div >
        <div > 401 - Unauthorized</div>
    </div>';
});
Route::get('/editCandidate', function () {
    if (auth()->user()->role == 'admin') {
        $token = session()->get('jwt_token');
        session()->put('vali', 'editCandidate');
        return view('adminview', ['token' => $token]);
    }
    return '<div >
        <div > 401 - Unauthorized</div>
    </div>';

});
Route::get('/progress', function () {
    if (auth()->user()->role == 'admin') {
        $token = session()->get('jwt_token');
        session()->put('vali', 'progress');
        return view('adminview', ['token' => $token]);
    }
    return '<div >
        <div > 401 - Unauthorized</div>
    </div>';
});
Route::get('/mailbox', function () {
    if(auth()->user()->role == 'admin') {
        $token = session()->get('jwt_token');
        session()->put('vali', 'mailbox');
        return view('adminview', ['token' => $token]);
    }
    return '<div >
        <div > 401 - Unauthorized</div>
    </div>';
});
Route::get('/settings', function () {
    if (auth()->user()->role == 'admin') {
        $token = session()->get('jwt_token');
        session()->put('vali', 'settings');
        return view('adminview', ['token' => $token]);
    }
    return '<div >
        <div> 401 - Unauthorized</div>
    </div>';
});
Route::get('/pdf', function () {
    if (auth()->user()->role == 'admin') {
        return view('livewire.admin-pages.create-p-d-f');
    }
    return '<div >
        <div > 401 - Unauthorized</div>
    </div>';
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
