<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\Illuminate\Support\Facades\DB;
use App\Rent;
use App\Movie;
use App\Member;
// use App\Http\Controllers\MovieController;

class RentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rent = Rent::all();
        return view('rent.rent', compact('rent'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $movies = Movie::pluck('movie_title', 'id_movie');
        $movie = Movie::select('movie_title')->where('status', 'Available')->get();
        $member = Member::select('name')->get();
        return view('/rent.create', compact('movie', 'member'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'movie_title' => 'required',
            'rental_date' => 'required'
        ]);
        
        // $movie = new Movie();
        $rent = new Rent();
        $rent->name = request('name');
        $rent->movie_title = request('movie_title');
        $rent->rental_date = request('rental_date');
        $rent->save();
        

        DB::table('movies')->where('movie_title', $request->movie_title)->update([
            'status' => $request->status
        ]);
        
        
        alert()->success('Data Successfully Added', 'Congratulations')->persistent('Close');
        return redirect('/rent');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rent = DB::table('rent')->where('id_rent', $id)->get();
        return view('/rent.view', compact('rent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
