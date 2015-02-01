<?php

class Role extends \Eloquent {
	
	protected $table = 'user_role';

    public function user()
    {
        return $this->hasMany('User', 'role_id');
    }
}