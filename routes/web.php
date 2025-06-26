<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\NoteController;

// Appelle la classe index
// Connexion à la BDD
// Récupération des données
// Inclusion du template
Route::get('/notes', [NoteController::class, 'index']);
// montre le formulaire
Route::get('/notes/create', [NoteController::class, 'create']);
// POST /notes → enregistre la note
Route::post('/notes', [NoteController::class, 'store']);

Route::delete('/notes/{note}', [NoteController::class, 'destroy']);

Route::get('/notes/{note}/edit', [NoteController::class, 'edit']);
Route::put('/notes/{note}', [NoteController::class, 'update']);
