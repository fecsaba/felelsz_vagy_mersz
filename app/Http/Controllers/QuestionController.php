<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index($szint) {
//        $q = Question::all()->where('szint', $szint);
//        foreach ($q as $item) {
//            echo($item->feladat);
//        }

//        print_r($data);
//        die();
        $c = Question::all()->where('szint', $szint)->count();
        $d = Question::find(rand(0,$c-1))->feladat;
        $data = [
            'question' => $d,
            'szint' => $szint
        ];
//        dd($data);
        return view('feleles.feleles')->with('data', $data);
    }
}
