<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
class MoviesController extends Controller
{
    public function getGenresAndMovies()
    {
        $generos = Genre::all();
        $filmes = Movies::all();
        //dd($filmes[3]->picture);
        return view("filmes", [
            'generos' => $generos,
            'filmes'=> $filmes
    ]);
    }

    public function postMovies(Request $request)
    {

        // Se a validação falhar, o Laravel redirecionará automaticamente com os erros de validação

        $movie = new Movies;
        $movie->name = $request->input('name');
        $movie->description = $request->input('description');
        //$movie->picture='14';
        $movie->released = $request->input('released');
        $movie->genreId = $request->input('genre_id'); // Ajustado para 'genreId'

        if ($request->hasFile('picture')) {
            $fileName = basename(Storage::put("/public/img/", $request->file('picture')));
            //dd($path); // Salva na pasta 'storage/app/public/movies'
            $movie->picture = $fileName;
        }
        
        $movie->save();

        // Debugging para verificar se o filme foi salvo corretamente
       

        return redirect()->route('filmes')->with('success', 'Movie created successfully.');
    }

    public function getMovies(Request $request) {
        $filmes = Movies::all();

        return view('', [''=> $filmes]);
    }
    public function index(Request $request){
        $movieId = $request->id;
        $movie = Movies::find($movieId);
        return view('exibirFilmes',['filme'=>$movie]);
    }


}
