<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;

Route::view('/', 'home')->name('home');
Route::view('/add', 'add')->name('add');
Route::view('/update', 'update')->name('update');
Route::view('/delete', 'delete')->name('delete');
Route::get('/about/{user?}', [Usercontroller::class, 'userName'])->name('about');

// Route::redirect('/about', 'test', 301);

// Route::prefix('texts')->group(function () {

//     Route::get('/post-1', function () {
//         return view('tests/post-1');F
//     });
//     Route::view('/post-2', 'tests/post-2');
//     Route::view('/post-3', 'tests/post-3');
// });

Route::fallback(function () {
    return "<h1>Page Not Found.</h1>";
});