<?php

namespace App\HrmModels;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //get distribution

    public function distribution()
    {
    	return $this->hasMany( 'App\MilkModels\Distribution' );
    }
}
