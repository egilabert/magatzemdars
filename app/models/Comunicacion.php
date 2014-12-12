<?php

class Comunicacion extends \Eloquent {
	protected $fillable = ['tipus', 'hora_progamada', 'observacions', 'comunicable_id', 'comunicable_type', 'user_id'];

	//protected $with = ['Client'];

	// Add your validation rules here
	public static $rules = [
		'observacions' => 'required',
	];

	protected $morphClass = 'Comunicacion';

	public function comunicable()
	{
		return $this->morphTo();
	}

	public function user()
	{
		return $this->belongsTo('User');
	}

	public function getDates()
	{
		return ['created_at', 'updated_at', 'hora_progamada'];
	}
}