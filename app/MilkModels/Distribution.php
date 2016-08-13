<?php

namespace App\MilkModels;

use Illuminate\Database\Eloquent\Model;

class Distribution extends Model
{
    /**
     * Get the customer.
     */
    public function customer()
    {
        return $this->belongsTo('App\HrmModels\Customer');
    }
}
