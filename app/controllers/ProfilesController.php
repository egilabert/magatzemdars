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

		$com_period = Request::get('com_filter');
		$con_period = Request::get('con_filter');

		if (!$com_period) {
			$start_period_com = Carbon::now()->startOfDay();
		    $end_period_com = Carbon::now()->endOfDay();
		}

		if (!$con_period) {
			$start_period_con = Carbon::now()->startOfDay();
		    $end_period_con = Carbon::now()->endOfDay();
		}

		switch ($com_period) {
		    case 0:
		        $start_period_com = Carbon::now()->startOfDay();
		        $end_period_com = Carbon::now()->endOfDay();
		        break;
		    case 1:
		        $start_period_com = Carbon::now()->startOfWeek();
		        $end_period_com = Carbon::now()->endOfWeek();
		        break;
		    case 2:
		        $start_period_com = Carbon::now()->startOfMonth();
		        $end_period_com = Carbon::now()->endOfMonth();
		        break;
		    case 3:
		        $start_period_com = Carbon::now()->startOfYear();
		        $end_period_com = Carbon::now()->endOfYear();
		        break;
		    case 4:
		        $start_period_com = Carbon::now()->startOfDay();
		        $end_period_com = Carbon::now()->startOfDay()->addDays(7);
		        break;
		    case 5:
		        $start_period_com = Carbon::now()->startOfDay();
		        $end_period_com = Carbon::now()->startOfDay()->addDays(30);
		        break;
		}

		switch ($con_period) {
		    case 0:
		        $start_period_con = Carbon::now()->startOfDay();
		        $end_period_con = Carbon::now()->endOfDay();
		        break;
		    case 1:
		        $start_period_con = Carbon::now()->startOfWeek();
		        $end_period_con = Carbon::now()->endOfWeek();
		        break;
		    case 2:
		        $start_period_con = Carbon::now()->startOfMonth();
		        $end_period_con = Carbon::now()->endOfMonth();
		        break;
		    case 3:
		        $start_period_con = Carbon::now()->startOfYear();
		        $end_period_con = Carbon::now()->endOfYear();
		        break;
		}

		try 
		{

			$user = User::with('profile')
						->with(array('comunicacions' => function ($query) use ($start_period_com, $end_period_com) {
								/*var_dump($start_period_com);
								var_dump($end_period_com);*/
								$query->whereBetween('hora_progamada', array(Carbon::now()->startOfDay(), $end_period_com));
								$query->orderBy('created_at', 'DESC');
								}))
						->with(array('consums' => function ($query) use ($start_period_con, $end_period_con) {
								/*var_dump($start_period_con);
								var_dump($end_period_con);*/
								$query->whereBetween('created_at', array($start_period_con, $end_period_con));
								$query->orderBy('created_at', 'DESC');
								}))
						->whereUsername($username)->firstOrFail();

			$text_bio = trim($user->profile->bio);
			$text_bio = nl2br($text_bio);
			$user->profile->bio = $text_bio;

		}
		catch (ModelNotFoundException $e)
		{
			return Redirect::home(); //->withFlashMessage('No hi ha ningú amb aquest perfil!')
		}

		//return $user;

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