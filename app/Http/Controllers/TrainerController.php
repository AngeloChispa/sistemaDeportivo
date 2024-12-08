<?php

namespace App\Http\Controllers;

use App\Models\Nationality;
use App\Models\Trainer;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trainers = Trainer::all();
        return view('trainers.trainers_view', compact('trainers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $trainer = Trainer::findOrFail($id);
        return view('trainers.show', compact('trainer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $nationalities = Nationality::all();
        $trainer = Trainer::findOrFail($id);
        return view('trainers.edit', compact('trainer', 'nationalities'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $trainer = Trainer::findOrFail($id);
        $people = $trainer->people();
        $trainer->delete();
        $people->delete();
        return redirect()->route('trainers.index');   
    }
}
