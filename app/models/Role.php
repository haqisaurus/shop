<?php

class Role extends \Eloquent {
	
	protected $table = 'user_role';

    public function users()
    {
        return $this->hasMany('User', 'user_role_id');
    }
}