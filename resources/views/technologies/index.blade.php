@extends('layouts.app')

@section('title', 'Tutte le Tecnologie')

@section('content')

    <div class="container mb-5">
        <div class="mb-4 d-flex gap-2 justify-content-between">
            <a class="btn btn-outline-primary" href="{{ route('technologies.create') }}">
                Aggiungi nuova Tecnologia
            </a>
            <div>
                <a class="btn btn-outline-primary" href="{{ route('projects.index') }}">
                    Visualizza Tutti i Progetti
                </a>
                <a class="btn btn-outline-primary" href="{{ route('dashboard') }}">
                    Torna indietro
                </a>

            </div>
        </div>
        <div class="row g-4 row-cols-1 row-cols-md-3 row-cols-lg-4">

            {{-- @dd($types) --}}
            @foreach ($technologies as $technology)
                <div class="col">
                    <div class="card">
                        <div class="m-2 text-center card-head">
                            <h2>
                                {{-- @dd($type) --}}
                                {{ $technology->name }}
                            </h2>
                        </div>
                        <hr>
                        <div class="card-body">
                            <p>
                                {{ $technology->color }}
                            </p>
                            <a class="btn btn-outline-primary" href="{{ route('technologies.show', $type->id) }}">
                                Visualizza
                            </a>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
