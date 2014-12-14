<?php

use Carbon\Carbon;
use Magars\Repos\Clients\ClientsRepoInterface;
use Magars\Repos\Clients\Client;

class ComunicacionsController extends \BaseController {

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
	 * POST /comunicacions
	 *
	 * @return Response
	 */
	public function store()
	{

		$validator = Validator::make($data = Input::all(), Comunicacion::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$comunicacion = new Comunicacion;
		$comunicacion->tipus = $data['tipus'];
		$comunicacion->hora_progamada = Carbon::parse($data['hora_progamada']);
		$comunicacion->observacions = $data['observacions'];
		$comunicacion->comunicable_id = $data['id'];
		$comunicacion->comunicable_type = 'Client'; //hardcoded this might be changed and implemented better
		$comunicacion->user_id = Auth::user()->id;

		$comunicacion->save();

		$client = $this->clientsRepo->findOrderedSubfields($data['id'], 'created_at', 'DESC');
		$client->last_contact_at = Carbon::now();
		$client->update();
		$clientid = $client->id;

		Flash::success('La comunicació '.$comunicacion->tipus.' s\'ha afegit correctament a la base de dades');

		return Redirect::route('clients.show', compact('clientid'));
		//return View::make('clients.show', compact('client'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /comunicacions/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{

		$comunicacion = Comunicacion::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Comunicacion::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		if (Carbon::parse($data['hora_progamada']) == Carbon::now()) {

			//$comunicacion->hora_progamada = null;

		} else {

			$comunicacion->hora_progamada = Carbon::parse($data['hora_progamada']);
		
		}

		$comunicacion->tipus = $data['tipus'];
		$comunicacion->observacions = $data['observacions'];

		$comunicacion->update();

		$client = $comunicacion->comunicable;
		$client = $this->clientsRepo->findOrderedSubfields($client->id, 'created_at', 'DESC');
		$client->update();
		$clientid = $client->id;

		Flash::message('La comunicació s\'ha editat correctament a la base de dades');

		return Redirect::route('clients.show', compact('clientid'));
		//return View::make('clients.show', compact('client'));

	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /comunicacions/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$comunicacion = Comunicacion::findOrFail($id);

		$client = $comunicacion->comunicable;

		$comunicacion->destroy($id);

		$clientid = $client->id;

		Flash::danger('La comunicació s\'ha eliminat correctament a la base de dades');

		return Redirect::route('clients.show', compact('clientid'));
		//return View::make('clients.show', compact('client'));
	}

}