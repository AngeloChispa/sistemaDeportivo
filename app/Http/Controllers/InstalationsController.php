<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instalation;
use App\Models\Nationality;

class InstalationsController extends Controller
{
    public function index(){
        $instalations = Instalation::with('nationality')->get();
        return view("instalations.instalations_view", compact("instalations"));
    }

    public function create(){
        $nationalities = Nationality::all();
        return view('instalations.create', compact('nationalities'));
    }

    public function store(Request $request){
        $request->validate([
            "name" => "required|string|max:50",
            "state" => "required|string|max:30",
            "city" => "required|string|max:30",
            "capacity" => "required|integer",
        ]);

        dd();

        $instalation = new Instalation();
        $instalation->name = $request->name;
        $instalation->nationality_id = $request->country;
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
        $instalation = Instalation::with('nationality')->findOrFail($id);
        $nationalities = Nationality::all();
        return view("instalations.edit", compact("instalation","nationalities"));
    }

    public function update(Request $request, Instalation $instalation){

        $instalation->name = $request->name;
        $instalation->nationality_id = $request->country;
        $instalation->state = $request->state;
        $instalation->city = $request->city;
        $instalation->capacity = $request->capacity;
        $instalation->save();

        return redirect()->route("instalations.index");
    }

    public function destroy($id){
        $instalation = Instalation::findOrFail($id);
        $reservations = $instalation->reservations;
        foreach($reservations as $reservation){
            $game = $reservation->game();
            $game->delete();
        }
        $instalation->delete();
        return redirect()->route("instalations.index");
    }
}
