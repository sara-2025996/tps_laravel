<?php

namespace App\Http\Controllers;

use App\Models\Stagiaire;
use Illuminate\Http\Request;

class StagiaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stagiaires=Stagiaire::all();
        return view('stagiaire.index',compact('stagiaires'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
     return view('stagiaire.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)

    {
        $request->validate([
            'nom'=>'required|string|min:3',
            'genre'=>'required|string',
            'note'=>'required|numeric|min:0',
            ]);
            Stagiaire::create($request->all());
          return redirect()->route('stagiaires.index')->with('success','ajouter :)');
    }

    /**
     * Display the specified resource.
     */
    public function show(Stagiaire $stagiaire)
    {
        return view('stagiaire.show', compact('stagiaire'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Stagiaire $stagiaire)
    {
        return view('stagiaire.edite', compact('stagiaire'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Stagiaire $stagiaire)
    {
        $request->validate([
            'nom'=>'required|string|min:3',
            'genre'=>'required|string',
            'note'=>'required|numeric|min:0',
        ]);
         $stagiaire->update($request->all());
    return redirect()->route('stagiaires.index')->with('success','modifier :)');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Stagiaire $stagiaire)
    {
        $stagiaire->delete();
    return redirect()->route('stagiaires.index');
    }
}
