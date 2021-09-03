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
        $data = json_decode($dataJson, true);
        return view('pages.gamePage', [
            'data' => $data
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Trivia  $trivia
     * @return \Illuminate\Http\Response
     */
    public function showResults(Request $request)
    {
        //dd($request);
        $points = $request->points;
        
        //dd($points);

        return view('pages.showResults', ['points' => $points]);
    }

    public function trial(Request $request)
    {
        dd($request);
        $trial = $request->trial;
        dd($trial);
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
