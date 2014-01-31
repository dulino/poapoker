<?php
class Jogador extends Eloquent
{
	protected $table = 'jogadores';

	public $timestamps = false;

	public function etapas()
	{
		return $this->hasMany('EtapaJogador');
	}
}
