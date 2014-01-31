<?php

// app/controllers/EtapasController.php

class EtapasController extends BaseController
{
	protected $layout = 'layouts.master';

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return Etapa::with('ranking')->get()->toJson();
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$etapa = Etapa::find($id);

		if(!$etapa)
			return false;
	
		$etapa->delete();
	}
}