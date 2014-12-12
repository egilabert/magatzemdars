<?php

class Tipu extends \Eloquent {
	protected $fillable = [];

	protected $morphClass = 'Tipu';

	public function client()
	{
		return $this->hasMany('Client');
	}
}