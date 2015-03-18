<?php

class MyUser extends Eloquent {

	public function posts()
	{
		return $this->hasMany('Post', 'myuser_id');
	}
}