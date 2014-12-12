<?php

class Comment extends \Eloquent {

	protected $fillable = ['espectacle_id','name','info','comment'];

	protected $morphClass = 'Comment';

	public function espectacle()
	{
		return $this->morphTo('Espectacle');
	}
}