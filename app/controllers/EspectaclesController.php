<?php

class EspectaclesController extends \BaseController {

	/**
	 * Display a listing of espectacles
	 *
	 * @return Response
	 */
	public function index()
	{
		$espectacles = Espectacle::all();
		
		return View::make('espectacles.index', compact('espectacles'));
	}

	/**
	 * Show the form for creating a new espectacle
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('espectacles.create');
	}

	/**
	 * Store a newly created espectacle in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Espectacle::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Espectacle::create($data);

		return Redirect::route('espectacles.index');
	}

	/**
	 * Display the specified espectacle.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$espectacle = Espectacle::with('comments')->findOrFail($id);
		//dd($espectacle->toArray());
		return View::make('espectacles.show', compact('espectacle'));
	}

	/**
	 * Show the form for editing the specified espectacle.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$espectacle = Espectacle::find($id);

		return View::make('espectacles.edit', compact('espectacle'));
	}

	/**
	 * Update the specified espectacle in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$espectacle = Espectacle::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Espectacle::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$espectacle->update($data);

		return Redirect::route('espectacles.index');
	}

	/**
	 * Remove the specified espectacle from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Espectacle::destroy($id);

		return Redirect::route('espectacles.index');
	}

}
