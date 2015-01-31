<?php

class Media extends \Eloquent {
	protected $fillable = [];
	protected $table = 'product_media';

	public function product()
    {
        return $this->belongsTo('Product', 'product_id');
    }
}