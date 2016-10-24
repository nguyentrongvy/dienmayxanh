<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    protected $table = "promotion";

    protected $fillable = [
    	'name',
    	'check',
    	'cate_id'
    ];
}
