<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $etudiant = Etudiant::latest()->paginate(10);
        return view('admin.etudiants.index', compact('etudiants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.etudiants.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'Nom' => 'required|string',
            'Prenom' => 'required|string',
            'Date_naissance' => 'required|date',
        ]);
    
        Etudiant::create($validated);
    
        return redirect()->route('admin.etudiants.index')->with('success', 'Étudiant ajouté.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $etudiant = Etudiant::findOrFail($id);
        return view('admin.etudiants.show', compact('etudiant'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $etudiant = Etudiant::findOrFail($id);
        return view('admin.etudiants.edit', compact('etudiant'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $etudiant = Etudiant::findOrFail($id);

        $validated = $request->validate([
            'Nom' => 'required|string',
            'Prenom' => 'required|string',
            'Date_naissance' => 'required|date'. $etudiants->id,
        ]);
    
        $etudiant->update($validated);
    
        return redirect()->route('admin.etudiants.index')->with('success', 'Étudiant mis à jour.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $etudiant = Etudiant::findOrFail($id);
        $etudiant->delete();
    
        return redirect()->route('admin.etudiants.index')->with('success', 'Étudiant supprimé.');
    }
}
