<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        {
            $note = Etudiant::latest()->paginate(10);
            return view('admin.etudiants.index', compact('etudiants'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.notes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'Etudiant_id' => 'required|exists:etudiants,id',
            'Evaluation_id' => 'required|exists:evaluations,id',
            'Note' => 'required|numeric|min:0|max:20',
        ]);

        Note::create($validated);

        return redirect()->route('admin.notes.index')->with('success', 'Note ajoutée.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $note = Note::findOrFail($id);
        return view('admin.notes.show', compact('note'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $note = Note::findOrFail($id);
        return view('admin.notes.edit', compact('note'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $note = Note::findOrFail($id);

        $validated = $request->validate([
            'Etudiant_id' => 'required|exists:etudiants,id',
            'Evaluation_id' => 'required|exists:evaluations,id',
            'Note' => 'required|numeric|min:0|max:20',
        ]);

        $note->update($validated);

        return redirect()->route('admin.notes.index')->with('success', 'Note mise à jour.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $note = Note::findOrFail($id);
        $note->delete();

        return redirect()->route('admin.notes.index')->with('success', 'Note supprimée.');
    }
}
