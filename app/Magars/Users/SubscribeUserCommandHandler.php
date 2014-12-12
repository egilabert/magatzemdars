<?php namespace Magars\Users;

Use Laracasts\Commander\CommandHandler;
Use Laracasts\Commander\Events\DispatchableTrait;
Use Persone;

class SubscribeUserCommandHandler implements CommandHandler {

	use DispatchableTrait;

	public function handle($command)
	{
		//Afegir a la base de dades
		$persone = Persone::subscribe($command->getName(), $command->getEmail(), $command->getNotify());

		$this->dispatchEventsFor($persone);

		return $persone;
	}
}