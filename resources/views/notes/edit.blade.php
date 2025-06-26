@extends('layout')

@section('title', 'Modifier une note')
@section('header', 'Modifier une note')

@section('content')
    <form method="POST" action="/notes/{{ $note->id }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Titre</label>
            <input
                type="text"
                name="title"
                id="title"
                class="form-control @error('title') is-invalid @enderror"
                value="{{ old('title', $note->title) }}"
            >
            @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Contenu</label>
            <textarea
                name="content"
                id="content"
                rows="5"
                class="form-control @error('content') is-invalid @enderror"
            >{{ old('content', $note->content) }}</textarea>
            @error('content')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Mettre à jour</button>
        <a href="/notes" class="btn btn-secondary">Annuler</a>
    </form>
@endsection
