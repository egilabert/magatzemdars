<?php

use Magars\Repos\Clients\ClientsRepoInterface;
use Magars\Forms\ClientForm;

class ClientsController extends \BaseController {

	protected $clientsRepo;
	protected $clientForm;

	public function __construct(ClientsRepoInterface $clientsRepo, ClientForm $clientForm)
	{

		$this->clientsRepo = $clientsRepo;
		$this->clientForm = $clientForm;
	}

	/**
	 * Display a listing of clients
	 *
	 * @return Response
	 */
	public function index()
	{
		// Fetch all parameters from the Request
		$sortBy = Request::get('sortBy');
		$direction = Request::get('direction');
		$search_key = Request::get('search_key');
		$search = Request::get('q');

		// Fetch all the clients
		$clients = $this->clientsRepo->allSortableAndSearcheable($search_key, $search, $sortBy, $direction);
		
		return View::make('clients.index', compact('clients','search'));
	
	}

	/**
	 * Show the form for creating a new client
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('clients.create');
	}

	/**
	 * Store a newly created client in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		$data = Input::all();

		$this->clientForm->validate($data);

		$client = $this->clientsRepo->createClient($data);

		Flash::success($client->name.' s\'ha afegit correctament a la base de dades');
		
		return Redirect::to('clients/'.$client->id);
	}

	/**
	 * Display the specified client.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{

		$client = $this->clientsRepo->findOrderedSubfields($id, 'created_at', 'DESC');
		return View::make('clients.show', compact('client'));
	}

	/**
	 * Show the form for editing the specified client.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$client = $this->clientsRepo->find($id);

		return View::make('clients.edit', compact('client'));
	}

	/**
	 * Update the specified client in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$client = $this->clientsRepo->findOrFail($id);

		$this->clientForm->validate($data = Input::all());
		
		$client->update($data);

		Flash::message($client->name.' s\'ha editat correctament a la base de dades');

		return Redirect::to('/clients/'.$id);
	}

	/**
	 * Remove the specified client from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		
		$this->clientsRepo->destroy($id);

		Flash::danger('El client s\'ha eliminat de la base de dades');

		return Redirect::route('clients.index');
	}

}
