<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkbox extends Model
{
    protected $table = "checkbox";

    protected $fillable = [
    	'name',
    	'search_id'
    ];
}
