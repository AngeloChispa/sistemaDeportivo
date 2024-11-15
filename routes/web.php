<?php

use Illuminate\Support\Facades\Route;

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
Route::view('/rols/admin','rols.rols_view')->name('rols.index');
Route::view('/rols/user','rols.rols_view')->name('rolsUser.index');
Route::view('/users','users.users_view')->name('users.index');

/*Danna*/
/* Route::view('/landing','layouts.landing')->name('landing');
Route::view('/landing2','layouts.landing2')->name('landing2'); */
Route::view('/login','users.login')->name('login');
Route::view('/register','users.register')->name('register');
