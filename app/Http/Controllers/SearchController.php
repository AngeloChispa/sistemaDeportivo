<?php

namespace App\Http\Controllers;

use App\Models\People;
use App\Models\Player;
use App\Models\Team;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
    
        if ($request->search) {
            $people = People::where('name', 'LIKE', '%' . $request->search . '%')->get();
            $team = Team::where('name', 'LIKE', '%' . $request->search . '%')->get();
            return view('search.search_view', compact('players'));
        }

        return redirect()->route('index');
    }
    
}
