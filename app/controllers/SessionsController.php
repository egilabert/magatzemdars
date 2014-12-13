<?php

use Magars\Forms\LoginForm;

class SessionsController extends \BaseController {

	protected $loginForm;

	function __construct(LoginForm $loginForm)
	{

		$this->loginForm = $loginForm;
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /sessions/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('sessions.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /sessions
	 *
	 * @return Response
	 */
	public function store()
	{

		$this->loginForm->validate($data = Input::only('email', 'password'));

		if (Auth::attempt($data))
		{
			return Redirect::intended("/"); //url.intended
		}

		Flash::danger('Les credencials introduïdes no són vàlides');

		return Redirect::back()->withInput();

	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /sessions/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id = null)
	{

		Auth::logout();

		return Redirect::to('/');
	}

}