<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    
    protected $table = 'prices';

    public function getPriceAttribute($value){

    	return '&#x20B1; ' . number_format($value, 2, '.', ',');
    }
}
