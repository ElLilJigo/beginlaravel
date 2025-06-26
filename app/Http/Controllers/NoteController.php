<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::all();
        return view('notes.index', compact('notes'));
    }

    public function create()
    {
        return view('notes.create');
    }

    public function store(Request $request)
    {
        // Validation simple
        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'nullable'
        ]);

        // Création de la note
        Note::create($validated);
        return redirect('/notes')->with('success', 'Note ajoutée avec succès !');
    }

    public function destroy(Note $note)
    {
        $note->delete();

        return redirect('/notes')->with('success', 'Note supprimée avec succès !');
    }
    public function edit(Note $note)
    {
        return view('notes.edit', compact('note'));
    }

    public function update(Request $request, Note $note)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'nullable'
        ]);

        $note->update($validated);

        return redirect('/notes')->with('success', 'Note modifiée avec succès !');
    }

}


