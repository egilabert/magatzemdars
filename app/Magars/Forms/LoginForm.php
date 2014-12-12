<?php namespace Magars\Forms;

use Laracasts\Validation\FormValidator;

class LoginForm extends FormValidator {

	protected $rules = [
		'email' => 'required|email',
		'password' => 'required',
	];

}