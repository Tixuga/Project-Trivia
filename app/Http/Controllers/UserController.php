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
    public function showUsers()
    {
        $users = User::orderBy('points','desc')->get();
        //dd($users);
        return view('pages.leaderboards', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $users)
    {
        $users = User::where('id',auth()->id())->get();
        //dd($users);
        return view('pages.editUser', ['users'=>$users]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editUser(User $user)
    {
        $users = User::where('id',auth()->id())->first();
        // dd($users);
        return view('pages.editUser', ['users'=>$users]);
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
        $rules = [
            'name'  => 'required|min:4|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8'
        ];

        $errorMessage = [
            'required' => 'Enter your :attribute first.'
        ];

        $this->validate($request, $rules, $errorMessage);

        $user->update([
            'name'  => $request->name,
            'email' => strtolower($request->email),
            'password' => $request->password
        ]);
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
