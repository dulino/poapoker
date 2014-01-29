<?php
class Jogador extends Eloquent
{
	protected $table = 'jogadores';

	public function etapas()
	{
		return $this->hasMany('EtapaJogador');
	}
}
