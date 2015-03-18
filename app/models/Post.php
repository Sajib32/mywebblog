<?php

class Post extends Eloquent {

	public function comments()
	{
		return $this->hasMany('Comment');
	}

	public function myusers()
	{
		return $this->belongsTo('MyUser', 'myuser_id');
	}

	public function categorizations()
	{
		return $this->hasMany('Categorization');
	}

	public function caterogies()
	{
		return $this->hasManyThrough('Category', 'Categorization');
	}
}