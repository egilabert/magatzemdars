<?php namespace Magars\Search;

use Illuminate\Support\ServiceProvider;

class SearchServiceprovider extends ServiceProvider {

	public function register()
	{

		$this->app->bind('search', 'Magars\Search\Search');
	}
}