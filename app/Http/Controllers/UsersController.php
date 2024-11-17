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

    public function store(Request $request){
        User::create($request->all());
        /* User::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'date_birth' => $request->date,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => $request->password,
        ]); */
        return redirect()->route('user.show');
    }
}
