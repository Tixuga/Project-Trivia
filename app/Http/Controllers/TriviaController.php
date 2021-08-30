<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class TriviaController extends Controller
{
    //

    function questions()
    {
        $dataJson = file_get_contents("https://opentdb.com/api.php?amount=1");
        return view('pages.gamePage', [
        'dataJson' => $dataJson
        ]);
    }
}