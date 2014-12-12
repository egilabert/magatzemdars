<?php namespace Magars\FlashMessages;

use Illuminate\Support\ServiceProvider;


class FlashMessagesServiceProvider extends ServiceProvider {

	public function register()
	{
		$this->app->bindShared('flash', function()
		{
			return $this->app->make('Magars\FlashMessages\FlashMessages');
			
		});
	}
}