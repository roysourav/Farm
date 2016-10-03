<?php

namespace App\AccountModels;

use Illuminate\Database\Eloquent\Model;

class salary extends Model
{
    public function employees()
    {
    	return $this->belongsTo('App\HrmModels\Employee');
    }
}
