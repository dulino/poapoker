<?php

// app/controllers/EtapasController.php

class EtapasController extends BaseController
{
	protected $layout = 'layouts.master';

	public function ultimas($tot)
	{
		return Etapa::with('jogadores')->with('jogadores.jogador')->with('ranking')->orderBy('data', 'DESC')->take($tot)->get()->toJson();
	}

	public function index()
	{
		$ranking_id = Input::get('ranking_id');
		if ($ranking_id!="") {
			return Etapa::with('jogadores')->with('ranking')->where('ranking_id','=', $ranking_id)->get();
		} else {
			return Etapa::with('jogadores')->with('ranking')->get();
		}
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$etapa = Etapa::find($id);
		$campo = Input::get('campo');
		if ($campo == 'nome') {
			$etapa->nome = Input::get('nome');
		}
		if ($campo == 'data') {
			$etapa->data = Input::get('data');
		}
		if ($campo == 'valor_buyin') {
			$etapa->valor_buyin = Input::get('valor_buyin');
		}
		if ($campo == 'fichas_buyin') {
			$etapa->fichas_buyin = Input::get('fichas_buyin');
		}
		if ($campo == 'valor_addon') {
			$etapa->valor_addon = Input::get('valor_addon');
		}
		if ($campo == 'fichas_addon') {
			$etapa->fichas_addon = Input::get('fichas_addon');
		}
		$etapa->save();
		return 1;
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$etapa = Etapa::find($id);

		if(!$etapa)
			return false;
	
		$etapa->delete();
	}
}