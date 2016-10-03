<?php

namespace App\HrmModels;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function salary()
    {
    	return $this->hasMany('App\AccountModels\Salary');
    }
}
