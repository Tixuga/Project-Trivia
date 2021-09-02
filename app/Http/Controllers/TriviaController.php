<?php

namespace App\Http\Controllers;

use App\Trivia;
use Illuminate\Http\Request;

class TriviaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function questions()
     {
        $dataJson = file_get_contents("https://opentdb.com/api.php?amount=10&type=multiple");
        return view('pages.gamePage', [
            'dataJson' => $dataJson
        ]);
     }


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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Trivia  $trivia
     * @return \Illuminate\Http\Response
     */
    public function show(Trivia $trivia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Trivia  $trivia
     * @return \Illuminate\Http\Response
     */
    public function edit(Trivia $trivia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Trivia  $trivia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trivia $trivia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Trivia  $trivia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trivia $trivia)
    {
        //
    }
}
