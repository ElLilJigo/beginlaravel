@extends('layout')

@section('title', 'Liste des notes')
@section('header', 'Notes')

    @section('content')
        <div class="row row-cols-1 row-cols-md-2 g-4">
            @foreach ($notes as $note)
                <div class="col">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">{{ $note->title }}</h5>
                            <p class="card-text">{{ $note->content }}</p>

                            <a href="/notes/{{ $note->id }}/edit" class="btn btn-sm btn-outline-primary">Modifier</a>

                            <form action="/notes/{{ $note->id }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Supprimer cette note ?')">
                                    Supprimer
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-4">
            <a href="/notes/create" class="btn btn-primary">➕ Ajouter une note</a>
        </div>
    @endsection
