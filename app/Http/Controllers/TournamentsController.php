<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\TeamTournament;
use Illuminate\Http\Request;
use App\Models\Tournament;
use Intervention\Image\Facades\Image;


class TournamentsController extends Controller
{
    public function index()
    {
        $tournaments = Tournament::all();
        return view("tournaments.tournaments_view", compact("tournaments"));
    }

    public function create()
    {
        return view("tournaments.create");
    }

    public function store(Request $request)
    {

        $request->validate([
            "name" => "required|string|max:30",
            "icon" => "nullable|image|max:2000",
            "start_date" => "required|date|before:tomorrow",
            "end_date" => "required|date|after:start_date",
            "description" => "nullable|string|max:255",
        ]);

        if ($request->hasFile("icon")) {
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

    public function show($id)
    {
        $tournament = Tournament::findOrFail($id);
        return view("tournaments.show", compact("tournament"));
    }

    public function edit($id)
    {

        $tournament = Tournament::findOrFail($id);
        return view("tournaments.edit", compact("tournament"));
    }

    public function update(Request $request, Tournament $tournament)
    {

        $request->validate([
            'icon' => 'nullable|image|max:2000',
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


    public function destroy($id)
    {

        $tournament = Tournament::findOrFail($id);
        $tournament->delete();
        return redirect()->route("tournaments.index");
    }

    public function addTeams(Tournament $tournament)
    {
        $teams = Team::all();
        return view('tournaments.add_teams', compact('tournament', 'teams'));
    }

    public function storeTeams(Request $request, Tournament $tournament)
    {
        foreach ($request->teams as $id) {
            /* $team = Team::findOrFail($id);
            if($team->sport_id === $tournament->sport_id){ */
            if ($id) {
                $exists = TeamTournament::where('tournament_id', $tournament->id)
                    ->where('team_id', $id)
                    ->exists();
                if (!$exists) {
                    TeamTournament::create([
                        'tournament_id' => $tournament->id,
                        'team_id' => $id,
                    ]);
                }
            }
            /* }*/
        }
        return redirect()->route('tournaments.index');
    }
}
