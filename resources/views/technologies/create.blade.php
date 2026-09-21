@extends('layouts.app')

@section('title', 'Aggiungi una Tecnologia')

@section('content')

    <div class="my-2 text-end">
        <a class="btn btn-outline-primary" href="{{ route('technologies.index') }}">
            Torna indietro
        </a>
    </div>

    <form action="{{ route('technologies.store') }}" method="POST">
        @csrf

        <div class="form-control mb-3 d-flex flex-column">
            <label class="form-label" for="name">Nome Tecnologia</label>
            <input class="form-control" type="text" name="name" id="name" required>
        </div>

        <div class="form-control mb-3 d-flex flex-column">
            <label for="color">Colore</label>
            <input type="color" value="" id="color" name="color">
        </div>

        <input class="btn btn-outline-primary" type="submit" value="Aggiungi Tecnologia">

    </form>

@endsection
