@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Lista de generos</div>
                    <nav class="nav flex-column">
                        @foreach($generos as $genero)
                            <a class="nav-link" href="#">{{ $genero }}</a>
                        @endforeach
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection