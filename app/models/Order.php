<?php

class Order extends \Eloquent {
	protected $fillable = [];
	protected $table = "order";

	public function product()
    {
        return $this->belongsTo('Product', 'product_id');
    }

    public function detail()
    {
        return $this->hasMany('Orderdetail', 'order_id');
    }
}