<?php

use Magars\Subscribers\SubscribeUserCommand;

class SubscribersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /subscribers
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /subscribers/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('subscribers.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /subscribers
	 *
	 * @return Response
	 */
	public function store()
	{

		$this->execute(SubscribeUserCommand::class);

		Flash::success('Moltes gràcies, t\'has subscrit correctament');

		return Redirect::route('home');

	}

	/**
	 * Display the specified resource.
	 * GET /subscribers/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /subscribers/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /subscribers/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /subscribers/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}