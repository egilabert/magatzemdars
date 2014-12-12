<?php

interface ClientInterface 
{

	//public function scopeSearch($query, $search);

	public function comunicacions();

	public function consums();

	public function incidencies();

	public function observacions();

	public function sector();
	
	public function getName();

	public function getContactName();

	public function getFamilyName();

	public function getPhone1();

	public function getPhone2();

	public function getAddress();

	public function getEmail1();

	public function getEmail2();

	public function getLocation();

	public function getCountry();

	public function getRef();

	public function getSector();

	public function getLastContact();

	public function getLastContract();

	public function getPicture();

	public function getTipus();

	public function getId();

}