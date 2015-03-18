<?php

class Categorization extends Eloquent {

	public function post()
	{
		return $this->belongsTo('Post');
	}

	public function category()
	{
		return $this->belongsTo('Category');
	}
}