<?php namespace Magars\Users;

use Validator;
use Magars\Users\Exceptions\ValidationFailedException;

class SubscribeUserValidator {

	public static $rules = [
		'email' => 'required|email|unique:users',
		'name' => 'required',
		'notify' => 'required'
	];

	public function validate($command)
	{

		$validation = Validator::make(array(

			'name' => $command->getName(),
			'email' => $command->getEmail(),
			'notify' => $command->getNotify()

		), static::$rules);

		
		if ($validation->fails()) 
		{

			throw new ValidationFailedException('Subscripció de l\'usuari errònea', $validation->messages());

		}

		return true;
			
	}
}