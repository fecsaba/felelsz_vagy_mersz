<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index($szint) {
//        $q = Task::all()->where('szint', $szint);
//        foreach ($q as $item) {
//            echo($item->feladat);
//        }
//        $data = [
//            'question' => $q[rand(0, count($q)-1)]->feladat,
//            'szint' => $szint
//        ];
//        print_r($data);
//        die();
        $c = Task::all()->count();
        $d = Task::find(rand(0,$c-1))->feladat;
        $data = [
            'task' => $d,
            'szint' => $szint
        ];
//        dd($data);
        return view('meres.meres')->with('data', $data);
    }
}
