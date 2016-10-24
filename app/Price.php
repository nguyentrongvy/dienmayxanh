<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $table = "price";

    protected $fillable = [
    	'name',
    	'price_min',
    	'price_max',
    	'cate_id'
    ];
}
