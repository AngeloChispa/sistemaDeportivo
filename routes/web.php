<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/users/',[UsersController::class,'show'])->name('user.show');
Route::get('/createUser/',[UsersController::class, 'create'])->name('user.create');
Route::post('/users/store/',[UsersController::class, 'store'])->name('user.store');

//Borrar esta linea
Route::view('/', 'welcome');
