<?php

class Comment extends \Eloquent {
	protected $fillable = [];
	protected $table = 'product_comment';

	// table realtion 
	public function user()
    {
        return $this->belongsTo('User', 'user_id');
    }

    public function product()
    {
        return $this->belongsTo('Product', 'product_id');
    }
}