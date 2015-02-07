<?php

class Product extends \Eloquent {
	protected $fillable = [];
	protected $table = 'product';

	public function supplier()
    {
        return $this->belongsTo('Supplier', 'supplier_id');
    }

    public function category()
    {
        return $this->belongsTo('Category', 'category_id');
    }

    public function user()
    {
        return $this->belongsTo('User', 'user_id');
    }

    public function media()
    {
        return $this->hasMany('Media', 'product_id');
    }

    public function comment()
    {
        return $this->hasMany('Comment', 'product_id');
    }

    public function delete()
    {
    	$result = File::deleteDirectory('uploads/product-media/' . $this->id);

    	if($result) {
	        // delete all related
	        $this->media()->delete();

    	}
        // delete the this data
        return parent::delete();
    }
}