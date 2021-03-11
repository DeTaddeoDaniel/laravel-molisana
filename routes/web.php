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
    $data = ['tipi_pasta' => $tipiPasta];
    return view('products', $data);
})->name('pagina-prodotti');

//----------------------------------------------------

//----------------------------------------------------
// Route::get('/pasta/{id}', function ($id) {
//     $pasta = config('pasta');
    // $data = ['pasta' => $pasta[$id]];
//     return view('dettagli', $data);
// })->name('pagina-dettagli');