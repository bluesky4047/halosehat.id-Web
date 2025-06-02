<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('home', ['title' => 'HalloSehat.id']);
});

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

// Route::get('/signIn', function () {
//     return view('signIn', ['title' => 'SignUp']);
// });

Route::get('/signIn', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/signIn', [AuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route::get('/signUp', function () {
//     return view('signUp',['title' => 'SignUp']);
// });

Route::get('/register', [RegisterController::class, 'show'])->name('register.form');
Route::post('/register', [RegisterController::class, 'store'])->name('register.submit');

Route::get('/account', function () {
    return view('account', ['title' => 'Edit Akun']);
});

// Route::post('/register', function () {
//     // dummy logic
// })->name('register.submit');

Route::get('/login', function () {
    return 'Ini halaman login (dummy)';
})->name('login');

