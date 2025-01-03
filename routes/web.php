<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('/movies');
})->name('home');

// Auth routes
require __DIR__.'/auth.php';

// Protected routes
Route::middleware('auth')->group(function () {
    Route::get('/movies', 'MoviesController@index')->name('movies.index');
    Route::get('/movies/{id}', 'MoviesController@show')->name('movies.show');
    Route::get('/tv', 'TvController@index')->name('tv.index');
    Route::get('/tv/{id}', 'TvController@show')->name('tv.show');
    Route::get('/actors', 'ActorsController@index')->name('actors.index');
    Route::get('/actors/{id}', 'ActorsController@show')->name('actors.show');
    Route::get('/actors/page/{page?}', 'ActorsController@index');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/search', [SearchController::class, 'index'])->name('search');
});