<?php

class Supplier extends \Eloquent {
	protected $fillable = [];
	protected $table = 'product_supplier';

	public function product()
    {
        return $this->hasMany('Product', 'supplier_id');
    }

    public function delete()
    {
        // all related set to 0
        Product::where('supplier_id', $this->id)->update(array('supplier_id' => 0));
        
        // delete the this data
        return parent::delete();
    }

}