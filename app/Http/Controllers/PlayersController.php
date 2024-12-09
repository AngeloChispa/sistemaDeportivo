<?php

namespace App\Http\Controllers;

use App\Models\Nationality;
use App\Models\People;
use Illuminate\Http\Request;
use App\Models\Player;
use Illuminate\Support\Facades\Auth;

class PlayersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::user() && Auth::user()->rol_id === 1) {
            $nationalities = Nationality::all();
            $people = People::with('nationality')->get();
            return view('players.players_view', compact('people', "nationalities"));
        }

        return redirect()->route('index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Auth::user() && Auth::user()->rol_id === 1) {
            $nationalities = Nationality::all();
            $people = People::all();
            $people = People::with('player')->get();
            return view('players.create', compact("nationalities", "people"));
        }

        return redirect()->route('index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        if (Auth::user() && Auth::user()->rol_id === 1) {
            $request->validate([
                "avatar" => "required|image|max:2000"
            ]);

            if ($request->hasFile("avatar")) {
                $avatarPath = $request->file("avatar")->store("avatars", "public");
            }

            $people = new People();
            $people->name = $request->name;
            $people->lastname = $request->lastname;
            $people->birthdate = $request->birthdate;
            $people->birthplace = $request->country;
            $people->avatar = $avatarPath;
            $people->save();


            $player = new Player();
            $player->status = $request->status;
            $player->height = $request->height;
            $player->bestSide = $request->bestSide;
            $player->people_id = $people->id;
            $player->save();

            return redirect()->route("players.index");
        }

        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $person = People::findOrFail($id);
        return view('players.show', compact('person'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        if (Auth::user() && Auth::user()->rol_id === 1) {
            return redirect()->route('index');
            $nationalities = Nationality::all();
            $player = Player::with('people')->findOrFail($id);
            $people = People::all();
            return view('players.edit', compact('player', 'nationalities', "people"));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        if (Auth::user() && Auth::user()->rol_id === 1) {
            return redirect()->route('index');
            $people = People::findOrFail($id);
            $player = Player::findOrFail($id);

            $request->validate([
                "avatar" => "nullable|image|max:2000"
            ]);
            if ($request->hasFile("avatar")) {
                $avatarPath = $request->file("avatar")->store("avatar", "public");
                $people->avatar = $avatarPath;
            }
            // CORREGIR SUBIDA DE IMAGEN PLAYERS

            $people = new People();
            $people->name = $request->name;
            $people->lastname = $request->lastname;
            $people->birthdate = $request->birthdate;
            $people->birthplace = $request->country;
            $people->save();


            $player->status = $request->status;
            $player->height = $request->height;
            $player->bestSide = $request->bestSide;
            $player->people_id = $people->id;
            $player->save();

            return redirect()->route("players.index");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (Auth::user() && Auth::user()->rol_id === 1) {
            return redirect()->route('index');
            $nationalities = Nationality::all();
            $player = Player::with('people')->findOrFail($id);
            $player->delete();
            $person = $player->people;
            $person->delete();
            return redirect()->route("players.index");
        }
    }
}
