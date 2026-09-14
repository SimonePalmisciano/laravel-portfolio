@extends('layouts.app')

@section('content')
    <div class="container p-5 mb-4">
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <h5>
                        Admin nome: {{$user['name']}}
                    </h5>

                    <p>
                        Admin email: {{$user['email']}}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
