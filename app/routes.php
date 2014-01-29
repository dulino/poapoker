<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::model('jogador', 'Jogador');
Route::model('etapa', 'Etapa');

Route::get('/', function() {
	return View::make('layouts.master');
});

Route::resource('shop', 'ShoppingController');
Route::resource('jogadores', 'JogadoresController');
Route::resource('rankings', 'RankingsController');
Route::resource('etapas', 'EtapasController');
