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

}