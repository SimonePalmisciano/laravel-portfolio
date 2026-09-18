@extends('layouts.app')

@section('title', 'Modifica una Tecnologia')

@section('content')

    <div class="my-2 text-end">
        <a class="btn btn-outline-primary" href="{{ route('technologies.show', $technology) }}">
            Torna indietro
        </a>
    </div>

    <form action="{{ route('technologies.update', $technology) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-control mb-3 d-flex flex-column">
            <label class="form-label" for="name">Nome Tecnologia</label>
            <input class="form-control" type="text" name="name" id="name" required value="{{ $technology->name }}">
        </div>

        <div class="form-control mb-3 d-flex flex-column">
            <label for="color">Colore</label>
            <input type="color" value="{{$technology->color}}" id="color" name="color">
        </div>

        <input class="btn btn-outline-primary" type="submit" value="Modifica Tipologia">

    </form>

@endsection
