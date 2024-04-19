<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMovieRequest;
use App\Http\Requests\UpdateMovieRequest;
use App\Models\Movie;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class MovieController extends Controller
{
    /**
     * Displays a list of movies registered by logged-in users.
     */
    public function index()
    {
        $userId = Auth::id();

        // /** @var User $user */
        $user = Auth::user();

        if($user->isAdmin()) {
            $movies = Movie::all();
        } else {
            $movies = Movie::where('user_id', $userId)->get();
        }

        return view('movies.index', ['movies' => $movies]);
        
    }

    public function guestindex()
    {
        $movies = Movie::all();
        return view('list', ['movies' => $movies]);
    }

    /**
     * Display a listing of the resource.
     */
    public function userMovies()
    {
        return view('movies.index', ['movies' => Movie::all()]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMovieRequest $request)
    {
        $validatedData = $request->validated();
        
        $userId = Auth::id();

        $validatedData['user_id'] = $userId;
        Movie::create($validatedData);
        Session::Flash('success', 'Moive created successfully');
        return redirect()->route('movies.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
        return view('movies.show', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $movie = Movie::findOrFail($id);
        return view('movies.edit', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMovieRequest $request, Movie $movie)
    {
        $validatedData = $request->validated();
        $userId = Auth::id();

        $user = Auth::user();
        if($userId === $movie->user_id || $user->isAdmin()) {
            $movie->update($validatedData);
            Session::flash('success', 'Movie updated successfully');
            return redirect()->route('movies.show', $movie);
        } else {
            return redirect()->route('movies.index', $movie);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function trash($id){
        $userId = Auth::id();
        $movie = Movie::findOrFail($id);
        
        $user = Auth::user();
        if($userId === $movie->user_id || $user->isAdmin()) {
            Movie::Destroy($id);
            return redirect() -> route('movies.index');
        } else {
            return redirect()->route('movies.index', $movie);
        }
    }
    

    public function destroy(Movie $movie)
    {
        //
    }

}
