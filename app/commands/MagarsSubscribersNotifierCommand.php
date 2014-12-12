<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Magars\Notifications\NouEspectacle;

class MagarsSubscribersNotifierCommand extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'magars:notify';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Notify all members subscribers by email';


	private $nouEspectacleNotifier;
	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct(NouEspectacle $nouEspectacleNotifier)
	{
		parent::__construct();
		$this->nouEspectacleNotifier = $nouEspectacleNotifier;
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
	{
		//Aquí em generat un array per anar rapid
		$newsletter = $this->setNewsletter();

		/*
		El que es podría fer es:

		$title = 'El meu titol';
		$body = View::make('email.custom', $data)->render();

		i passar les dos variables com a arguments
		*/
		$this->nouEspectacleNotifier->notify($newsletter['title'], $newsletter['body']);
	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	/*protected function getArguments()
	{
		return array(
			array('example', InputArgument::REQUIRED, 'An example argument.'),
		);
	}*/

	private function setNewsletter() 
	{
		return [
			'title' => 'Actualitat al món de Magatzem d\'Ars',
			'body'	=> 'Mo body of the email' 
		];
	}

}
