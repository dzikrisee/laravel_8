<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', [
        "name" => "Dzikri Setiawan TES",
        "email" => "dzikri@gmail.com",
        "image" => "pas foto dzikri.jpg"
    ]);
});

Route::get('/posts', function () {
    return view('posts');
});
