<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = "categories";

    protected $fillable =[
    	'name',
    	'parent_id',
    	'slug',
    	'set_title',
    	'meta_desc',
    	'meta_key'
    ];

    public function setSlugAttribute($string){
        $slug= str_slug($string);
        $this->attributes['slug'] = $slug;
    }

    // public function getPropertiesAttribute($value)
    // {
    //     return json_decode($value);
    // }

    // public function setPropertiesAttribute($string) {
    //     $size = json_encode($string);
    //     $this->attributes['properties'] = $size;
    // }
}
