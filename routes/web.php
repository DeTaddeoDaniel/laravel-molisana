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

    $tipiPasta = config('tipi-pasta');
    $pasta = config('pasta');
//----------------------------------------------------
Route::get('/', function () {
    return view('home');
})->name('pagina-homepage');

//----------------------------------------------------
Route::get('/news', function () {
    return view('news');
})->name('pagina-notizie');

//----------------------------------------------------
Route::get('/i-prodotti', function () use ($tipiPasta, $pasta){
    $data = ['tipi_pasta' => $tipiPasta, 'pasta' => $pasta];
    return view('products', $data);
})->name('pagina-prodotti');

//----------------------------------------------------

foreach ($pasta as $infoPasta) {

    Route::get("/pasta/{$infoPasta['pagina']}", function() use ($infoPasta) {
        $data = ['pasta' => $infoPasta];
        return view('dettagli', $data);
    }) ->name($infoPasta['pagina']);;
}

//----------------------------------------------------

foreach ($tipiPasta as $tipoPasta) {
    Route::get("/tipologia/{$tipoPasta['link']}", function () use ($pasta){ 

        $data = ['paste' => $pasta];
        return view('products-list', $data);

    }) ->name('pagina-'.$tipoPasta['link']); 
}