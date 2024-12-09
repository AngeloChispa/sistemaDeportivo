<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use App\Models\People;
use App\Models\Nationality;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trainers = Trainer::with('people')->get();
        return view('trainers.trainers_view', compact('trainers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $nationalities = Nationality::all();
        return view('trainers.create', compact('nationalities'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:40',
            'lastname' => 'required|string|max:30',
            'birthdate' => 'required|date',
            'birthplace' => 'nullable|string|max:100',
            'description' => 'nullable|string|max:355',
            'avatar' => 'nullable|image|max:2000',
        ]);

        $person = new People();
        $person->name = $request->name;
        $person->lastname = $request->lastname;
        $person->birthdate = $request->birthdate;
        $person->birthplace = $request->birthplace;
        if ($request->hasFile('avatar')) {
            $avatarPath = $request->file('avatar')->store('avatars', 'public');
            $person->avatar = $avatarPath;
        }
        $person->save();

        $trainer = new Trainer();
        $trainer->description = $request->description;
        $trainer->people_id = $person->id;
        $trainer->save();

        return redirect()->route('trainers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $trainer = Trainer::with('people')->findOrFail($id);
        return view('trainers.show', compact('trainer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $trainer = Trainer::with('people')->findOrFail($id);
        $nationalities = Nationality::all();
        return view('trainers.edit', compact('trainer', 'nationalities'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:40',
            'lastname' => 'required|string|max:30',
            'birthdate' => 'required|date',
            'birthplace' => 'nullable|string|max:100',
            'description' => 'nullable|string|max:355',
            'avatar' => 'nullable|image|max:2000',
        ]);

        $trainer = Trainer::findOrFail($id);
        $person = $trainer->people;

        $person->name = $request->name;
        $person->lastname = $request->lastname;
        $person->birthdate = $request->birthdate;
        $person->birthplace = $request->birthplace;
        if ($request->hasFile('avatar')) {
            $avatarPath = $request->file('avatar')->store('avatars', 'public');
            $person->avatar = $avatarPath;
        }
        $person->save();

        $trainer->description = $request->description;
        $trainer->save();

        return redirect()->route('trainers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $trainer = Trainer::with('people')->findOrFail($id);
        $trainer->delete();
        $trainer->people->delete();

        return redirect()->route('trainers.index');
    }
}
