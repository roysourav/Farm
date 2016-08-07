<?php

namespace App\HrmModels;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    public function reproduction()
    {
    	return $this->hasMany('App\Reproduction');
    }

    
}
