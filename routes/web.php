<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('pagina-principal');

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/anuncios', function () {
    return view('anuncios');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/anuncio', function () {
    return view('anuncio');
});
