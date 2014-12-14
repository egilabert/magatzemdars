<?php

use Magars\Forms\RegistrationForm;

class UsersController extends \BaseController {


	private $registrationForm;

	function __construct(RegistrationForm $registrationForm)
	{

		$this->registrationForm = $registrationForm;
	}

	/**
	 * Display a listing of the resource.
	 * GET /users
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::with('profile')
					->with('roles')
					->where('username', '<>', 'egilabert')
					->OrderBy('name', 'ASC')
					->get();

		//return $users;

		return View::make('users.index', ['users' => $users]);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /users/create
	 *
	 * @return Response
	 */
	public function create()
	{

		return View::make('users.create');

	}

	/**
	 * Store a newly created resource in storage.
	 * POST /users
	 *
	 * @return Response
	 */
	public function store()
	{

		$data = Input::only('username', 'name', 'email', 'password', 'password_confirmation');

		$role = Input::only('role');

		$this->registrationForm->validate($data);

		$user = User::create($data);

		$profile = new Profile;

		$profile->foto = 'utils/profile.gif';

		$user->profile()->save($profile);

		$user->roles()->attach($role);

		Auth::login($user);

		return Redirect::route('clients');

	}

	/**
	 * Display the specified resource.
	 * GET /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$user = User::find($id)->first();

		return View::make('users.show', ['user' => $user]);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /users/{id}/edit
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
	 * PUT /users/{id}
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
	 * DELETE /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}