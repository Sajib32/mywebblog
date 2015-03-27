<?php

class Categories extends Eloquent {
    protected $table = 'categories';

    protected $fillable = ['name', 'description'];

    public function categories_posts()
    {
    	return $this->hasMany('CategoriesPost');
    }

    public function posts()
    {
    	return $this->hasManyThrough('Post', 'CategoriesPost');
    }
}