<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'HomePage']);
});

Route::get('/readarticle', function () {
    return view('readarticle', ['title' => 'ReadArticle']);
});

Route::get('/reservation', function () {
    return view('reservation', ['title' => 'Reservation']);
});