<?php

namespace App\Http\Controllers;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class MovieController extends Controller
{
    public function getAllMovie()  {

        $allMovies=Movie::all();
        return response()->json($allMovies);

    }
    public function getAllMovieByDB()  {

        $allMovies = DB::table('movie')->get();
        return response()->json($allMovies);
        
    }


}
