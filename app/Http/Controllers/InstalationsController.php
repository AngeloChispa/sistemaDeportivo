<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instalation;

class InstalationsController extends Controller
{
    public function index(){
        $instalations = Instalation::all();
        return view("instalations.instalations_view", compact("instalations"));
    }

    public function create(){
        return view('instalations.create');
    }

    public function store(Request $request){

        $instalation = new Instalation();
        $instalation->name = $request->name;
        $instalation->country = $request->country;
        $instalation->state = $request->state;
        $instalation->city = $request->city;
        $instalation->capacity = $request->capacity;
        $instalation->save();

        return redirect()->route("instalations.index");
    }

    public function show($id){
        $instalation = Instalation::findOrFail($id);
        return view("instalations.show", compact("instalation"));
    }

    public function edit($id){
        $instalation = Instalation::findOrFail($id);
        return view("instalations.edit", compact("instalation"));
    }

    public function update(Request $request, Instalation $instalation){

        $instalation->name = $request->name;
        $instalation->country = $request->country;
        $instalation->state = $request->state;
        $instalation->city = $request->city;
        $instalation->capacity = $request->capacity;
        $instalation->save();

        return redirect()->route("instalations.index");
    }

    public function destroy($id){
        $instalation = Instalation::findOrFail($id);
        $instalation->delete();
        return redirect()->route("instalations.index");
    }
}
