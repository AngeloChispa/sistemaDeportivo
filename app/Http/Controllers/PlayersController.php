<?php

namespace App\Http\Controllers;

use App\Models\Nationality;
use App\Models\People;
use Illuminate\Http\Request;
use App\Models\Player;

class PlayersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nationalities = Nationality::all();
        $people = People::with('nationality')->get();
        return view('players.players_view', compact('people', "nationalities"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $nationalities = Nationality::all();
        $people = People::all();
        $people = People::with('player')->get();
        return view('players.create',compact("nationalities","people"));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $request->validate([
            //Validacion People
            "avatar" => "nullable|image|max:2000",
            "name" =>  "required|string|max:40",
            "lastname" => "required|string|max:30",
            "birthdate" => "required|date|before:tomorrow",
            "birthplace" => "nullable|string|max:100",

            //Validacion Usuario
            'status' => "required|string",
            'height' => "required|float",
            'bestSide' => "required|string",
        ]);

        if($request->hasFile("avatar")){
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
        $player->bestSide=$request->bestSide;
        $player->people_id = $people->id;
        $player->save();

        return redirect()->route("players.index");


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
        $nationalities = Nationality::all();
        $player = Player::with('people')->findOrFail($id);
        $people = People::all();
        return view('players.edit', compact('player', 'nationalities',"people"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $people = People::findOrFail($id);
        $player = Player::findOrFail($id);

        $request->validate([
            "avatar" => "nullable|image|max:2000"
        ]);
        if($request->hasFile("avatar")){
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
        $player->bestSide=$request->bestSide;
        $player->people_id = $people->id;
        $player->save();

        return redirect()->route("players.index");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $nationalities = Nationality::all();
        $player = Player::with('people')->findOrFail($id);
        $player->delete();
        $person = $player->people;
        $person->delete();
        return redirect()->route("players.index");

    }
}
