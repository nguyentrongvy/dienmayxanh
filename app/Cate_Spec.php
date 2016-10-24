<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cate_Spec extends Model
{
    protected $table = "category_specification";

    protected $fillable = [
    	'name',
    	'spec_id'
    ];

    // public function getSpecIdAttribute($value)
    // {
    //     return json_decode($value);
    // }

    // public function setSpecIdAttribute($string) {
    //     $size = json_encode($string);
    //     $this->attributes['spec_id'] = $size;
    // }
}
