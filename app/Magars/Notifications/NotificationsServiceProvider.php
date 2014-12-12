<?php namespace Magars\Notifications;

use Illuminate\Support\ServiceProvider;


class NotificationsServiceProvider extends ServiceProvider {

	public function register()
	{
		$this->app->bind(
			'Magars\Notifications\NouEspectacle',
			'Magars\Notifications\Mailchimp\NouEspectacle'
		);
	}
}

