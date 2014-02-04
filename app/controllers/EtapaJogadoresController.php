<?php

class EtapaJogadoresController extends BaseController
{
	protected $layout = 'layouts.master';

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
}