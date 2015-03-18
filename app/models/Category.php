<?php

class Category extends Eloquent {

	public function categorizations()
	{
		return $this->hasMany('Categorization');
	}

	public function posts()
	{
		return $this->hasManyThrough('Post', 'Categorization');
	}
}