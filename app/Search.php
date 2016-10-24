<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Search extends Model
{
    protected $table = "search";

    protected $fillable = [
    	'name',
    	'cate_id'
    ];
}
