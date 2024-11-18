<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RolController;

Route::get('/users/',[UsersController::class,'show'])->name('user.show');
Route::get('/createUser/',[UsersController::class, 'create'])->name('user.create');
Route::post('/users/store/',[UsersController::class, 'store'])->name('user.store');


//ROLES
Route::get("/roles", [RolController::class,"index"])->name("roles.index");
Route::get("/roles/create",[RolController::class,"create" ])->name("roles.create");
Route::post("/roles/store",[RolController::class,"store"])->name("roles.store");
Route::put("/roles/{id}",[RolController::class,"update"])->name("roles.update");
Route::get('/roles/{id}/edit', [RolController::class, 'edit'])->name('roles.edit');
Route::delete('/roles/{id}', [RolController::class, 'destroy'])->name('roles.destroy');












//Borrar esta linea
Route::view('/', 'welcome');
