<?php

class Category extends \Eloquent {
	protected $fillable = [];
	protected $table = 'product_category';

    public function childs()
    {
        return $this->hasMany('Category', 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo('Category', 'parent_id');
    }

    public function product()
    {
        return $this->hasMany('Product', 'category_id');
    }

    public function delete()
    {
        // all related set to 0
        Product::where('category_id', $this->id)->update(array('category_id' => 0));
        Category::where('parent_id', $this->id)->update(array('parent_id' => 0));
        
        // delete the this data
        return parent::delete();
    }

}