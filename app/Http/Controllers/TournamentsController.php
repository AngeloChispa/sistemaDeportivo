<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tournament;
use Intervention\Image\Facades\Image;


class TournamentsController extends Controller
{
    public function index(){
        $tournaments = Tournament::all();
        return view("tournaments.tournaments_view",compact("tournaments"));

    }

    public function create(){
        return view("tournaments.create");

    }

    public function store(Request $request){


        $request->validate([
            'icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2000',
        ]);
        if ($request->hasFile("icon")){
            $iconPath = $request->file("icon")->store('icons', 'public');

        }

        $tournament = new Tournament();
        $tournament->name = $request->name;
        $tournament->icon = $iconPath;
        $tournament->type = $request->type;
        $tournament->start_date = $request->start_date;
        $tournament->end_date = $request->end_date;
        $tournament->description = $request->description;
        $tournament->save();

        return redirect()->route("tournaments.index");
    }

    public function show($id){
        $tournament = Tournament::findOrFail($id);
        return view("tournaments.show",compact("tournament"));
    }

    public function edit($id){

            $tournament = Tournament::findOrFail($id);
            return view("tournaments.edit", compact("tournament"));


    }

    public function update(Request $request,Tournament $tournament ){

        $request->validate([
            'icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2000',
        ]);
        if ($request->hasFile("icon")) {
            $iconPath = $request->file("icon")->store('icons', 'public');
            $tournament->icon = $iconPath;
        }

        $tournament->name = $request->name;
        $tournament->type = $request->type;
        $tournament->start_date = $request->start_date;
        $tournament->end_date = $request->end_date;
        $tournament->description = $request->description;
        $tournament->save();

        return redirect()->route('tournaments.index');
    }


    public function destroy($id){

        $tournament = Tournament::findOrFail($id);
        $tournament->delete();
        return redirect()->route("tournaments.index");
    }


}
