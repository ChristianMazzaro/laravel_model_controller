@extends('layouts.main')

@section('page-title','movies')

@section('main-content')

<div class="container">
    <div class="row mb-5">
        <div class="col">
            <h1>
                MOVIES
            </h1>
        </div>
    </div>
    <div class="row">
        @foreach ($movies as $movie)
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">TITOLO: {{$movie->title}}</h5>
                        <p class="card-text">
                            TITOLO ORIGINALE: {{$movie->original_title}}
                        </p>
                        <p class="card-text">
                            NAZIONALITA': {{$movie->nationality}}
                        </p>
                        <p class="card-text">
                            DATA D'USCITA: {{$movie->date}}
                        </p>
                        <p class="card-text">
                            VOTO: {{$movie->vote}}
                        </p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>