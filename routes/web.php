<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AuthController;

// Route::get('/', function () {
//     return view('home', ['title' => 'HalloSehat.id']);
// });

Route::get('/', function () {
    return view('home', ['title' => 'HalloSehat.id']);
})->name('home');

// Login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

// Register
Route::get('/register', [RegisterController::class, 'show'])->name('register.form');
Route::post('/register', [RegisterController::class, 'store'])->name('register.submit');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/readarticle', function () {
        return view('readarticle', ['title' => 'ReadArticle']);
    });

    Route::get('/articlelist', function () {
        return view('articlelist', ['title' => 'List Article']);
    });

    Route::get('/makearticle', function () {
        return view('makearticle', ['title' => 'Makearticle']);
    });

    Route::get('/reservation', function () {
        return view('reservation', ['title' => 'Reservation']);
    });

    Route::view('/reservations/store', 'reservation')->name('reservations.store');
    
    Route::get('/account', function () {
        return view('account', ['title' => 'Edit Akun']);
    });
});

// Route::get('/readarticle', function () {
//     return view('readarticle', ['title' => 'ReadArticle']);
// });

// Route::get('/articlelist', function () {
//     return view('articlelist', ['title' => 'List Article']);
// });

// Route::get('/makearticle', function () {
//     return view('makearticle', ['title' => 'Makearticle']);
// });

// Route::get('/reservation', function () {
//     return view('reservation', ['title' => 'Reservation']);
// });

// Route::view('/reservations/store', 'reservation')->name('reservations.store');

// Route::get('/account', function () {
//     return view('account', ['title' => 'Edit Akun']);
// });
