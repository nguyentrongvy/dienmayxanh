<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
    protected $table = "products";

    protected $fillable = [
    	'name',
    	'slug',
    	'image',
    	'comany',
    	'price',
        'content',
    	'meta_desc',
        'properties',
    	'meta_key',
    	'set_title',
    	'cate_id'
    ];

    public function setSlugAttribute($string){
        $slug= str_slug($string);
        $this->attributes['slug'] = $slug;
    }

    public function getPropertiesAttribute($value)
    {
        return json_decode($value);
    }

    public function setpropertiesAttribute($string) {
        $size = json_encode($string);
        $this->attributes['properties'] = $size;
    }
}
