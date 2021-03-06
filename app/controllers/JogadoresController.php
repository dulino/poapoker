<?php

class JogadoresController extends BaseController
{
	protected $layout = 'layouts.master';

    public function rankingSemDescartes($ranking) {
    	$ranking = DB::table('etapa_jogadores')
    		->select(DB::raw('sum(pkr_etapa_jogadores.pontos) as pontuacao, min(pkr_etapa_jogadores.posicao) as melhor, pkr_etapa_jogadores.jogador_id, pkr_jogadores.apelido'))
            ->join('etapas', 'etapa_jogadores.etapa_id', '=', 'etapas.id')
            ->join('jogadores', 'etapa_jogadores.jogador_id', '=', 'jogadores.id')
            ->where('etapas.ranking_id', '=', $ranking)
            ->groupBy('etapa_jogadores.jogador_id', 'jogadores.apelido')
            ->orderBy('pontuacao', 'DESC')->orderBy('melhor')
            ->get(array('etapa_jogadores.jogador_id', 'jogadores.apelido', 'pontuacao'));
    	return $ranking;
    }

    public function rankingHome() {
    	$ult = DB::table('rankings')->max('id');

    	$ranking = DB::table('jogadores')
    		->select(DB::raw('pontoscomdescarte(id, '.$ult.', 5) as pontuacao, pontuacoes(id, '.$ult.') as pontuacoes, apelido, id as jogador_id, '.$ult.' as ranking_id'))
            ->whereRaw('pontoscomdescarte(id, '.$ult.', 5) > 0')
            ->orderBy('pontuacao', 'DESC')
            ->get(array('pontuacao','pontuacoes','apelido', 'jogador_id', 'ranking_id'));

    	return $ranking;
    }

    public function rankingComDescartes($ranking) {
    	$ranking = DB::table('jogadores')
    		->select(DB::raw('pontoscomdescarte(id, '.$ranking.', 5) as pontuacao, pontuacoes(id, '.$ranking.') as pontuacoes, apelido, id as jogador_id'))
            ->whereRaw('pontoscomdescarte(id, '.$ranking.', 5) > 0')
            ->orderBy('pontuacao', 'DESC')
            ->get(array('pontuacao','pontuacoes','apelido', 'jogador_id'));
    	return $ranking;
    }

    public function rankingJogador($jogador, $ranking) {
    	$posicoes = DB::table('etapa_jogadores')
    		->select(DB::raw('pkr_etapa_jogadores.pontos, pkr_etapa_jogadores.posicao, pkr_etapas.data, pkr_etapas.nome, pkr_etapa_jogadores.jogador_id, pkr_jogadores.apelido'))
            ->join('etapas', 'etapa_jogadores.etapa_id', '=', 'etapas.id')
            ->join('jogadores', 'etapa_jogadores.jogador_id', '=', 'jogadores.id')
            ->where('etapas.ranking_id', '=', $ranking)
            ->where('etapa_jogadores.jogador_id', '=', $jogador)
            ->orderBy('data', 'DESC')
            ->get(array('etapa_jogadores.pontos', 'etapa_jogadores.posicao','etapas.data', 'etapas.nome','etapa_jogadores.jogador_id', 'jogadores.apelido'));
    	return $posicoes;
    }

	/**
	 * Display a player.
	 *
	 * @return Response
	 */
	public function show($jogador_id)
	{
		return Jogador::find($jogador_id);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$nome = Input::get('name');
		if ($nome!="") 
          return Jogador::where('nome', 'LIKE', '%'.$nome.'%')->orWhere('apelido', 'LIKE', '%'.$nome.'%')->get();
		else
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