<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home.home');
});
Route::get('/nehezseg', function () {
    return view('nehezseg.nehezseg');
});
Route::get('/szabalyok', function () {
    return view('szabalyok.szabalyok');
});
Route::get('/ertekeld', function () {
    return view('ertekeld.ertekeld');
});
Route::get('/szoveg/{szint}', function ($szint) {
    return view('szoveg.szoveg')->with('szint', $szint);
//   dd(['szint' => $szint]);
});
Route::get('/valassz/{szint}', function ($szint) {
    return view('valassz.valassz')->with('szint', $szint);
});
//Route::get('/feleles/{szint}', function ($szint) {
  //  return view('feleles.feleles')->with('szint', $szint);
//});
Route::get('/feleles/{szint}', 'QuestionController@index');
Route::get('/meres/{szint}', 'TaskController@index');
//Route::get('/meres/{szint}', function ($szint) {
//    return view('meres.meres')->with('szint', $szint);
//});
