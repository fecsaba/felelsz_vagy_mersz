<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index($szint) {
        $c = Question::all()->where('szint', $szint)->count();
        $recordsBySzint = Question::all()->where('szint', $szint);
        $i = rand(0,$c-1);
        $d =($recordsBySzint->values()[$i]['feladat']);
        $sz =($recordsBySzint->values()[$i]['szint']);
        $data = [
            'question' => $d,
            'szint' => $szint,
            'erosseg' => $sz
        ];
        return view('feleles.feleles')->with('data', $data);
    }
}
