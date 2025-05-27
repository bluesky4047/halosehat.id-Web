<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'HalloSehat.id']);
});

Route::get('/readarticle', function () {
    return view('readarticle', ['title' => 'ReadArticle']);
});

Route::get('/reservation', function () {
    return view('reservation', ['title' => 'Reservation']);
});

Route::get('/signIn', function () {
    return view('signIn', ['title' => 'SignUp']);
});

Route::get('/signUp', function () {
    return view('signUp',['title' => 'SignUp']);
});

Route::post('/register', function () {
    // dummy logic
})->name('register.submit');

Route::get('/login', function () {
    return 'Ini halaman login (dummy)';
})->name('login');

