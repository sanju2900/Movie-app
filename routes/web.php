<?php
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\ActorsController;
use App\Http\Controllers\TvController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('welcome');
});

Auth::routes();

Route::get('/movies',[MoviesController::class,'index'])->name('movies.index');
Route::get('/movies/{movie}',[MoviesController::class,'show'])->name('movies.show');


Route::get('/tv', [TvController::class,'index'])->name('tv.index');
Route::get('/tv/{id}', [TvController::class,'show'])->name('tv.show');

Route::get('/actors', [ActorsController::class,'index'])->name('actors.index');
Route::get('/actors/page/{page?}',  [ActorsController::class,'index']);

Route::get('/actors/{actor}',[ActorsController::class,'show'])->name('actors.show');Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

