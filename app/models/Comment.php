<?php

class Comment extends Eloquent {
    protected $table = 'comments';

    protected $fillable = ['author_id', 'post_id', 'content', 'status'];

    public function post()
    {
    	return $this->belongsTo('Post');
    }
}