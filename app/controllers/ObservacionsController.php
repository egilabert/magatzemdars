<?php

use Magars\Repos\Clients\ClientsRepoInterface;
use Magars\Repos\Clients\Client;

class ObservacionsController extends \BaseController {

	protected $clientsRepo;

	public function __construct(ClientsRepoInterface $clientsRepo)
	{

		$this->clientsRepo = $clientsRepo;
	}

	/**
	 * Display a listing of the resource.
	 * GET /consums
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	
	/**
	 * Store a newly created resource in storage.
	 * POST /observacions
	 *
	 * @return Response
	 */
	public function store()
	{

		$validator = Validator::make($data = Input::all(), Observacion::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$observacio = Observacion::create($data);
		$observacio->observable_id = $data['id'];
		$observacio->observable_type = 'Client'; //hardcoded this might be changed and implemented better
		$observacio->user_id = Auth::user()->id;
		$observacio->save();

		$client = $this->clientsRepo->findOrderedSubfields($data['id'], 'created_at', 'DESC');
		$client->update();
		$clientid = $client->id;

		Flash::success('La observació s\'ha afegit correctament a la base de dades');

		return Redirect::route('clients.show', compact('clientid'));
	}

	
	/**
	 * Update the specified resource in storage.
	 * PUT /observacions/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$observacio = Observacion::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Observacion::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$observacio->update($data);

		$client = $observacio->observable;
		$client = $this->clientsRepo->findOrderedSubfields($client->id, 'created_at', 'DESC');
		$client->update();
		$clientid = $client->id;

		Flash::message('La observació s\'ha editat correctament a la base de dades');

		return Redirect::route('clients.show', compact('clientid'));
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /observacions/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$observacio = Observacion::findOrFail($id);

		$client = $observacio->observable;
		$clientid = $client->id;

		$observacio->destroy($id);

		Flash::danger('La observació s\'ha eliminat correctament a la base de dades');

		return Redirect::route('clients.show', compact('clientid'));	
	}

}