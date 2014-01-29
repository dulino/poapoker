<?php
class Etapa extends Eloquent
{
	protected $table = 'etapas';

	// Album __belongs_to__ Ranking
	public function ranking()
	{
		return $this->belongsTo('Ranking');
	}

	public function jogadores()
	{
		return $this->hasMany('EtapaJogador');
	}

}
