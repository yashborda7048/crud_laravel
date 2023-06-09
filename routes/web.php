<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\StudentController;


Route::get('/', [StudentController::class, 'index'])->name('home');
Route::view('add', 'add')->name('add');
Route::get('/edit/{id?}', [StudentController::class, 'edit'])->name('edit');
Route::put('/update/{id}', [StudentController::class, 'update'])->name('update');
// Route::get('/delete/{id}', [StudentController::class, 'destroy'])    ;  for get method 
Route::delete('/delete/{id}', [StudentController::class, 'destroy']); // for delete method 
Route::get('/about/{user?}', [Usercontroller::class, 'userName'])->name('about');

Route::post('/store', [StudentController::class, 'store'])->name('store');
Route::fallback(function () {
    return "<h1>Page Not Found.</h1>";
});