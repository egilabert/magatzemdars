<?php

class Cite extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'details' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['data_programada', 'details', 'user_id'];

	public function user()
	{
		return $this->belongsTo('User');
	}

	public function getDates()
	{
		return ['created_at', 'updated_at', 'data_programada'];
	}

	public function setDateAttribute($value)
	{
    	$this->parse($value);
	}

}