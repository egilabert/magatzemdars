<?php namespace Magars\Subscribers\Events;

use Subscriber;

class UserHasSubscribed {


	public $subscriber;

	public function __construct(Subscriber $subscriber)
	{

		$this->subscriber = $subscriber;

	}

}