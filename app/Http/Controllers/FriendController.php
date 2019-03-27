<?php

namespace App\Http\Controllers;

use App\friend;
use Auth;
use Illuminate\Http\Request;

class FriendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {

      $friend = new Friend;
       $friend->user_id = Auth::user()->id;
       $friend->friend_id = $request->friend_id;
       $friend->save();

       // success message and return
       Session::flash('success', 'Friend has been added');
       return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\friend  $friend
     * @return \Illuminate\Http\Response
     */
    public function show(friend $friend)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\friend  $friend
     * @return \Illuminate\Http\Response
     */
    public function edit(friend $friend)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\friend  $friend
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, friend $friend)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\friend  $friend
     * @return \Illuminate\Http\Response
     */
    public function destroy(friend $friend)
    {
        //
    }
}
