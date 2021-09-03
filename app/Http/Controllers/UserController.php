<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('points','desc')->get();
        
        return view('pages.leaderboards', ['users' => $users]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $users)
    {
        $users = User::where('id',auth()->id())->first();
        
        return view('pages.show_user', ['users'=>$users]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editUser(User $user)
    {
        $user = User::where('id',auth()->id())->first();
        
        return view('pages.edit_user', ['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->update($request->all());

        return redirect('/show_user')->with('success','User info updated sucessfully');
    }

    public function updatePoints(Request $request, User $user)
    {
        $user = User::where('id',auth()->id())->first();

        $points = $request->pointSubmit;

        if ($points === null) {

            return redirect('/');

        } else {

            $user->increment('points',$points);   

            $user->update();

            return redirect('/')->with('success','Points updated sucessfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(User $user)
    {
        $user->delete();

        return redirect('/')->with('success','User deleted successfully.');
    }
}
