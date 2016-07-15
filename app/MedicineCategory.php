<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicineCategory extends Model
{
    //get medicines

    public function medicines()
    {
    	return $this->hasMany('App\medicine','cat_id');
    }
}
