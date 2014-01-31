<?php
class Ranking extends Eloquent
{
	protected $table = 'rankings';

	public $timestamps = false;

	public function etapas()
	{
		return $this->hasMany('Etapa');
	}
}
