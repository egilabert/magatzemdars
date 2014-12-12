<?php namespace Magars\Repos\Clients;

use Illuminate\Support\ServiceProvider;

class ClientsRepoServiceProvider extends ServiceProvider {

	public function register()
	{
		$this->app->bind(
			'Magars\Repos\Clients\ClientsRepoInterface',
			'Magars\Repos\Clients\DbClientsRepo'
		);
	}
}