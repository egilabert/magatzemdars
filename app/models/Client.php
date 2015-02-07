<?php 

use Illuminate\Database\Eloquent\Collection;

class Client extends \Eloquent implements ClientInterface {

	protected $morphClass = 'Client';

	// Don't forget to fill this array
	protected $fillable = ['created_by', 'name', 'contact_name', 'contact_familyname', 'phone1', 'phone2', 'address', 'cp', 'email1', 'email2', 'location', 'country', 'ref', 'picture', 'sector_id', 'type_id', 'last_contact_at', 'last_contract_at'];

	//Relations with the other attached models for every fitxa...
	public function type()
	{
		return $this->belongsTo('Tipu');
	}

	public function comunicacions()
	{
		return $this->morphMany('Comunicacion', 'comunicable');
	}

	public function consums()
	{
		return $this->morphMany('Consum', 'consumible');
	}

	public function incidencies()
	{
		return $this->morphMany('Incidencie', 'incidible');
	}

	public function observacions()
	{
		return $this->morphMany('Observacion', 'observable');
	}

	public function sector()
	{
		return $this->belongsTo('Sector');
	}

	public function getDates()
	{
		return ['created_at', 'updated_at', 'last_contact_at', 'last_contract_at'];
	}
	
	public function getName()
	{
		return $this->name;
	}

	public function getContactName()
	{
		return $this->contact_name;
	}

	public function getFamilyName()
	{
		return $this->contact_familyname;
	}

	public function getAddress()
	{
		return $this->address;
	}

	public function getPhone1()
	{
		return $this->phone1;
	}

	public function getPhone2()
	{
		return $this->phone2;
	}

	public function getEmail1()
	{
		return $this->email1;
	}

	public function getEmail2()
	{
		return $this->email2;
	}

	public function getLocation()
	{
		return $this->location;
	}

	public function getCountry()
	{
		return $this->country;
	}

	public function getRef()
	{
		return $this->ref;
	}

	public function getSector()
	{
		return $this->sector_id;
	}

	public function getLastContact()
	{
		return $this->last_contact_at;
	}

	public function getLastContract()
	{
		return $this->last_contract_at;
	}

	public function getPicture()
	{
		return $this->picture;
	}

	public function getTipus()
	{
		return $this->type_id;
	}

	public function getId()
	{
		return $this->id;
	}

	public function setPicture($picture)
	{
		
		$this->picture = $picture;
	}

	public function setCreator($id)
	{
		
		$this->created_by = $id;
	}

}