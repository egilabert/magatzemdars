<?php namespace Magars\FlashMessages;

use Illuminate\Session\Store;

class FlashMessages {

	private $session;

	function __construct(Store $session)
	{
		$this->session = $session;
	}

	public function success($message)
	{
		$this->message($message, 'success');
	}

	public function danger($message)
	{
		$this->message($message, 'danger');
	}

	public function overlay($message)
	{
		$this->message($message, 'danger');
		$this->session->flash('flash_notification.overlay', true);
	}

	public function message($message, $level = 'info')
	{
		$this->session->flash('flash_notification.message', $message);
		$this->session->flash('flash_notification.level', $level);
	}

	




	

	

}