<?php

class Consum extends \Eloquent {

	protected $fillable = ['producte', 'preu', 'observacions', 'consumible_id', 'consumible_type', 'user_id'];

	protected $morphClass = 'Consum';	

	// Add your validation rules here
	public static $rules = [
		/*'tipus' => 'required',*/
		'preu' => 'required|numeric',
		'observacions' => 'required',
	];

	public function consumible()
	{
		return $this->morphTo();
	}

	public function user()
	{
		return $this->belongsTo('User');
	}
}