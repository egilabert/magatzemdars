<?php

use Carbon\Carbon;
use Magars\Repos\Clients\ClientsRepoInterface;
use Magars\Repos\Clients\Client;

class ConsumsController extends \BaseController {

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
	 * POST /consums
	 *
	 * @return Response
	 */
	public function store()
	{
		
		$validator = Validator::make($data = Input::all(), Consum::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$consum = Consum::create($data);
		$consum->consumible_id = $data['id'];
		$consum->consumible_type = 'Client'; //hardcoded this might be changed and implemented better
		$consum->user_id = Auth::user()->id;
		$consum->save();

		$client = $this->clientsRepo->findOrderedSubfields($data['id'], 'created_at', 'DESC');
		$client->last_contract_at = Carbon::now();
		$client->update();
		$clientid = $client->id;

		Flash::success('El consum "'.$consum->producte.'" de '. $consum->preu.'€ s\'ha afegit correctament a la base de dades');

		return Redirect::route('clients.show', compact('clientid'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /consums/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$consum = Consum::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Consum::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$consum->update($data);

		$client = $consum->consumible;
		$client = $this->clientsRepo->findOrderedSubfields($client->id, 'created_at', 'DESC');
		$client->update();

		$clientid = $client->id;

		Flash::message('El consum s\'ha editat correctament a la base de dades');

		return Redirect::route('clients.show', compact('clientid'));
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /consums/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$consum = Consum::findOrFail($id);

		$client = $consum->consumible;

		$clientid = $client->id;

		$consum->destroy($id);

		Flash::danger('El consum s\'ha eliminat correctament a la base de dades');

		return Redirect::route('clients.show', compact('clientid'));
	}

}