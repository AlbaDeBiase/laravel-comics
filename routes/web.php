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
    $arrayfumetti = config('comics');

    $data = [
        'fumetti'=>$arrayfumetti
    ];
    // dd($data);
    return view('home',$data);
})->name('home');


Route::get('/comics/{id}', function($id) {
    // recupero l'array di fumetti
    $arrayfumetti = config('comics');
    // verifico che esista una chiave valida
    if(array_key_exists($id, $arrayfumetti)) {
        // recupero il fumetto di cui ho digitato l'id nell' url
        $fumetto = $arrayfumetti[$id];
        $data = [
        'fumettoId' => $fumetto
    ];
        return view('dettaglio-fumetto', $data);
    }
    abort(404);
})->name('fumetto');
