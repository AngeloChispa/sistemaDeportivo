<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Nationality;

class TeamsController extends Controller
{

    public function index(){
        $teams = Team::All();
        return view("teams.teams_view", compact("teams"));
    }

    public function create(){
        return view("teams.create");
    }

    public function store(Request $request){

        if($request->hasFile("shield")){
            $shieldPath = $request->file("shield")->store("shields","public");
        }

        $nationality = new Nationality();
        $nationality->country = $request->country;
        $nationality->save();

        $team = new Team();
        $team->name = $request->name;
        $team->state = $request->state;
        $team->city = $request->city;
        $team->shield = $shieldPath;
        $team->save();

        return redirect() ->route("teams.index");

    }

    public function show($id){

    }


    public function edit($id){
        $team = Team::findOrFail($id);
        return view("teams.edit");

    }


    public function update(Request $request, $id){

    }


    public function destroy($id){

    }



}
