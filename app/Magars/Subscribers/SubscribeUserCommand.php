<?php namespace Magars\Subscribers;

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

	public function getNotify()
	{
		return $this->notify;
	}
}