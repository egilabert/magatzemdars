<?php

class Observacion extends \Eloquent {
	protected $fillable = ['observacions', 'observable_id', 'observable_type', 'user_id'];

	protected $morphClass = 'Observacion';

	// Add your validation rules here
	public static $rules = [
		/*'tipus' => 'required',*/
		'observacions' => 'required',
	];

	public function observable()
	{
		return $this->morphTo();
	}

	public function user()
	{
		return $this->belongsTo('User');
	}
}