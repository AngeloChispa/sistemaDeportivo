<?php

use App\Http\Controllers\GamesController;
use App\Http\Controllers\PlayersController;
use App\Http\Controllers\RolsController;
use App\Http\Controllers\UsersCotroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TournamentsController;
use App\Http\Controllers\InstalationsController;
use App\Http\Controllers\TeamsController;

Route::resource('/user', controller: UsersCotroller::class);
Route::resource('/rols', RolsController::class);
Route::resource('/tournaments', TournamentsController::class);
Route::resource("/instalations",InstalationsController::class);//FALTA TERMINAR CONTROLADOR
Route::resource('/players', PlayersController::class);//FALTA CORREGIR RUTA IMAGEN
Route::resource("/teams",TeamsController::class);
Route::resource("/games", GamesController::class);




//Borrar esta linea
Route::view('/prueba/livewire/', 'chuchoLab.pruebaLivewire');

Route::view('/','index')->name('index');

//Julissa
/* Vistas */
Route::view('/sponsors/admin','sponsors.sponsors_view')->name('sponsors.index');
Route::view('/finances/admin','finances.finances_view')->name('finances.index');

Route::view('/filtro/admin','reports.filter')->name('reports.index');
Route::view('/sponsors/admin','sponsors.sponsors_view')->name('patrocinadores.index');
/* Mostrar */
Route::view('/users/show','users.show')->name('users.show');
/* Crear */
Route::view('/rols/create','rols.create')->name('rols.create');
Route::view('/sponsors/create','sponsors.create')->name('patrocinadores.create');
Route::view('/sports/create','sports.create')->name('sport.create');
/* Editar */

/*Danna*/
Route::view('/landing','layouts.landing')->name('landing');
Route::view('/landing2','layouts.landing2')->name('landing2');
Route::view('/login','users.login')->name('login');
Route::view('/register','users.register')->name('register');
/* Vistas */
Route::view('/finances/admin','finances.finances_view')->name('finances.index');
Route::view('/classifications/admin','classifications.classifications_view')->name('classifications.index');
/* Crear */
Route::view('/tournaments/create','tournaments.create')->name('tournaments.create');
Route::view('/finances/create','finances.create')->name('finances.create');
Route::view('/games/create','games.create')->name('games.create');
/* Mostrar */