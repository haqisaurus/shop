<?php

class Orderdetail extends \Eloquent {
	protected $fillable = [];
	protected $table = "order_detail";
	
	public function order()
    {
        return $this->belongsTo('Order', 'order_id');
    }
}