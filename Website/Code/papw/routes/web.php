<?php

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
    return view('index');
})->name('principal');

Route::get('/juego','juegoController@verJuego');
Route::get('/juegos','juegoController@verJuegos');
Route::get('/noticia','aplicacionController@verNoticia');
Route::get('/review','aplicacionController@verReview');
Route::get('/perfil','aplicacionController@verPerfil');
Route::get('/principal', 'aplicacionController@paginaPrincipal');
