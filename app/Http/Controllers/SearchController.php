<?php

namespace App\Http\Controllers;

use App\Models\People;
use App\Models\Tournament;
use App\Models\Game;
use App\Models\Team;
use App\Models\Instalation;
use App\Models\Sponsor;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $searchTerm = $request->input('search');
    
        $people = People::where('name', 'LIKE', '%' . $searchTerm . '%')->get();
        $teams = Team::where('name', 'LIKE', '%' . $searchTerm . '%')->get();
        $games = Game::where('local_team_id', 'LIKE', '%' . $searchTerm . '%')
                     ->orWhere('away_team_id', 'LIKE', '%' . $searchTerm . '%')
                     ->get();
        $tournaments = Tournament::where('name', 'LIKE', '%' . $searchTerm . '%')->get();
        $instalations = Instalation::where('name', 'LIKE', '%' . $searchTerm . '%')->get();
        $sponsors = Sponsor::where('name', 'LIKE', '%' . $searchTerm . '%')->get();
        return view('search.search_view', compact('people', 'teams', 'games', 'tournaments', 'instalations', 'sponsors','searchTerm'));
    }
    
}
