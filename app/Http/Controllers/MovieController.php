<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\Illuminate\Support\Facades\DB;
use App\Movie;
use App\Http\Controllers\RentController;

class MovieController extends Controller
{
    public function index(){
        $movie = Movie::all();
        return view('movie.movie', compact('movie'));
    }

    public function create(){
        return view('/movie.create');
    }

    public function store(Request $request){
        request()->validate([
            'movie_title' => 'required',
            'genre' => ['required', 'min:3'],
            'years' => 'required',
            'status' => 'required|not_in:0'
        ]);
        
        $movie = new Movie();

        $movie->movie_title = request('movie_title');
        $movie->genre = request('genre');
        $movie->years = request('years');
        $movie->status = request('status');

        $movie->save();
        
        alert()->success('Data Successfully Added', 'Congratulations')->persistent('Close');
        return redirect('/movie');
    }

    public function edit($pk){
        $movie = DB::table('movies')->where('id_movie', $pk)->get();
        return view('movie.edit', compact('movie'));
    }

    public function update(Request $request){
        request()->validate([
            'movie_title' => 'required',
            'genre' => ['required', 'min:3'],
            'years' => 'required',
            'status' => 'required|not_in:0'
        ]);
        /* $movie = Movie::find($primaryKey);

        $movie->movie_title = request('movie_title');
        $movie->genre = request('genre');
        $movie->status = request('status');

        $movie->save(); */
        DB::table('movies')->where('id_movie', $request->id)->update([
            'movie_title' => $request->movie_title,
            'genre' => $request->genre,
            'years' => $request->years,
            'status' => $request->status
        ]);

        return redirect('/movie');
    }

    public function delete($id){
        DB::table('movies')->where('id_movie', $id)->delete();

        alert()->success('Data Successfully Deleted', 'Congratulations')->persistent('Close');        
        return redirect('/movie');
    }
}
