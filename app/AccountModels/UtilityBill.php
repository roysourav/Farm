<?php

namespace App\AccountModels;

use Illuminate\Database\Eloquent\Model;

class UtilityBill extends Model
{
    public function utility()
    {
    	return $this->belongsTo('App\AccountModels\Utility');
    }
}
