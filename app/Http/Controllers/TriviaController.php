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
        return view('pages.game_page', [
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
        $points = $request->points;

        return view('pages.show_results', [
            'points' => $points
        ]);
    }
}