<?php namespace Magars\Notifications\Mailchimp;


use Magars\Notifications\NouEspectacle as NouEspectacleInterface;
use Mailchimp;


class NouEspectacle implements NouEspectacleInterface {

	const MAGARS_SUBSCRIBERS_ID = 'c65582a930';


	protected $mailchimp;



	public function __construct(Mailchimp $mailchimp) {

		$this->mailchimp = $mailchimp;

	}


	public function notify($title, $body) {


		$options = [
			'list_id' 		=> self::MAGARS_SUBSCRIBERS_ID,
			'subject'		=> 'Recorda les activitats de Magatzem d\'Ars',
			'from_name'		=> 'Magatzem d\'Ars',
			'from_email' 	=> 'enricgilabert@magatzemdars.com',
			'to_name'		=> 'Magars Subscribers'
		];

		$content = [
			'html'	=> $body,
			'text'	=> strip_tags($body)
		];

		//Create a new campaign

		$campaign = $this->mailchimp->campaigns->create('regular', $options, $content);

		$this->mailchimp->campaigns->send($campaign['id']);

	}
	
}