<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cow extends Model
{
     /**
     * Get the seller who sell the cow.
     */
    public function supplier()
    {
        return $this->belongsTo('App\Supplier');
    }
}
