<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//API-VUE
/*USUARIO*/
Route::get('/noticias', [
  'uses' => 'usuarioController@verNoticias'
]);
Route::get('/reviews', [
  'uses' => 'usuarioController@verReviews'
]);
/*USUARIO*/

/*PRINCIPAL*/
Route::get('/todoNoticias', [
  'uses' => 'aplicacionController@traerNoticias'
]);
Route::get('/todoResenas', [
  'uses' => 'aplicacionController@traerResenas'
]);
Route::get('/todoJuegos', [
  'uses' => 'aplicacionController@traerJuegos'
]);
/*PRINCIPAL*/
