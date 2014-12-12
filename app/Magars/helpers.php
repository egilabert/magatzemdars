<?php 


function errors_for($attribute, $errors)
{

	return $errors->first($attribute, '<span class="error_basic">:message</span>');

}

function link_to_profile($text = 'Profile')
{

	return link_to_route('dashboard', $text, Auth::user()->username);

}

function sort_clients_by($column, $body)
{
	$direction = (Request::get('direction') == 'asc') ? 'desc' : 'asc';
	$search_key = Request::get('search_key');
	if ($search = Request::get('q')) {
		return link_to_route('clients', $body, ['search_key' => $search_key, 'q' => $search, 'sortBy' => $column, 'direction' => $direction]);
	}
	else 
	{
		return link_to_route('clients', $body, ['sortBy' => $column, 'direction' => $direction]);
	}
	
}

function money($val,$symbol='€')
{
	return $val. ' '.$symbol;
}



