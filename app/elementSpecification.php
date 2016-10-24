<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class elementSpecification extends Model
{
    protected $table = "spec_element";

    protected $fillable = [
    	'name',
    	'spec_id',
    ];
}
