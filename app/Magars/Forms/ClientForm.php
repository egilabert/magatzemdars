<?php namespace Magars\Forms;

use Laracasts\Validation\FormValidator;

class ClientForm extends FormValidator {

	/**
	 * Validation rules for the client Form
	 * @var array
	*/
	public $rules = [
		'name' => 'required|alpha_spaces',
		'location' => 'required|alpha_spaces',
		'type_id' => 'required',
		'contact_name' => 'required|alpha_spaces',
		'contact_familyname' => 'required|alpha_spaces',
		'phone1' => 'required|numeric',
		'phone1' => 'numeric',
		'email1' => 'required|email',
		'email2' => 'email',
		'sector_id' => 'required'

	];

}