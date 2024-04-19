<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet">
</head>
<body>
    <div class="row">
        <div class="col">
            <h1 class="display-2">
                View All Movies
            </h1>
        </div>
        <div class="row">
            @foreach ($movies as $movie)
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
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>