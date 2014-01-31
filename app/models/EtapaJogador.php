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
}
