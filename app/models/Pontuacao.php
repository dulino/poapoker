<?php
class Pontuacao extends Eloquent
{
	protected $table = 'pontuacoes';

	public $timestamps = false;

	public function ranking()
	{
		return $this->belongsTo('Ranking');
	}
}
