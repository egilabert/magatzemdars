<?php

class Incidencie extends \Eloquent {

	protected $fillable = ['tipus', 'observacions', 'incidible_id', 'incidible_type', 'user_id'];

	protected $morphClass = 'Incidencie';

	// Add your validation rules here
	public static $rules = [
		/*'tipus' => 'required',*/
		'observacions' => 'required',
	];

	public function incidible()
	{
		return $this->morphTo();
	}

	public function user()
	{
		return $this->belongsTo('User');
	}
}