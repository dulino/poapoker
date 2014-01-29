<?php
class Ranking extends Eloquent
{
	protected $table = 'rankings';

	public function etapas()
	{
		return $this->hasMany('Etapa');
	}
}
