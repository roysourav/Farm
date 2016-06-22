<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cow extends Model
{
     /**
     * Get the seller who sell the cow.
     */
    public function seller()
    {
        return $this->belongsTo('App\CowSeller','cowseller_id');
    }
}
