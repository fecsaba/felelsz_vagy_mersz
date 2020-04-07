<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index($szint) {
        $c = Task::all()->where('szint', $szint)->count();
        $recordsBySzint = Task::all()->where('szint', $szint);
        $i = rand(0,$c-1);
        $d =($recordsBySzint->values()[$i]['feladat']);
        $sz =($recordsBySzint->values()[$i]['szint']);
        $data = [
            'task' => $d,
            'szint' => $szint,
            'erosseg' => $sz
        ];
        return view('meres.meres')->with('data', $data);
    }
}
