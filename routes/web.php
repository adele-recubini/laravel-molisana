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


/*
la prima route è la mia pagina iniziale
*/

Route::get('/', function () {
    return view('page');
});
/*
la seconda route sarà quella in cui per ogni click alle varie tipologie ciclerò il mio data iniziale dandogli l indice e quindi da solo per ogni link cliccato ciclerà l array . l array ciclato sarà nella mia seconda view cioe prodotti.blade.php
*/
Route::get('/prodotti/{id}', function ($id) {
    return view('prodotti' , ['idprodotto' => $id]);
});
