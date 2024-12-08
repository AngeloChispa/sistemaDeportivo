<?php

namespace App\Http\Controllers;

use App\Models\Nationality;
use App\Models\People;
use App\Models\Referee;
use Illuminate\Http\Request;

class RefereeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $people = People::with("referee")->get();
        $people = People::with('nationality')->get();
        return view('referees.referees_view', compact('people'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $people = People::with("referee")->get();
        $nationalities = Nationality::all();
        return view("referees.create", compact("people","nationalities"));
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
            "birthdate" => "required|date",
            "birthplace" => "nullable|string|max:100",
            //Validacion Referee
            "description" => "nullable|string|max:355"
        ]);

        $people = new People();
        $people->name = $request->name;
        $people->lastname = $request->lastname;
        $people->birthdate = $request->birthdate;
        $people->birthplace = $request->country; // Este es STRING
        if ($request->hasFile("avatar")) {
            $avatarPath = $request->file("avatar")->store("avatars", "public");
            $people->avatar = $avatarPath;
        }
        $people->save();

            $referee = new Referee();

            $referee->description = $request->description;
            $referee->people_id = $people->id;
            $referee->save();

        return redirect()->route("referees.index");
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
        $referee = Referee::with('people')->findOrFail($id);
        $nationalities = Nationality::all();
        return view("referees.edit", compact("referee", "nationalities"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            "avatar" => "nullable|image|max:2000",
            "name" => "required|string|max:40",
            "lastname" => "required|string|max:30",
            "birthdate" => "required|date",
            "birthplace" => "nullable|string|max:100",
            "description" => "nullable|string|max:355",
        ]);

        $person = People::findOrFail($id);
        $referee = Referee::findOrFail($id);

        $person->name = $request->name;
        $person->lastname = $request->lastname;
        $person->birthdate = $request->birthdate;
        $person->birthplace = $request->country;
        if ($request->hasFile("avatar")) {
            $avatarPath = $request->file("avatar")->store("avatars", "public");
            $person->avatar = $avatarPath;
        }
        $person->save();

        $referee = new Referee();
        $referee->description = $request->description;
        $referee->people_id = $person->id;
        $referee->save();

        return redirect()->route("referees.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $referee = Referee::with('people')->findOrFail($id);
        $referee->delete();
        $person = $referee->people;
        $person->delete();
        return redirect()->route('referees.index');
    }
}
