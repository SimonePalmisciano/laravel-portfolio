@extends('layouts.app')

@section('title', $project->name)

@section('content')
    <div class="container my-5">
        <div class="row">

            <div class="card">
                <div class="m-2 card-head">
                    <h2>
                        {{ $project->name }}
                    </h2>
                    <p>
                        {{ $project->client }}
                    </p>
                    <p>
                        {{-- @dd($type) --}}
                        {{$types->find($project->type)->name}}
                    </p>
                </div>
                <div class="d-flex gap-2">
                    <a class="btn btn-outline-secondary" href="{{ route('projects.edit', $project) }}">
                        Modifica
                    </a>
                    <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
                        data-bs-target="#eliminationModal">
                        Elimina
                    </button>
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

        <div class="modal fade" id="eliminationModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Elimina per sempre
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            Annulla
                        </button>
                        <form action="{{ route('projects.destroy', $project) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input class="btn btn-outline-danger" type="submit" value="Elimina">
                        </form>
                    </div>
                </div>
            </div>
        </div>

    @endsection
