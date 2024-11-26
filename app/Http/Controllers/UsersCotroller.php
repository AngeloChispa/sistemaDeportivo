<?php

namespace App\Http\Controllers;

use App\Models\People;
use App\Models\User;
use Illuminate\Http\Request;

class UsersCotroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $people = People::all();
        return view('users.users_view', compact('people'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $people = new People();
        $people->name = $request->name;
        $people->lastname = $request->lastname;
        $people->birthdate = $request->birthdate;
        $people->save();

        $user = new User();
        $user->people_id = $people->id;
        $user->username = $request->username;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        
        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $person = People::with('user')->findOrFail($id);
        return view('users.edit', compact('person'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
       $person = $user->people;
       $person->name = $request->name;
       $person->lastname = $request->lastname;
       $person->birthdate = $request->date_birth;
       $person->save();

       $user->username = $request->username;
       $user->phone = $request->phone;
       $user->email = $request->email;
       $user->password = $request->password;
       $user->save();
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $person = $user->people;
        $user->delete();
        $person->delete();
        return redirect()->route('user.index');
    }
}
