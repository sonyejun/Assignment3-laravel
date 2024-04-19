@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col">
            <h1 class="display2">
                Create a Movie
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form action="{{ route('movies.store') }}" method="POST">
                @if($errors -> any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors -> all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif{{ csrf_field() }}
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" aria-describedby="title" name="title" placeholder="Title" required>
                </div>
                <div class="form-group mt-3">
                    <label for="genre">genre</label>
                    <input type="text" class="form-control" id="genre" aria-describedby="genre" name="genre" placeholder="Genre" required>
                </div>
                <div class="form-group mt-3">
                    <label for="director">Director</label>
                    <input type="text" class="form-control" id="director" aria-describedby="director" name="director" placeholder="Director" required>
                </div>
                <div class="form-group mt-3">
                    <label for="rating">Rating</label>
                    <input type="number" class="form-control" id="rating" aria-describedby="rating" name="rating" placeholder="Rating" step="0.1" min="0" max="10" required>
                </div>
                <div class="form-group mt-3">
                    <label for="release_date">Release date</label>
                    <input type="date" class="form-control" id="release_date" aria-describedby="release_date" name="release_date" placeholder="Release date" required>
                </div>
                <div class="form-group mt-3">
                    <label for="thumbnail">Thumbnail</label>
                    <input type="url" class="form-control" id="thumbnail" aria-describedby="thumbnail" name="thumbnail" placeholder="Thumbnail Url" required>
                </div>
                <div class="form-group mt-3">
                    <label for="poster">Poster</label>
                    <input type="url" class="form-control" id="poster" aria-describedby="poster" name="poster" placeholder="Poster Url" required>
                </div>
                <div class="form-group mt-3">
                    <label for="synopsis">Synopsis</label>
                    <input type="text" class="form-control" id="synopsis" aria-describedby="synopsis" name="synopsis" placeholder="Synopsis" required>
                </div>
                <!-- Hidden Input for User ID -->
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
              </form>
        </div>
    </div>
@endsection