<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Sport;
use App\Models\Nationality;
use App\Http\Controllers\Storage;
class TeamsController extends Controller
{
    public function index(){
        $teams = Team::with('sport')->get();
        $sports = Sport::all();
        return view("teams.teams_view", compact('teams', 'sports'));
    }

    public function create(){
        $sports = Sport::all();
        return view("teams.create", compact('sports'));
    }

    public function store(Request $request){

        $request->validate([
            'shield' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2000',
        ]);

        if ($request->hasFile('shield')) {
            $shieldPath = $request->file('shield')->store('shields', 'public');
        }

        $teams = new Team();
        $teams->name = $request->name;
        $teams->state = $request->state;
        $teams->city = $request->city;
        $teams->shield = $shieldPath;
        $teams->sport_id = $request->sport;
        $teams->save();

        return redirect()->route('teams.index');
    }

    public function show(Team $teams){
        return view('teams.show', compact('teams'));
    }

    public function edit($id){
        $teams = Team::findOrFail($id);
        return view("teams.edit", compact("teams"));
    }

    public function update(Request $request, Team $teams)
    {
        $request->validate([
            'shield' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2000',
        ]);

        if ($request->hasFile('shield')) {
            $shieldPath = $request->file('shield')->store('shields', 'public');
        }

        $teams->name = $request->name;
        $teams->state = $request->state;
        $teams->city = $request->city;
        $teams->shield = $shieldPath;
        $teams->sport_id = $request->sport;

        $teams->save();

        return redirect()->route('teams.index');
    }

    public function destroy($id){
        $teams = Team::findOrFail($id);
        $teams->delete();
        return redirect()->route(route: "teams.index");


    }


}

