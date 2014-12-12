<?php namespace Magars\Users;

use Hash;

class SubscribeUserCommand {

	protected $name;

	protected $email;

	protected $notify;

	public function __construct($name, $email, $notify = 1)
	{
		$this->name = $name;
		$this->email = $email;
		$this->notify = $notify;
	}

	public function getName()
	{
		return $this->name;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function getPassword()
	{
		return $this->password;
	}

	public function getNotify()
	{
		return $this->notify;
	}
}