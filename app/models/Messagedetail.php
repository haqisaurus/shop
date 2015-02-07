<?php

class Messagedetail extends \Eloquent {
	protected $fillable = [];
	protected $table = 'message_detail';

	public function message()
    {
        return $this->belongsTo('Message', 'message_id');
    }

    public function user()
    {
        return $this->belongsTo('User', 'user_id');
    }
}