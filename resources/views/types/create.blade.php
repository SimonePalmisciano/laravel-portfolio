@extends('layouts.app')

@section('title', 'Aggiungi un Progetto')

@section('content')

    <div class="my-2 text-end">
        <a class="btn btn-outline-primary" href="{{ route('types.index') }}">
            Torna indietro
        </a>
    </div>

    <form action="{{ route('types.store') }}" method="POST">
        @csrf

        <div class="form-control mb-3 d-flex flex-column">
            <label class="form-label" for="name">Nome Tipologia</label>
            <input class="form-control" type="text" name="name" id="name" required>
        </div>

        <div class="form-control mb-3 d-flex flex-column">
            <label for="description">Descrizione del Tipo</label>
            <textarea class="form-control" name="description" id="description" required></textarea>
        </div>

        <input class="btn btn-outline-primary" type="submit" value="Salva Tipologia">

    </form>

@endsection
