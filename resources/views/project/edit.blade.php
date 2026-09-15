@extends('layouts.app')

@section('title', 'Modifica il Progetto')

@section('content')
    <div class="my-5">
        <h1>
            Modifica il Progetto
        </h1>
    </div>

    <form action="{{ route('projects.update', $project) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-control mb-3 d-flex flex-column">
            <label class="form-label" for="name">Nome Progetto</label>
            <input class="form-control" type="text" name="name" id="name" value="{{$project['name']}}" required>
        </div>

        <div class="form-control mb-3 d-flex flex-column">
            <label class="form-label" for="client">Nome Cliente</label>
            <input class="form-control" type="text" name="client" id="client" value="{{$project['client']}}" required>
        </div>

        <div class="form-control mb-3 d-flex flex-column">
            <label class="form-label" for="period">Periodo Progetto</label>
            <input class="form-control" type="date" name="period" id="period" value="{{$project['period']}}">
        </div>

        <div class="form-control mb-3 d-flex flex-column">
            <label for="summary">Riassunto del Progetto</label>
            <textarea class="form-control" name="summary" id="summary" value="" required>{{$project['summary']}}</textarea>
        </div>

        <input class="btn btn-outline-primary" type="submit" value="Modifica Progetto">

    </form>

@endsection
