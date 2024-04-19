@extends('layouts.admin');
@section('content')
<div class="row">
    <div class="col">
        <h1 class="display-2">
            Movie Profile
        </h1>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="{{ $movie -> poster }}" class="card-img-top" alt="Movie poster">
                <div class="card-body">
                    <h5 class="card-title">{{ $movie -> title }}</h5>
                    <p class="card-text">Genre: {{ $movie -> genre }}</p>
                    <p class="card-text">Director: {{ $movie -> director }}</p>
                    <p class="card-text">Rating: {{ $movie -> rating }}</p>
                    <p class="card-text">Date: {{ $movie -> release_date }}</p>
                    <p class="card-text">Synopsis: {{ $movie -> synopsis }}</p>
                </div>
                <div class="card-footer">
                    <a href="{{ route('movies.edit', $movie -> id) }}" class="btn btn-warning">Edit</a>
                    <a href="{{ route('movies.trash', $movie -> id) }}" class="btn btn-danger">Delete</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection