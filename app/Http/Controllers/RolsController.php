<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use Illuminate\Http\Request;

class RolsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rols = Rol::all();
        return view('rols.rols_view', compact('rols'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('rols.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Rol::create($request->all());
        return redirect()->route('rols.index');
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
    public function edit(Rol $rol)
    {
        return view('rols.edit', compact('rol'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rol $rol)
    {
        $rol->update($request->all());
        return redirect()->route('rols.index');   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rol $rol)
    {
        $rol->delete();
        return redirect()->route('rol.index');
    }
}
