@extends('layouts.app')

@section('title', 'Tutti i Progetti')

@section('content')



    <div class="container mb-5">
        <div class="mb-4 d-flex gap-2 justify-content-between">
            <a class="btn btn-outline-primary" href="{{ route('projects.create') }}">
                Aggiungi un nuovo Progetto
            </a>
            <div>
                <a class="btn btn-outline-primary" href="{{ route('types.index') }}">
                    Visualizza Tutte le Tipologie
                </a>
                <a class="btn btn-outline-primary" href="{{ route('dashboard') }}">
                    Torna indietro
                </a>

            </div>
        </div>
        <div class="row g-4 row-cols-1 row-cols-md-3 row-cols-lg-4">
            @foreach ($projects as $project)
                <div class="col">
                    <div class="card">
                        <div class="m-2 text-center card-head">
                            <h2>
                                {{ $project->name }}
                            </h2>
                            <p>
                                {{ $project->client }}
                            </p>
                        </div>
                        <hr>
                        <div class="card-body">
                            <small>
                                {{ $project->period }}
                            </small>
                            <p>
                                {{ $project->summary }}
                            </p>
                            <a class="btn btn-outline-primary" href="{{ route('projects.show', $project->id) }}">
                                Visualizza
                            </a>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
