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
        $searchTerm = strtolower($searchTerm);

        $people = People::whereRaw('LOWER(name) LIKE ?', ['%' . $searchTerm . '%'])->get();
        $teams = Team::whereRaw('LOWER(name) LIKE ?', ['%' . $searchTerm . '%'])->get();
        $tournaments = Tournament::whereRaw('LOWER(name) LIKE ?', ['%' . $searchTerm . '%'])->get();
        $instalations = Instalation::whereRaw('LOWER(name) LIKE ?', ['%' . $searchTerm . '%'])->get();
        $sponsors = Sponsor::whereRaw('LOWER(name) LIKE ?', ['%' . $searchTerm . '%'])->get();

        return view('search.search_view', compact('people', 'teams', 'tournaments', 'instalations', 'sponsors', 'searchTerm'));
    }

}
