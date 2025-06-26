@extends('layout')

@section('title', 'Créer une note')
@section('header', 'Créer une note')

@section('content')
    <form method="POST" action="/notes">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Titre</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}">
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Contenu</label>
            <textarea name="content" id="content" rows="5" class="form-control">{{ old('content') }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Créer</button>
        <a href="/notes" class="btn btn-secondary">Annuler</a>
    </form>
@endsection
