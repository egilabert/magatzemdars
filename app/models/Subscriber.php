<?php

use Magars\Subscribers\Events\UserHasSubscribed;
use Laracasts\Commander\Events\EventGenerator;

class Subscriber extends \Eloquent {

	use EventGenerator;

	protected $fillable = ['email', 'name', 'notify'];

	protected $table = 'subscriptors';

	public static function subscribe($name, $email, $notify) 
	{

		$instance = static::create(compact('name', 'email', 'notify'));

		$instance->raise(new UserHasSubscribed($instance));

		return $instance;

	}
}