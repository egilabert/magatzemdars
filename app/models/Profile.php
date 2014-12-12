<?php

class Profile extends \Eloquent {

	protected $fillable = [
		'location',
		'bio',
		'rol',
		'foto',
		'link1'
	];

	public function user()
	{
		return $this->belongsTo('User');
	}
}