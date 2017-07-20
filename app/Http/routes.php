<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','FilmesController@index');
Route::get('/pessoas','PessoasController@index');
Route::get('/planetas','PlanetasController@index');
Route::get('/especies','EspeciesController@index');
Route::get('/naves','NavesController@index');
Route::get('/veiculos','VeiculosController@index');