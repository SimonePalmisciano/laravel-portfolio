@extends('layouts.app')

@section('title', 'Dashboard Amministratore')

@section('content')
    <div class="container p-5 mb-4">
        <div class="row">
            <div class="col-6">
                <div class="card p-3 text-center">
                    <h5>
                        Admin nome: {{ $user['name'] }}
                    </h5>

                    <p>
                        Admin email: {{ $user['email'] }}
                    </p>
                </div>
            </div>
            <div class="col d-flex gap-2">
                <div class="my-4">
                    <a class="btn btn-outline-primary" href="{{ route('projects.index') }}">
                        Visualizza Tutti i Progetti
                    </a>
                </div>
                <div class="my-4">
                    <a class="btn btn-outline-primary" href="{{ route('types.index') }}">
                        Visualizza Tutte le Tipologie
                    </a>
                </div>
            </div>

        </div>
    </div>
@endsection
