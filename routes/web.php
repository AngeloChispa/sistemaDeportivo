<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/users/',[UsersController::class,'show'])->name('user.show');
Route::get('/createUser/',[UsersController::class, 'create'])->name('user.create');
Route::post('/users/store/',[UsersController::class, 'store'])->name('user.store');
Route::get('/users/edit/{user}',[UsersController::class, 'edit'])->name('user.edit');
Route::put('/user/update/{user}', [UsersController::class,'update'])->name('user.update');
Route::delete('/user/delete/{user}', [UsersController::class, 'delete'])->name('user.delete');

//Borrar esta linea
Route::view('/', 'welcome');
