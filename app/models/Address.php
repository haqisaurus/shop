<?php

class Address extends \Eloquent {
	protected $fillable = [];
	protected $table = 'user_address';

	// table realtion 
	public function user()
    {
        return $this->belongsTo('User', 'user_id');
    }
}