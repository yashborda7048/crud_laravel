<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;

Route::get('/', function () {
    return view('home');
});


Route::get('/user', [Usercontroller::class, 'show']);

// Route::get('/post', function () {
//     return view('post'); 
// });

// Route::view('/post', 'post');

Route::get('/post/first-post', function () {
    return view('first-post');
});

// Route::view('/post/first-post', 'first-post');

// Route::get('/post/{id?}', function (string $id = null) {
//     if ($id) {
//         return "<h1>Post ID : " . $id . "</h1>";
//     } else {
//         return "<h1>No ID Found</h1>";
//     }
// })->whereNumber('id');
// // })->whereAlpha('id');
// // })->whereIn('id', ['movie', 'song', 'painting']);

Route::get('/post/{id?}/comment/{commentid?}', function (string $id = null, string $commentid = null) {
    if ($id) {
        return "<h1>Post ID : " . $id . "</h1><h2>" . $commentid . "</h2>";
    } else {
        return "<h1>No ID Found</h1>";
    }
})->where('id', '[0-9]+')->whereAlpha('commentid');

Route::get('/page/about-us', function () {
    return view('about');
})->name('about');

Route::get('/test', function () {
    return view('about');
});

Route::redirect('/about', 'test', 301);

Route::prefix('texts')->group(function () {

    Route::get('/post-1', function () {
        return view('tests/post-1');
    });
    Route::view('/post-2', 'tests/post-2');
    Route::view('/post-3', 'tests/post-3');
});

Route::fallback(function () {
    return "<h1>Page Not Found.</h1>";
});