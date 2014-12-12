<?php namespace Magars\Repos\Clients;

use Client;
use Magars\Repos\AbstractDbRepositories;

class DbClientsRepo extends AbstractDbRepositories implements ClientsRepoInterface {

	/**
   * @var Model
   */
  protected $model;
 
  /**
   * Constructor
   */
  public function __construct(Client $model)
  {
    $this->model = $model;
  }


  public function isSortable(array $params)
  {
   	return ($params['sortBy'] and $params['direction']);
  }

  public function createClient($data, $picture = 'utils/client.jpg')
  {

  	$client = $this->model->create($data);
	$client->setPicture($picture);
	$client->save();

	return $client;
  }

  public function findOrderedSubfields($id, $field = 'created_at', $opt = 'DESC')
  {

  	return $client = $this->model
  						->with(array('comunicacions' => function ($query) use ($field, $opt) { 
								$query->with('user');
								$query->orderBy($field, $opt);
								}))
						->with(array('consums' => function ($query) use ($field, $opt) {
								$query->with('user');
								$query->orderBy($field, $opt);
								}))
						->with(array('incidencies' => function ($query) use ($field, $opt) {
								$query->with('user');
								$query->orderBy($field, $opt);
								}))
						->with(array('observacions' => function ($query) use ($field, $opt) {
								$query->with('user');
								$query->orderBy($field, $opt);
								}))
						->with('type')
						->with('sector')
						->findOrFail($id);

  }



  public function allSortableAndSearcheable($search_key = 0, $search = null, $sortBy = null, $direction = null)
  {
  	if ($search)
        {
        	if ($search_key != 0) {

        			if ($sortBy) 
			        	{

			            return Client::where(function($query) use ($search)
			            					{
			            					$query->where('name', 'LIKE', "%$search%");
			            					$query->orWhere('contact_name', 'LIKE', "%$search%");
											$query->orWhere('contact_familyname', 'LIKE', "%$search%");
											$query->orWhere('phone1', 'LIKE', "%$search%");
											$query->orWhere('phone2', 'LIKE', "%$search%");
											$query->orWhere('address', 'LIKE', "%$search%");
											$query->orWhere('cp', 'LIKE', "%$search%");
											$query->orWhere('email1', 'LIKE', "%$search%");
											$query->orWhere('email2', 'LIKE', "%$search%");
											$query->orWhere('location', 'LIKE', "%$search%");
											$query->orWhere('country', 'LIKE', "%$search%");
											$query->orWhere('ref', 'LIKE', "%$search%");
											$query->orWhere('last_contact_at', 'LIKE', "%$search%");
											$query->orWhere('last_contract_at', 'LIKE', "%$search%");
											})
											->where('type_id', 'LIKE', "%$search_key%")
											->with('type')
				            				->orderBy($sortBy, $direction)->paginate(getenv('PAGINATION'));
			        	}
			        	else
			        	{
			        		return Client::where(function($query) use ($search)
											{
			            					$query->where('name', 'LIKE', "%$search%");
			            					$query->orWhere('contact_name', 'LIKE', "%$search%");
											$query->orWhere('contact_familyname', 'LIKE', "%$search%");
											$query->orWhere('phone1', 'LIKE', "%$search%");
											$query->orWhere('phone2', 'LIKE', "%$search%");
											$query->orWhere('address', 'LIKE', "%$search%");
											$query->orWhere('cp', 'LIKE', "%$search%");
											$query->orWhere('email1', 'LIKE', "%$search%");
											$query->orWhere('email2', 'LIKE', "%$search%");
											$query->orWhere('location', 'LIKE', "%$search%");
											$query->orWhere('country', 'LIKE', "%$search%");
											$query->orWhere('ref', 'LIKE', "%$search%");
											$query->orWhere('last_contact_at', 'LIKE', "%$search%");
											$query->orWhere('last_contract_at', 'LIKE', "%$search%");
											})
											->where('type_id', 'LIKE', "%$search_key%")
											->with('type')
				            				->orderBy('name', 'ASC')->paginate(getenv('PAGINATION'));	
			        	}

        		}

        	else

        		{
        			if ($sortBy) 
			        	{

			            return Client::with('type')
			            				->where('name', 'LIKE', "%$search%")
			            				->orWhere('contact_name', 'LIKE', "%$search%")
										->orWhere('contact_familyname', 'LIKE', "%$search%")
										->orWhere('phone1', 'LIKE', "%$search%")
										->orWhere('phone2', 'LIKE', "%$search%")
										->orWhere('address', 'LIKE', "%$search%")
										->orWhere('cp', 'LIKE', "%$search%")
										->orWhere('email1', 'LIKE', "%$search%")
										->orWhere('email2', 'LIKE', "%$search%")
										->orWhere('location', 'LIKE', "%$search%")
										->orWhere('country', 'LIKE', "%$search%")
										->orWhere('ref', 'LIKE', "%$search%")
										->orWhere('last_contact_at', 'LIKE', "%$search%")
										->orWhere('last_contract_at', 'LIKE', "%$search%")->orderBy($sortBy, $direction)->paginate(getenv('PAGINATION'));
			        	}
			        	else
			        	{
			        		return Client::with('type')
			        					->where('name', 'LIKE', "%$search%")
			            				->orWhere('contact_name', 'LIKE', "%$search%")
										->orWhere('contact_familyname', 'LIKE', "%$search%")
										->orWhere('phone1', 'LIKE', "%$search%")
										->orWhere('phone2', 'LIKE', "%$search%")
										->orWhere('address', 'LIKE', "%$search%")
										->orWhere('cp', 'LIKE', "%$search%")
										->orWhere('email1', 'LIKE', "%$search%")
										->orWhere('email2', 'LIKE', "%$search%")
										->orWhere('location', 'LIKE', "%$search%")
										->orWhere('country', 'LIKE', "%$search%")
										->orWhere('ref', 'LIKE', "%$search%")
										->orWhere('last_contact_at', 'LIKE', "%$search%")
										->orWhere('last_contract_at', 'LIKE', "%$search%")->orderBy('name', 'ASC')->paginate(getenv('PAGINATION'));	
			        	}
        			
        		}
        	
        }
        else
        {
        	if ($sortBy) 
        	{
        		return Client::with('type')->orderBy($sortBy, $direction)->paginate(getenv('PAGINATION'));
        	}
        	else
        	{
        		return Client::with('type')->orderBy('name', 'ASC')->paginate(getenv('PAGINATION'));
        	}
            
        }
  }

}