<?php namespace Magars\Subscribers\Listeners;

use Laracasts\Commander\Events\EventListener;
use Magars\Subscribers\Events\UserHasSubscribed;
use Magars\Newsletters\NewslettersList;


class EmailNotifier extends EventListener {

	private $newslettersList;

	public function __construct(NewslettersList $newslettersList) 
	{

		$this->newslettersList = $newslettersList;

	}


	public function whenUserHasSubscribed(UserHasSubscribed $event) 
	{

		//Enviar a la subscripció
		$email = $event->subscriber->email;

		$this->newslettersList->subscribeTo('MagarsSubscribers', $email);

	}
}