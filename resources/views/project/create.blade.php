@extends('layouts.app')

@section('title', 'Aggiungi un Progetto')

@section('content')
    <div class="my-5">
        <h1>
            Crea un nuovo Progetto
        </h1>
    </div>

    <form action="{{ route('projects.store') }}" method="POST">
        @csrf

        <div class="form-control mb-3 d-flex flex-column">
            <label class="form-label" for="name">Nome Progetto</label>
            <input class="form-control" type="text" name="name" id="name" required>
        </div>

        <div class="form-control mb-3 d-flex flex-column">
            <label class="form-label" for="client">Nome Cliente</label>
            <input class="form-control" type="text" name="client" id="client" required>
        </div>

        <div class="form-control mb-3 d-flex flex-column">
            <label class="form-label" for="period">Periodo Progetto</label>
            <input class="form-control" type="date" name="period" id="period">
        </div>

        <div class="form-control mb-3 d-flex flex-column">
            <label class="form-label" for="type">Tipo del Progetto</label>
            <select name="type" id="type" class="form-control">
                @foreach ($types as $type)
                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-control mb-3 d-flex flex-column">
            <label for="summary">Riassunto del Progetto</label>
            <textarea class="form-control" name="summary" id="summary" required></textarea>
        </div>

        <input class="btn btn-outline-primary" type="submit" value="Salva Progetto">

    </form>

@endsection
