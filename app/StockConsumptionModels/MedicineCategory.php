<?php

namespace App\StockConsumptionModels;

use Illuminate\Database\Eloquent\Model;

class MedicineCategory extends Model
{
    //get medicines

    public function medicines()
    {
    	return $this->hasMany('App\StockConsumptionModels\Medicine','cat_id');
    }
}
