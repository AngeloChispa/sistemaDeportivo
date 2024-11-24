<?php

use App\Http\Controllers\RolsController;
use App\Http\Controllers\UsersCotroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RolController;

Route::resource('/user', UsersCotroller::class);
Route::resource('/rols', RolsController::class);


//ROLES
Route::get("/roles", [RolController::class,"index"])->name("roles.index");
Route::get("/roles/create",[RolController::class,"create" ])->name("roles.create");
Route::post("/roles/store",[RolController::class,"store"])->name("roles.store");
Route::put("/roles/{id}",[RolController::class,"update"])->name("roles.update");
Route::get('/roles/{id}/edit', [RolController::class, 'edit'])->name('roles.edit');
Route::delete('/roles/{id}', [RolController::class, 'destroy'])->name('roles.destroy');












//Borrar esta linea
Route::view('/swal/', 'chuchoLab.pruebaSwal');
/*
<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function show(){
        $users = User::all();
        return view('chuchoLab.registerUser', compact('users'));
    }

    public function create(){
        return view('chuchoLab.createUser');
    }

    public function store(Request $request) {
        User::create($request->all());
        return redirect()->route('user.show');
    }

    public function edit(User $user){
        return view('chuchoLab.editUser',compact('user'));
    }

    public function update(Request $request, User $user){
        $user->update($request->all());
        return redirect()->route('user.show');
    }

    public function delete(User $user){
        $user->delete();
        return redirect()->route('user.show');
    }
}

*/

Route::view('/','index')->name('index');

//Julissa

Route::view('/players/admin','players.players_view')->name('players.index');

/*Danna*/
Route::view('/landing','layouts.landing')->name('landing');
Route::view('/landing2','layouts.landing2')->name('landing2');
Route::view('/login','users.login')->name('login');
Route::view('/register','users.register')->name('register');
