<?php

class Sector extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

	public function client()
	{
		return $this->hasMany('Client');
	}

}