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
}