<?php

use App\Http\Controllers\AscenController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GamesController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PlayersController;
use App\Http\Controllers\RolsController;
use App\Http\Controllers\UsersCotroller;
use App\Http\Controllers\TournamentsController;
use App\Http\Controllers\InstalationsController;
use App\Http\Controllers\RefereeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SportController;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\TrainerController;
use App\Livewire\Partido;

Route::get('/', [IndexController::class, 'index'])->name('index');

Route::resource('/user', controller: UsersCotroller::class);
Route::resource('/rols', RolsController::class);
Route::resource('/tournaments', TournamentsController::class);
Route::resource("/instalations",InstalationsController::class);
Route::resource('/players', PlayersController::class);
Route::resource("/teams",TeamsController::class);
Route::resource("/games", GamesController::class);
Route::resource('/referees', RefereeController::class);
Route::resource('/trainers', TrainerController::class);
Route::resource('/sport', SportController::class);

Route::get('/game/{game}', Partido::class)->name('games.live');
Route::post('/upgrape/{user}', [UsersCotroller::class, 'upgrapeAdmin'])->name('user.admin');

Route::get('/ascend', [AscenController::class, 'index'])->name('ascend.index');

Route::get('/search' , [SearchController::class, 'index'])->name('search.index');

//Julissa
/* Vistas */
Route::view('/favorites','users.favorites')->name('favorites.index');
Route::view('/agrega/nombreEquipo','tournaments.add_teams')->name('addTeams');
Route::view('/sponsors/admin','sponsors.sponsors_view')->name('sponsors.index');
Route::view('/finances/admin','finances.finances_view')->name('finances.index');
Route::view('/filtro/admin','reports.filter')->name('reports.index');
Route::view('/sponsors/admin','sponsors.sponsors_view')->name('patrocinadores.index');
/* Mostrar */
Route::view('/users/show','users.show')->name('users.show');
Route::view('/instalaciones/show','instalations.show');
/* Crear */
Route::view('/sponsors/create','sponsors.create')->name('patrocinadores.create');
Route::view('/event','games.events')->name('events.create');
/* Editar */
/*Danna*/
Route::view('/landing','layouts.landing')->name('landing');
Route::view('/landing2','layouts.landing2')->name('landing2');
/* Vistas */
Route::view('/finances/admin','finances.finances_view')->name('finances.index');
Route::view('/classifications/admin','classifications.classifications_view')->name('classifications.index');
/* Crear */
Route::view('/tournaments/create','tournaments.create')->name('tournaments.create');
Route::view('/finances/create','finances.create')->name('finances.create');


//Apartir de aqui hay rutas roñosas de breeze
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
