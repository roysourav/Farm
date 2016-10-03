<?php

namespace App\AccountModels;

use Illuminate\Database\Eloquent\Model;

class Utility extends Model
{
    public function bills()
    {
    	return $this->hasMany( 'App\AccountModels\UtilityBill' );
    }
}
