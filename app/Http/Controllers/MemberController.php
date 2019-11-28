<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\Illuminate\Support\Facades\DB;
use App\Member;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $member = Member::all();
        return view('member.member', compact('member'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/member.create');
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
            'name' => ['required', 'min:3'],
            'address' => 'required',
            'phone_number' => 'required'
        ]);

        $member = new Member();

        $member->name = request('name');
        $member->address = request('address');
        $member->phone_number = request('phone_number');

        $member->save();

        alert()->success('Data Successfully Added', 'Congratulations')->persistent('Close');
        return redirect('/member');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($ud)
    {
        $member = DB::table('members')->where('id_member', $ud)->get();

        return view('member.edit', compact('member'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'address' => 'required',
            'phone_number' => 'required'
        ]);

        DB::table('members')->where('id_member', $request->$ud)->update([
            'name' => $request->movie_title,
            'address' => $request->address,
            'phone_number' => $request->phone_number
        ]);

        return redirect('/member');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($ud)
    {
        DB::table('members')->where('id_member', $ud)->delete();

        alert()->success('Data Successfully Deleted', 'Congratulations')->persistent('Close');        
        return redirect('/member');
    }
}
