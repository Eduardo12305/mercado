<?php

use App\Http\Controllers\MoviesController;
use Illuminate\Support\Facades\Route;

Route::view('/index','index')->name('index')->middleware('auth:web');

//Route::view('/filmes','filmes')->name('filmes')->middleware('auth:web');

Route::get('/filmes', [MoviesController::class,'getGenresAndMovies'])->name('filmes')->middleware('auth:web');

Route::view('/configuracao','configuracao')->name('config')->middleware('auth:web');

Route::post('/filmes', [MoviesController::class,'postMovies'])->name('enviarMovies')->middleware('auth:web');

Route::view('','')->name('testw')->middleware('');