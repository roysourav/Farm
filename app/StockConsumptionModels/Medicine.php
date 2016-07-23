<?php

namespace App\StockConsumptionModels;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    //get the category

    public function category()
    {
    	return $this->belongsTo('App\StockConsumptionModels\MedicineCategory','cat_id');
    }
}
