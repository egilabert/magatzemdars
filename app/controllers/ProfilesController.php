<?php

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Magars\Forms\ProfileForm;
use Carbon\Carbon;


class ProfilesController extends \BaseController {

	private $profileForm;

	function __construct(ProfileForm $profileForm)
	{

		$this->profileForm = $profileForm;

		$this->beforeFilter('currentUser', ['only' => ['edit', 'update']]);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $username
	 * @return Response
	 */
	public function show($username)
	{

		try 
		{

			$user = User::with('profile')
						->with(array('comunicacions' => function ($query) {
								$query->whereBetween('hora_progamada', array(Carbon::now()->startOfDay(), Carbon::now()->endOfDay()));
								$query->orderBy('created_at', 'DESC');
								}))
						->with(array('consums' => function ($query) {
								$query->whereBetween('created_at', array(Carbon::now()->startOfDay(), Carbon::now()->endOfDay()));
								$query->orderBy('created_at', 'DESC');
								}))
						->whereUsername($username)->firstOrFail();

			$prova = trim($user->profile->bio);
			$prova = nl2br($prova);
			$user->profile->bio = $prova;

		}
		catch (ModelNotFoundException $e)
		{
			return Redirect::home(); //->withFlashMessage('No hi ha ningú amb aquest perfil!')
		}

		

		return View::make('profiles.show')->withUser($user);
	}

	
	/**
	 * Show the form for editing the specified sale.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($username)
	{
		
		$user = User::with('profile')->whereUsername($username)->firstOrFail();

		return View::make('profiles.edit')->withUser($user);
	}


	public function update($username)
	{

		$user = User::with('profile')->whereUsername($username)->firstOrFail();

		$input = Input::only('location', 'bio', 'rol', 'link1');

		$this->profileForm->validate($input);

		$user->profile->fill($input)->save();		

		return Redirect::to("/".Auth::user()->username);

	}

}