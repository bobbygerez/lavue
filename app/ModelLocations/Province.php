<?php

namespace App\ModelLocations;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    
    protected $table = 'refprovince';

    public function getDescriptionAttribute($value){

    	$lower = strtolower($value);
    	return ucwords($lower);
    }
}
