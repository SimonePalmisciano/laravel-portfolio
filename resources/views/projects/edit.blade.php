@extends('layouts.app')

@section('title', 'Modifica il Progetto')

@section('content')

    <div class="my-2 text-end">
        <a class="btn btn-outline-primary" href="{{ route('projects.show', $project) }}">
            Torna indietro
        </a>
    </div>

    <form action="{{ route('projects.update', $project) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-control mb-3 d-flex flex-column">
            <label class="form-label" for="name">Nome Progetto</label>
            <input class="form-control" type="text" name="name" id="name" value="{{ $project['name'] }}" required>
        </div>

        <div class="form-control mb-3 d-flex flex-column">
            <label class="form-label" for="client">Nome Cliente</label>
            <input class="form-control" type="text" name="client" id="client" value="{{ $project['client'] }}"
                required>
        </div>

        <div class="form-control mb-3 d-flex flex-column">
            <label class="form-label" for="period">Periodo Progetto</label>
            <input class="form-control" type="date" name="period" id="period" value="{{ $project['period'] }}">
        </div>

        <div class="form-control mb-3 d-flex flex-column">
            <label class="form-label" for="type">Tipo del Progetto</label>
            <select name="type" id="type" class="form-control">
                @foreach ($types as $type)
                    <option value="{{ $type->id }}" {{ $project->type_id == $type->id ? 'selected' : '' }}>
                        {{ $type->name }}
                    </option>
                @endforeach
            </select>
        </div>

        {{-- @dd($project->technologies) --}}
        <div>
            Tecnologie
        </div>
        <div class="form-control mb-3 d-flex flex-wrap">
            @foreach ($technologies as $technology)
                <div class="me-2">
                    <input type="checkbox" name="technologies[]" value="{{ $technology->id }}"
                        id="technology-{{ $technology->id }}" {{$project->technologies->contains($technology->id) ? 'checked' : ''}}>
                    <label for="technology-{{ $technology->id }}">{{ $technology->name }}</label>
                </div>
            @endforeach
        </div>

        <div class="form-control mb-3 d-flex flex-column">
            <label for="summary">Riassunto del Progetto</label>
            <textarea class="form-control" name="summary" id="summary" value="" required>{{ $project['summary'] }}</textarea>
        </div>

        <input class="btn btn-outline-primary" type="submit" value="Modifica Progetto">

    </form>

@endsection
