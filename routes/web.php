<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\StudentController;

Route::view('/', [StudentController::class, 'index'])->name('home');
Route::view('/add', 'add')->name('add');
Route::view('/update', 'update')->name('update');
Route::view('/delete', 'delete')->name('delete');
Route::get('/about/{user?}', [Usercontroller::class, 'userName'])->name('about');

Route::fallback(function () {
    return "<h1>Page Not Found.</h1>";
});