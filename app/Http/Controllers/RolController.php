<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use Illuminate\Http\Request;

class RolController extends Controller
{
    public function index(){
        $roles = Rol::all();
        return view("roles.index", compact(var_name: "roles"));

    }

    public function create(){
        return view("roles.create");
    }

    public function store(Request $request){

        $request->validate([
            "name"=>["required","string","max:20","unique:rols"],
            "description"=>["required","nullable","string","max:255"]
        ]);


        Rol::create([
            'name' => $request['name'],
            'description' => $request['description'],
        ]);


        return redirect()->route("roles.index");
    }

    public function edit($id){

        $roles = Rol::findOrFail($id);
        return view("roles.update", compact("roles"));
    }

    public function update(Request $request, $id){
        $request->validate([
            "name"=>["required","string","max:20","unique:rols"],
            "description"=>["required","nullable","string","max:255"]
        ]);

        $rol = Rol::findOrFail($id);
        $rol->update($request->all());
        return redirect()->route("roles.index");

    }

    public function destroy($id){

        $roles = Rol::findOrFail($id);
        $roles ->delete();

        return redirect()->route("roles.index");
    }














}
