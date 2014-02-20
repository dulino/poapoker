<?php

class JogadoresController extends BaseController
{
	protected $layout = 'layouts.master';

    public function rankingSemDescartes($ranking) {
    	$ranking = DB::table('etapa_jogadores')
    		->select(DB::raw('sum(pkr_etapa_jogadores.pontos) as pontuacao, pkr_etapa_jogadores.jogador_id, pkr_jogadores.apelido'))
            ->join('etapas', 'etapa_jogadores.etapa_id', '=', 'etapas.id')
            ->join('jogadores', 'etapa_jogadores.jogador_id', '=', 'jogadores.id')
            ->where('etapas.ranking_id', '=', $ranking)
            ->groupBy('etapa_jogadores.jogador_id', 'jogadores.apelido')
            ->orderBy('pontuacao', 'DESC')
            ->get(array('etapa_jogadores.jogador_id', 'jogadores.apelido', 'pontuacao'));
    	return $ranking;
    }


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return Jogador::all(array('id','nome','apelido'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$nome = Input::get('nome');
		$apelido = Input::get('apelido');

		$jogador = new Jogador;
		$jogador->nome = $nome;
		$jogador->apelido = $apelido;
		$jogador->save();
		
		if($jogador)
			return $jogador->id;
		else
			return 0;
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$jogador = Jogador::find($id);

		$jogador->nome = Input::get('nome');
		$jogador->apelido = Input::get('apelido');
		$jogador->save();
		return $jogador->id;
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$jogador = Jogador::find($id);

		if(!$jogador)
			return false;
	
		$jogador->delete();
	}
}