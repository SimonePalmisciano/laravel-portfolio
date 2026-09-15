@extends('layouts.app')

@section('title', 'Aggiungi un Progetto')
    
@section('content')
    
<form action="{{route('projects.store')}}" method="POST">
    <div class="form-control mb-3 d-flex flex-column">
        <label for="name">Nome Progetto</label>
        <input type="text" name="name" id="name">
    </div>
    <div class="form-control mb-3 d-flex flex-column">
        <label for="client">Nome Cliente</label>
        <input type="date" name="client" id="client">
    </div>
    <div class="form-control mb-3 d-flex flex-column">
        <label for="period">Periodo Progetto</label>
        <input type="text" name="period" id="period">
    </div>
    <div class="form-control mb-3 d-flex flex-column">
        <label for="summary">Riassunto del Progetto</label>
        <textarea name="summary" id="summary"></textarea>
    </div>
</form>

@endsection