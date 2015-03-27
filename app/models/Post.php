<?php

class Post extends Eloquent {
    protected $table = 'posts';

    protected $fillable = ['author_id', 'title', 'content', 'status', 'comments_count'];

    public function author()
    {
    	return $this->belongsTo('Author', 'author_id')
    }

    public function comments()
    {
    	return $this->hasMany('Comment');
    }

    public function categories_posts()
    {
    	return $this->hasMany('CategoriesPost');
    }

    public function categories()
    {
    	return $this->hasManyThrough('Categories', 'categoriesPost');
    }
}