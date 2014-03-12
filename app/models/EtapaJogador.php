<?php
class EtapaJogador extends Eloquent
{
	protected $table = 'etapa_jogadores';

	public $timestamps = false;

	public function etapa()
	{
		return $this->belongsTo('Etapa');
	}

	public function jogador()
	{
		return $this->belongsTo('Jogador');
	}

	public function getPontosAttribute($value)
    {
        return (int) $value;
    }

	public function getPosicaoAttribute($value)
    {
        return (int) $value;
    }

	public function eliminaJogadorDaEtapa()
	{
		$etapaId = $this->etapa_id;

		$total      = EtapaJogador::where('etapa_id', '=', $etapaId)->count();
		$eliminados = EtapaJogador::where('etapa_id', '=', $etapaId)->where('posicao', '>', 0)->count();

		$this->posicao = $total - $eliminados;
		$pontuacao = Pontuacao::where('ranking_id', '=', $this->etapa->ranking_id)
		               ->where('qtd_jogadores', '=', $total)
		               ->where('posicao', '=', $this->posicao)->first();
		$this->pontos = $pontuacao->pontos;

		return $this->save();

	}

	public function atualizaPontosPosicoes($etapaId) {
		$jogadores = EtapaJogador::where('etapa_id', '=', $etapaId)->orderBy('posicao', 'DESC')->get();

		$pos   = $jogadores->count();
		$total = $jogadores->count();
		
		foreach ($jogadores as $jogador) {
			if ($jogador->posicao > 0) {
				$jogador->posicao = $pos;
				$pontuacao = Pontuacao::where('ranking_id', '=', $jogador->etapa->ranking_id)
		               ->where('qtd_jogadores', '=', $total)
		               ->where('posicao', '=', $jogador->posicao)->first();
		        if ($pontuacao) {
					$jogador->pontos = $pontuacao->pontos;
		        }else {
					$jogador->pontos = 0;
		        }
				$jogador->save();
				$pos = $pos - 1;
			}
		}

		return true;
	}

}
