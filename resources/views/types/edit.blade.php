@extends('layouts.app')

@section('title', 'Aggiungi un Progetto')

@section('content')

    <div class="my-2 text-end">
        <a class="btn btn-outline-primary" href="{{ route('types.show', $type) }}">
            Torna indietro
        </a>
    </div>

    <form action="{{ route('types.update', $type) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-control mb-3 d-flex flex-column">
            <label class="form-label" for="name">Nome Tipologia</label>
            <input class="form-control" type="text" name="name" id="name" required value="{{ $type->name }}">
        </div>

        <div class="form-control mb-3 d-flex flex-column">
            <label for="description">Descrizione del Tipo</label>
            <textarea class="form-control" name="description" id="description" required>{{ $type->description }}</textarea>
        </div>

        <input class="btn btn-outline-primary" type="submit" value="Modifica Tipologia">

    </form>

@endsection
