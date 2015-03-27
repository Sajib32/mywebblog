<?php

class Author extends Eloquent {
    protected $table = 'authors';

    // mass assignment
    protected $fillable = ['username', 'display_name', 'email', 'password'];

    public function posts()
    {
    	return $this->hasMany('Post');
    }
}