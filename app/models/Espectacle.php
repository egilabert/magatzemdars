<?php

class Espectacle extends \Eloquent {

	protected $table = 'espectacles';

	protected $morphClass = 'Espectacle';

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['title','autor','adaptacio','durada','obra', 'creacio','escenagrafia','tipus','video','pressupost','image','estat','dossier'];

	public function comments(){
		return $this-> morphMany('Comment', 'commentable');
	}

}