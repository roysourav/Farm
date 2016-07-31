<?php

namespace App\MilkModels;

use Illuminate\Database\Eloquent\Model;

class Milk extends Model
{
    /**
     * Get the cow.
     */
    public function cow()
    {
        return $this->belongsTo('App\Cow');
    }
}
