<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'user';

	// table realtion 
	public function role()
    {
        return $this->belongsTo('Role', 'role_id');
    }

    public function address()
    {
        return $this->hasMany('Address', 'user_id');
    }

    public function product()
    {
        return $this->hasMany('Product', 'user_id');
    }

    public function messageDetail()
    {
        return $this->hasMany('Messagedetail', 'user_id');
    }

    public function productComment()
    {
        return $this->hasMany('Comment', 'user_id');
    }

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public function getRememberToken() {
		return $this->remember_token;
	}

	public function setRememberToken($value) {
		$this->remember_token = $value;
	}

	public function getRememberTokenName() {
		return 'remember_token';
	}


}
