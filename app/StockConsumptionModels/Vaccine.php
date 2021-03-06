<?php

namespace App\StockConsumptionModels;

use Illuminate\Database\Eloquent\Model;

class Vaccine extends Model
{
    public function cows()
    {
    	return $this->belongsToMany('App\Cow')->withPivot('date')->withTimestamps();
    }
}
