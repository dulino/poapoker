<?php

class RankingsController extends BaseController
{
	protected $layout = 'layouts.master';

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return Ranking::all(array('id','descricao'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$descricao = Input::get('descricao');

		$ranking = new Ranking;
		$ranking->descricao = $descricao;
		$ranking->save();
		
		if($ranking)
			return $ranking->id;
		else
			return 0;
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$ranking = Ranking::find($id);

		$ranking->descricao = Input::get('descricao');
		$ranking->save();
		return $ranking->id;
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$ranking = Ranking::find($id);

		if(!$ranking)
			return false;
	
		$ranking->delete();
	}
}