<?php

class JogadoresController extends BaseController
{
	protected $layout = 'layouts.master';

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return Jogador::all(array('id','nome','apelido'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$nome = Input::get('nome');
		$apelido = Input::get('apelido');

		$jogador = new Jogador;
		$jogador->nome = $nome;
		$jogador->apelido = $apelido;
		$jogador->save();
		
		if($jogador)
			return $jogador->id;
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
		$jogador = Jogador::find($id);

		$jogador->nome = Input::get('nome');
		$jogador->apelido = Input::get('apelido');
		$jogador->save();
		return $jogador->id;
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$jogador = Jogador::find($id);

		if(!$jogador)
			return false;
	
		$jogador->delete();
	}
}