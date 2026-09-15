@extends('layouts.app')

@section('title', 'Dashboard Amministratore')

@section('content')
    <div class="container p-5 mb-4">
        <div class="row">
            <div class="col-6">
                <div class="card p-3 text-center">
                    <h5>
                        Admin nome: {{ $user['name']}}
                    </h5>

                    <p>
                        Admin email: {{$user['email']}}
                    </p>
                </div>
            </div>
            <div class="col-6 my-4">
                <a class="btn btn-outline-primary" href="{{route('projects.index')}}">
                    visualizza progetti
                </a>
            </div>
        </div>
    </div>
@endsection
