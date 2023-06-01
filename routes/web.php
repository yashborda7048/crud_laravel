<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/post', function () {
    return view('post');
});

// Route::view('post', '/post');

// Route::get('/post/first-post', function () {
//     return view('first-post');
// });

Route::view('first-post', '/post/first-post');