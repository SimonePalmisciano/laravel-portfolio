@extends('layouts.app')

@section('title', 'Tutti i tipi')

@section('content')

    <div class="container mb-5">
        <div class="mb-4">
            <a class="btn btn-outline-primary" href="{{ route('types.create') }}">
                Aggiungi nuova Tipologia
            </a>
        </div>
        <div class="row g-4 row-cols-1 row-cols-md-3 row-cols-lg-4">

            {{-- @dd($types) --}}
            @foreach ($types as $type)
                <div class="col">
                    <div class="card">
                        <div class="m-2 text-center card-head">
                            <h2>
                                {{-- @dd($type) --}}
                                {{ $type->name }}
                            </h2>
                        </div>
                        <hr>
                        <div class="card-body">
                            <p>
                                {{ $type->description }}
                            </p>
                            <a class="btn btn-outline-primary" href="{{ route('types.show', $type->id) }}">
                                Visualizza
                            </a>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
