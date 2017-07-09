<?php

namespace App\ModelLocations;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    
    protected $table = 'refcitymun';

    public function getDescriptionAttribute($value){

    	$lower = strtolower($value);

    	return ucwords($lower);
    }
}
