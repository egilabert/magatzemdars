<?php namespace Magars\Users\Listeners;

use Laracasts\Commander\Events\EventListener;
use Magars\Users\Events\UserHasSubscribed;
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
		$email = $event->persone->email;

		
		$this->newslettersList->subscribeTo('MagarsSubscribers', $email);
	}
}