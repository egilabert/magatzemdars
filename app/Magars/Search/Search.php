<?php namespace Magars\Search;

use Client;


class Search {

	public function clients($search)
	{

		return Client::search($search)->get();

	}

}