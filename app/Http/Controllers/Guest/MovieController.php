<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//models
use App\Models\Movie;

class MovieController extends Controller

        /*
            4 comandi crude fondamentali:
            C -> create
            R -> read -> divisa in 2: read di tutte le istanze e della singola istanza (all e single)
            U -> update
            D -> delete
        */

        //esempio:
        //public function index(){

            // $comics = config('comics');
    
            // $data = compact('comics');
    
            // //dd($data);
    
            // return view('home', $data);
        //}
{
    public function index(){
        //leggi tutt ele istanze di movie 

        $movies = Movie::all();

        return view('movies.index', compact('movies'));

        // foreach($movies as $movie){
        //     dd([
        //         'titolo'=>$movie->title,
        //         'titolo_originale'=>$movie->original_title,
        //         'nazionalità'=>$movie->nationality,
        //         'data_duscita'=>$movie->date,
        //         'voto'=>$movie->vote,
        //     ]);
        // }

        // dd($movies);
    }

    public function show($id){
        //leggi la singola istanza di movie
    }
}
