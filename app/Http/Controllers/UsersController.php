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
