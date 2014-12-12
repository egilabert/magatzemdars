<?php namespace Magars\Forms;

use Laracasts\Validation\FormValidator;

class RegistrationForm extends FormValidator {

	protected $rules = [
		'username' => 'required|unique:users',
		'name' => 'required',
		'email' => 'required|email|unique:users',
		'password' => 'required|confirmed',
	];

}