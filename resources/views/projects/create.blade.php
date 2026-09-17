@extends('layouts.app')

@section('title', 'Aggiungi un Progetto')

@section('content')

    <div class="my-2 text-end">
        <a class="btn btn-outline-primary" href="{{ route('projects.index') }}">
            Torna indietro
        </a>
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
            <label class="form-label" for="type_id">Tipo del Progetto</label>
            <select name="type_id" id="type_id" class="form-control">
                @foreach ($types as $type)
                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach
            </select>
        </div>

        {{-- @dd($technologies) --}}

        <div>
            Tecnologie
        </div>
        <div class="form-control mb-3 d-flex flex-wrap">
            @foreach ($technologies as $technology)
                <div class="me-2">
                    <input type="checkbox" name="technologies[]" value="{{ $technology->id }}"
                        id="technology-{{ $technology->id }}">
                    <label for="technology-{{ $technology->id }}">{{ $technology->name }}</label>
                </div>
            @endforeach
        </div>


        <div class="form-control mb-3 d-flex flex-column">
            <label for="summary">Riassunto del Progetto</label>
            <textarea class="form-control" name="summary" id="summary" required></textarea>
        </div>

        <input class="btn btn-outline-primary" type="submit" value="Salva Progetto">

    </form>

@endsection
