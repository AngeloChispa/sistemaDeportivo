<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Sport;
use Illuminate\Support\Facades\Storage;

class TeamsController extends Controller
{
    public function index()
    {
        $teams = Team::with('sport')->get();
        $sports = Sport::all();
        return view("teams.teams_view", compact('teams', 'sports'));
    }

    public function create()
    {
        $sports = Sport::all();
        return view("teams.create", compact('sports'));
    }

    public function store(Request $request)
    {
        $request->validate([
            "name" => "required|string|max:30",
            "state" => "required|string|max:30",
            "city" => "required|string|max:30",
            "shield" => "nullable|image|max:2000",
        ]);

        if ($request->hasFile('shield')) {
            $shieldPath = $request->file('shield')->store('shields', 'public');
        }

        $teams = new Team();
        $teams->name = $request->name;
        $teams->state = $request->state;
        $teams->city = $request->city;
        $teams->shield = $shieldPath ?? null;
        $teams->sport_id = $request->sport;
        $teams->save();

        return redirect()->route('teams.index');
    }

    public function show(Team $team)
    {
        return view('teams.show', compact('team'));
    }

    public function edit($id)
    {
        $teams = Team::findOrFail($id);
        $sports = Sport::all();
        return view("teams.edit", compact("teams", "sports"));
    }

    public function update(Request $request, $id)
    {

        $teams = Team::findOrFail($id);
        $request->validate([
            'shield' => 'nullable|image|max:2000',
        ]);

        if ($request->hasFile('shield')) {
            if ($teams->shield) {
                Storage::delete($teams->shield);
            }
            $shieldPath = $request->file('shield')->store('shields', 'public');
            $teams->shield = $shieldPath;
        }

        $teams->name = $request->name;
        $teams->state = $request->state;
        $teams->city = $request->city;
        $teams->sport_id = $request->sport;
        $teams->save();

        return redirect()->route('teams.index');
    }

    public function destroy($id)
    {
        $teams = Team::findOrFail($id);

        if ($teams->shield) {
            Storage::delete($teams->shield);
        }

        $teams->delete();
        return redirect()->route('teams.index');
    }
}
