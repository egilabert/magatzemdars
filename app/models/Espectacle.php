<?php

class Espectacle extends \Eloquent {

	protected $table = 'espectacles';

	protected $morphClass = 'Espectacle';

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['title','obra', 'creada','pressupost','image'];

	public function comments(){
		return $this-> morphMany('Comment', 'commentable');
	}

}