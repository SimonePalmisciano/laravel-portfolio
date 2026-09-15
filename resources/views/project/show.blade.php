@extends('layouts.app')

@section('title', $project->name)

@section('content')
    <div class="container my-5">
        <div class="row">

            <div class="card">
                <div class="m-2 text-center card-head">
                    <h2>
                        {{ $project->name }}
                    </h2>
                    <p>
                        {{ $project->client }}
                    </p>
                </div>
                <div>
                    <a class="btn btn-outline-secondary" href="{{route('projects.edit', $project)}}">
                        Modifica
                    </a>
                </div>
                <hr>
                <div class="card-body">
                    <small>
                        {{ $project->period }}
                    </small>
                    <p>
                        {{ $project->summary }}
                    </p>
                </div>
            </div>
        </div>


@endsection
