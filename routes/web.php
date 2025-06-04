<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ArticleController; 

Route::get('/', function () {
    return view('home', ['title' => 'HalloSehat.id']);
})->name('home');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

Route::get('/register', [RegisterController::class, 'show'])->name('register.form');
Route::post('/register', [RegisterController::class, 'store'])->name('register.submit');

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

    Route::get('/reservation', [ReservationController::class, 'index'])->name('reservations.index');
    Route::post('/reservation', [ReservationController::class, 'store'])->name('reservations.store');
    
    Route::get('/account', function () {
        return view('account', ['title' => 'Edit Akun']);
    });
});

Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/makearticle', [ArticleController::class, 'create'])->name('articles.create');
Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');
Route::get('/readarticle/{article:slug}', [ArticleController::class, 'show'])->name('articles.show');

// Route::get('/reservation', function () {
//     return view('reservation', ['title' => 'Reservation']);
// });

// Route::view('/reservations/store', 'reservation')->name('reservations.store');

// Route::get('/account', function () {
//     return view('account', ['title' => 'Edit Akun']);
// });
