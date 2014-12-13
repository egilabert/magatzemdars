<?php

use Magars\Repos\Clients\ClientsRepoInterface;
use Magars\Repos\Clients\Client;

class IncidenciesController extends \BaseController {

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
	 * POST /incidencies
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Incidencie::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$incidencia = Incidencie::create($data);
		$incidencia->incidible_id = $data['id'];
		$incidencia->incidible_type = 'Client'; //hardcoded this might be changed and implemented better
		$incidencia->user_id = Auth::user()->id;
		$incidencia->save();
		

		$client = $this->clientsRepo->findOrderedSubfields($data['id'], 'created_at', 'DESC');
		$client->update();
		$clientid = $client->id;

		Flash::success('La incidència de tipus '.$incidencia->tipus.' s\'ha afegit correctament a la base de dades');

		return Redirect::route('clients.show', compact('clientid'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /incidencies/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$incidencie = Incidencie::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Incidencie::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$incidencie->update($data);

		$client = $incidencie->incidible;
		$client = $this->clientsRepo->findOrderedSubfields($client->id, 'created_at', 'DESC');
		$client->update();
		$clientid = $client->id;

		Flash::message('La incidència s\'ha editat correctament a la base de dades');

		return Redirect::route('clients.show', compact('clientid'));
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /incidencies/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$incidencie = Incidencie::findOrFail($id);

		$client = $incidencie->incidible;

		$incidencie->destroy($id);
		$clientid = $client->id;

		Flash::danger('La incidència s\'ha eliminat correctament a la base de dades');

		return Redirect::route('clients.show', compact('clientid'));
	}

}