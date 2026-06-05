<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home', ['title' => 'Home Page']);
});


Route::get('/about', function () {
    return view('about', ['title' => 'Halaman About']);
});

Route::get('/profile', function () {
    return view('profile', ['title' => 'Halaman Profile']);
});

Route::get('/blog', function () {
    return view('blog', ['title' => 'Halaman Blog']);
});