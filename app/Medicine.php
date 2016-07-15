<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    //get the category

    public function category()
    {
    	return $this->belongsTo('App\MedicineCategory','cat_id');
    }
}
