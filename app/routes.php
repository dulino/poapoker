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

Route::resource('jogadores', 'JogadoresController');
Route::resource('rankings', 'RankingsController');
Route::resource('etapas', 'EtapasController');
Route::resource('etapajogadores', 'EtapaJogadoresController');

Route::get('detalhes/etapa/{id}', function($id)
{
  return Etapa::with('jogadores')->with('jogadores.jogador')->find($id);
});

Route::get('jogadores/{jogadorId}/{rankingId}', 'JogadoresController@rankingJogador');
Route::get('ultimas/etapas/{tot}', 'EtapasController@ultimas');
Route::get('home', 'JogadoresController@rankingHome');
Route::get('rankingsemdescartes/{ranking}', 'JogadoresController@rankingSemDescartes');
Route::get('rankingcomdescartes/{ranking}', 'JogadoresController@rankingComDescartes');
Route::post('detalhes/alteraaddon/{id}', 'EtapaJogadoresController@alteraAddon');
Route::post('detalhes/alterarebuy/{id}', 'EtapaJogadoresController@alteraRebuy');
Route::post('detalhes/eliminajogador/{id}', 'EtapaJogadoresController@eliminarJogadorEtapa');

