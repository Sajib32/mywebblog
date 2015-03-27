<?php

class CategoriesPost extends Eloquent {
    protected $table = 'categories_posts';

    protected $fillable = ['categories_id', 'post_id'];

    public function categories()
    {
    	return $this->belongsTo('Categories');
    }

    public function posts()
    {
    	return $this->belongsTo('Post')
    }
}