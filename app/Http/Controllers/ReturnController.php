<?php

namespace App\Http\Controllers;

use\Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\ReturnMovie;
use App\Movie;
use App\Rent;

class ReturnController extends Controller
{
    public function index(){
        $return = ReturnMovie::all();
        return view('return.return', compact('return'));
    }

    public function store(Request $request){
        request()->validate([
            'return_date' => 'required'
        ]);

        $return = new ReturnMovie();
        $return->id_rent = request('id_rent');
        $return->name = request('name');
        $return->movie_title = request('movie_title');
        $return->rental_date = request('rental_date');
        $return->return_date = request('return_date');
        $return->save();

        DB::table('movies')->where('movie_title', $request->movie_title)->update([
            'status' => $request->status
        ]);

        alert()->success('Data Successfully Added', 'Congratulations')->persistent('Close');
        return redirect('/return');
    }
}
