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
  $pasta = config('pasta');

    return view('page',
    ['array' =>$pasta]
  );
});

/*Route::get('/product/{id}', function($id) {
  $pasta = config('pasta');

    return view('product',

     ['array' => $pasta]
   );
});
*/




/*
la seconda route è la pagina che reindirizza sui vari prodotti
*/
Route::get('/product/{id}', function($id) {
  $pasta = config('pasta');

    return view('product',

     ['idProduct' => $id]
   );
});

/*
se l id che passo non esiste rindirizzami alla pagina iniziale con tutte le paste
*/

Route::get('/product/{id?}', function($id = null) {
    if(empty($id)) {
        return redirect('/');
    }
    return view('product',
        ['idProduct' => $id]
    );
});
