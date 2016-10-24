<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specification extends Model
{
    protected $table = "specifications";

    protected $fillable = [
    	'name',
    	'cate_id'
    ];
}
