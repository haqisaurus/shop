<?php

class Message extends \Eloquent {
	protected $fillable = [];
	protected $table = 'message';

	public function messageDetailASC()
    {
        return $this->hasMany('Messagedetail', 'message_id')->orderBy('id', 'ASC');
    }

    public function messageDetailDESC()
    {
        return $this->hasMany('Messagedetail', 'message_id')->orderBy('id', 'DESC');
    }
}