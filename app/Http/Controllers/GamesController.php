<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Referee;
use App\Models\Team;
use App\Models\Tournament;
use App\Models\Reservation;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $games = Game::with('tournament', 'localTeam', 'awayTeam', 'referee')->get();
        return view('games.games_view', compact('games'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $referees = Referee::with('people')->get();
        $teams = Team::all();
        $tournaments = Tournament::all();

        return view('games.create', compact('referees', 'teams', 'tournaments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $request->validate([
            'tournament_id' => 'nullable|exists:tournaments,id',
            'local_team_id' => 'required|exists:teams,id',
            'away_team_id' => 'required|exists:teams,id',
            'referee_id' => 'required|exists:referees,id',
        ]);

        $game = new Game();
        $game->tournament_id = $request->tournament_id;
        $game->local_team_id = $request->local_team_id;
        $game->away_team_id = $request->away_team_id;
        $game->referee_id = $request->referee_id;
        $game->save();


        return redirect()->route('games.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $game = Game::with('tournament', 'localTeam', 'awayTeam', 'referee')->findOrFail($id);
        return view('games.show', compact('game'));
    }

    public function showLive(Game $game){

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $game = Game::with('tournament', 'localTeam', 'awayTeam', 'referee')->findOrFail($id);
        $referees = Referee::with('people')->get();
        $teams = Team::all();
        $tournaments = Tournament::all();

        return view('games.edit', compact('game', 'referees', 'teams', 'tournaments'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {


        $game = Game::findOrFail($id);
        $game->tournament_id = $request->tournament;
        $game->local_team_id = $request->local_team;
        $game->away_team_id = $request->away_team;
        $game->referee_id = $request->referee_id;
        $game->save();

        return redirect()->route('games.index');
    }

    /**
     * Remove the specified resource from storage.
     */


     public function destroy($id)
{
    $game = Game::with('referee', 'localTeam', 'awayTeam', 'tournament', 'reservation')->findOrFail($id);

    if ($game->referee) {
        $game->referee()->dissociate();
    }

    if ($game->localTeam) {
        $game->localTeam()->dissociate();
    }

    if ($game->awayTeam) {
        $game->awayTeam()->dissociate();
    }

    if ($game->tournament) {
        $game->tournament()->dissociate();
    }

    if ($game->reservation) {
        $game->reservation()->dissociate();
    }


    $game->delete();

    return redirect()->route('games.index');
}




}
