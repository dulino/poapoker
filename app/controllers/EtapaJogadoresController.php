<?php

class EtapaJogadoresController extends BaseController
{
	protected $layout = 'layouts.master';

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$etapaid = Input::get('etapaid');
		$apelido = Input::get('apelido');

		$jogadores = Jogador::where('apelido', '=', $apelido)->get();

		foreach ($jogadores as $jogador) {
			if($jogador) {
				$etapajogador = new EtapaJogador;
				if($etapajogador) {
					$etapajogador->etapa_id = $etapaid;
					$etapajogador->jogador_id = $jogador->id;
					$etapajogador->save();
					return Etapa::with('jogadores')->with('jogadores.jogador')->find($etapaid)->toJson();
				} else {
					return 0;
				}
			} else {
				return 0;
			}
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$etapaJogador = EtapaJogador::find($id);
		$etapaId = $etapaJogador->etapa_id;

		if(!$etapaJogador)
			return false;

		$etapaJogador->delete();

		$jogadores = EtapaJogador::where('etapa_id', '=', $etapaId)->orderBy('posicao', 'DESC')->get();

		$pos = $jogadores->count();
		
		foreach ($jogadores as $jogador) {
			if ($jogador->posicao > 0) {
				$jogador->posicao = $pos;
				$jogador->save();
				$pos = $pos - 1;
			}
		}
	}

	public function alteraAddon($id)
	{
		$etapaJogador = EtapaJogador::find($id);
		$etapaJogador->addons = Input::get('addons');
		$etapaJogador->save();
		return 1;
	}

	public function alteraRebuy($id)
	{
		$etapaJogador = EtapaJogador::find($id);
		$etapaJogador->rebuys = Input::get('rebuys');
		$etapaJogador->save();
		return 1;
	}
}