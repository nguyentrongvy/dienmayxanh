<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ElementFilter extends Model
{
    protected $table = "element_filter";

    protected $fillable = [
    	'name',
    	'search_id'
    ];
}
