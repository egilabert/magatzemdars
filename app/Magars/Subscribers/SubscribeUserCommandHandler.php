<?php namespace Magars\Subscribers;

Use Laracasts\Commander\CommandHandler;
Use Laracasts\Commander\Events\DispatchableTrait;
Use Subscriber;

class SubscribeUserCommandHandler implements CommandHandler {

	use DispatchableTrait;

	public function handle($command)
	{
		//Afegir a la base de dades

		$subscriber = Subscriber::subscribe($command->getName(), $command->getEmail(), $command->getNotify());

		$this->dispatchEventsFor($subscriber);

		return $subscriber;

	}
}