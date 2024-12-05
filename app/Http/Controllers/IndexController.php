<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\People;
use App\Models\Tournament;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $tournaments = Tournament::all();
        $games = Game::all();
        return view('index', compact('tournaments', 'games'));
    }
}
