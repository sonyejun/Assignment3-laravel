<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/users', [UserController::class, 'index'])->middleware('auth', 'verified')->name('users.index');
Route::get(
    'users/trash/{id}',
    [UserController::class, 'trash'])
    -> name('users.trash')
    -> middleware('auth','verified');

Route::get(
    'movies/trash/{id}',
    [MovieController::class, 'trash'])
    -> name('movies.trash')
    -> middleware('auth','verified');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('movies', MovieController::class) -> middleware('auth','verified');


Route::get('/guest/list', [MovieController::class, 'guestindex'])->name('list');

require __DIR__.'/auth.php';
