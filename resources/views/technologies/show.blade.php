@extends('layouts.app')

@section('title', $technology->name)

@section('content')

    <div class="text-end">
        <a class="btn btn-outline-primary" href="{{ route('technologies.index') }}">
            Torna indietro
        </a>
    </div>

    <div class="container my-5">
        <div class="row">

            <div class="card">
                <div class="m-2 card-head">
                    <h2>
                        {{ $technology->name }}
                    </h2>
                </div>
                <hr>
                <div class="card-body">
                    <p>
                        {{ $technology->description }}
                    </p>
                </div>
                <hr>
                <div class="d-flex gap-2 my-2">
                    <a class="btn btn-outline-secondary" href="{{ route('technologies.edit', $technology) }}">
                        Modifica
                    </a>
                    <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
                        data-bs-target="#eliminationModal">
                        Elimina
                    </button>
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
                        <form action="{{ route('technologies.destroy', $technology) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input class="btn btn-outline-danger" type="submit" value="Elimina">
                        </form>
                    </div>
                </div>
            </div>
        </div>

    @endsection
