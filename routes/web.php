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

//----------------------------------------------------
Route::get('/', function () {
    return view('home');
})->name('pagina-homepage');

//----------------------------------------------------
Route::get('/news', function () {
    return view('news');
})->name('pagina-notizie');

//----------------------------------------------------
Route::get('/i-prodotti', function () {
    $tipiPasta = config('tipi-pasta');
    $pasta = config('pasta');
    $data = ['tipi_pasta' => $tipiPasta, 'pasta' => $pasta];
    return view('products', $data);
})->name('pagina-prodotti');

//----------------------------------------------------

$pages = config('pasta');

foreach ($pages as $page) {

    Route::get("/pasta/{$page['pagina']}", function() use ($page) {
        $page = ['pasta' => $page];
        return view('dettagli', $page);
    }) ->name($page['pagina']);;
}

//----------------------------------------------------
$pages = config('tipi-pasta');

foreach ($pages as $page) {
    Route::get("/tipologia/{$page['link']}", function () { 

        $pasta = config('pasta');
        $data = ['paste' => $pasta];
        return view('products-list', $data);

    }) ->name('pagina-'.$page['link']); 
}