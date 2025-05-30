<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EvaluationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $evaluation = Evaluation::latest()->paginate(10);
        return view('admin.evaluations.index', compact('evaluations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.evaluations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'Titre' => 'required|string',
            'Type' => 'required|string',
            'Date' => 'required|date',
        ]);
    
        Evaluation::create($validated);
    
        return redirect()->route('admin.evaluationss.index')->with('success', 'Évaluation ajouté.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $evaluation = Evaluation::findOrFail($id);
        return view('admin.evaluations.show', compact('evaluation'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        {
            $evaluation = Evaluation::findOrFail($id);
            return view('admin.evaluations.edit', compact('evaluation'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        {
            $evaluation = Evaluation::findOrFail($id);
    
            $validated = $request->validate([
                'Titre' => 'required|string',
                'Type' => 'required|string',
                'Date' => 'required|date'. $evaluation->id,
            ]);
        
            $evaluation->update($validated);
        
            return redirect()->route('admin.evaluations.index')->with('success', 'Évaluation mis à jour.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        {
            $evaluation = Evaluation::findOrFail($id);
            $evaluation->delete();
        
            return redirect()->route('admin.evaluations.index')->with('success', 'Évaluation supprimé.');
        }
    }
}
