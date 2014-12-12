<?php namespace Magars\Newsletters;

use Illuminate\Support\ServiceProvider;

class NewslettersListServiceProvider extends ServiceProvider {

	public function register()
	{
		$this->app->bind(
			'Magars\Newsletters\NewslettersList',
			'Magars\Newsletters\Mailchimp\NewslettersList'
		);
	}
}