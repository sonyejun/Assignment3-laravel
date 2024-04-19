@extends('layouts/admin')
@section('content')
    <div class="row">
        <div class="col">
            <h1 class="display-2">
                Update Movie Profile
            </h1>
        </div>
    </div>
    <div class="row">
        <form action="{{ route('movies.update', $movie -> id) }}" method="POST">
            @method('PUT')
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" aria-describedby="title" name="title" placeholder="Title" value="{{ $movie -> title }}" required>
                </div>
                <div class="form-group mt-3">
                    <label for="genre">genre</label>
                    <input type="text" class="form-control" id="genre" aria-describedby="genre" name="genre" placeholder="Genre" value="{{ $movie -> genre }}" required>
                </div>
                <div class="form-group mt-3">
                    <label for="director">Director</label>
                    <input type="text" class="form-control" id="director" aria-describedby="director" name="director" placeholder="Director" value="{{ $movie -> director }}" required>
                </div>
                <div class="form-group mt-3">
                    <label for="rating">Rating</label>
                    <input type="number" class="form-control" id="rating" aria-describedby="rating" name="rating" placeholder="Rating" value="{{ $movie -> rating }}" step="0.1" min="0" max="10" required>
                </div>
                <div class="form-group mt-3">
                    <label for="release_date">Release date</label>
                    <input type="date" class="form-control" id="release_date" aria-describedby="release_date" name="release_date" placeholder="Release date" value="{{ $movie -> release_date }}" required>
                </div>
                <div class="form-group mt-3">
                    <label for="thumbnail">Thumbnail</label>
                    <input type="url" class="form-control" id="thumbnail" aria-describedby="thumbnail" name="thumbnail" placeholder="Thumbnail Url" value="{{ $movie -> thumbnail }}" required>
                </div>
                <div class="form-group mt-3">
                    <label for="poster">Poster</label>
                    <input type="url" class="form-control" id="poster" aria-describedby="poster" name="poster" placeholder="Poster Url" value="{{ $movie -> poster }}" required>
                </div>
                <div class="form-group mt-3">
                    <label for="synopsis">Synopsis</label>
                    <input type="text" class="form-control" id="synopsis" aria-describedby="synopsis" name="synopsis" placeholder="Synopsis" value="{{ $movie -> synopsis }}" required>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
              </form>
        </div>
    </div>
@endsection