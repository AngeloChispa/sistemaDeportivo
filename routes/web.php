<?php

use App\Http\Controllers\PlayersController;
use App\Http\Controllers\RolsController;
use App\Http\Controllers\UsersCotroller;
use Illuminate\Support\Facades\Route;

Route::resource('/user', UsersCotroller::class);
Route::resource('/rols', RolsController::class);
Route::resource('/players', PlayersController::class);

//Borrar esta linea
Route::view('/swal/', 'chuchoLab.pruebaSwal');
Route::view('/prueba/livewire/', 'chuchoLab.pruebaLivewire');

Route::view('/','index')->name('index');

//Julissa
/* Vistas */
Route::view('/sponsors/admin','sponsors.sponsors_view')->name('sponsors.index');
Route::view('/filtro/admin','reports.filter')->name('reports.index');
Route::view('/sponsors/admin','sponsors.sponsors_view')->name('patrocinadores.index');
Route::view('/instalations/admin','instalations.instalations_view')->name('instalations.index');
/* Mostrar */
Route::view('/users/show','users.show')->name('users.show');
/* Crear */
Route::view('/rols/create','rols.create')->name('rols.create');
Route::view('/sponsors/create','sponsors.create')->name('patrocinadores.create');
/* Editar */
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
