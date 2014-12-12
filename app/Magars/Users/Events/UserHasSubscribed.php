<?php namespace Magars\Users\Events;

use Persone;

class UserHasSubscribed {


	public $persone;

	public function __construct(Persone $persone)
	{

		$this->persone = $persone;

	}

}