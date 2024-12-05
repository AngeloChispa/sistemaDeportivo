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
        $player = Player::all();
        $nationalities = Nationality::all();
        $people = People::with('nationality')->get();
        return view('players.players_view', compact('people',"player", "nationalities"));
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
        $avatarPath = null;
        if($request->hasFile("avatar")){
            $avatarPath = $request->file("avatar")->store("avatar", "public");
        }
        // CORREGIR SUBIDA DE IMAGEN PLAYERS

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
    public function show(string $id)
    {
        //
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
    public function update(Request $request, Player $player )
    {
        $avatarPath = null;
        if($request->hasFile("avatar")){
            $avatarPath = $request->file("avatar")->store("avatar", "public");
        }
        // CORREGIR SUBIDA DE IMAGEN PLAYERS

        $people = new People();
        $people->name = $request->name;
        $people->lastname = $request->lastname;
        $people->birthdate = $request->birthdate;
        $people->birthplace = $request->country;
        $people->avatar = $avatarPath;
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
    public function destroy($id)
    {
        $nationalities = Nationality::all();
        $player = Player::with('people')->findOrFail($id);
        $player->delete();
        return redirect()->route(route: "players.index");

    }
}
