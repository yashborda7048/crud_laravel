<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\StudentController;

Route::get('/', [StudentController::class, 'index'])->name('home');
Route::get('/add', [StudentController::class, 'create'])->name('add');
Route::get('/update', [StudentController::class, 'edit'])->name('update');
Route::get('/delete', [StudentController::class, 'delete'])->name('delete');
Route::get('/about/{user?}', [Usercontroller::class, 'userName'])->name('about');

Route::post('/store', [StudentController::class, 'store'])->name('store');

Route::fallback(function () {
    return "<h1>Page Not Found.</h1>";
});