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
Route::view('/swal/', 'chuchoLab.pruebaSwal');
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/','index')->name('index');

//Julissa
/* Vistas */
Route::view('/rols/admin','rols.rols_view')->name('rols.index');
Route::view('/users/admin','users.users_view')->name('users.index');
Route::view('/players/admin','players.players_view')->name('players.index');
Route::view('/sponsors/admin','sponsors.sponsors_view')->name('sponsors.index');
Route::view('/instalations/admin','instalations.instalations_view')->name('instalations.index');
/* Mostrar */
Route::view('/rols/show','rols.show')->name('rols.show');
Route::view('/users/show','users.show')->name('users.show');
Route::view('/players/show','players.show')->name('players.show');
/* Crear */
Route::view('/rols/create','rols.create')->name('rols.create');
Route::view('/users/create','users.create')->name('users.create');
/* Editar */
Route::view('/users/edit','users.edit')->name('users.edit');
Route::view('/rols/edit','rols.edit')->name('rols.edit');

/*Danna*/
Route::view('/landing','layouts.landing')->name('landing');
Route::view('/landing2','layouts.landing2')->name('landing2');
Route::view('/login','users.login')->name('login');
Route::view('/register','users.register')->name('register');
/* Vistas */
Route::view('/teams/admin','teams.teams_view')->name('teams.index');
Route::view('/tournaments/admin','tournaments.tournaments_view')->name('tournaments.index');
/* Crear */
Route::view('/teams/create','teams.create')->name('teams.create');
Route::view('/tournaments/create','tournaments.create')->name('tournaments.create');
/* Mostrar */
Route::view('/teams/show','teams.show')->name('teams.show');
Route::view('/tournaments/show','tournaments.show')->name('tournaments.show');
