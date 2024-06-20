<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movies;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function getGenres()
    {
        $generos = Genre::all();
        return view("filmes", ['generos' => $generos]);
    }

    public function postMovies(Request $request)
    {

        // Se a validação falhar, o Laravel redirecionará automaticamente com os erros de validação

        $movie = new Movies;
        $movie->name = $request->input('name');
        $movie->description = $request->input('description');
        $movie->picture='14';
        $movie->released = $request->input('released');
        $movie->genreId = $request->input('genre_id'); // Ajustado para 'genreId'
        $movie->save();

        // Debugging para verificar se o filme foi salvo corretamente
       

        return redirect()->route('filmes')->with('success', 'Movie created successfully.');
    }
}
