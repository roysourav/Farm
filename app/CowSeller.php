<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CowSeller extends Model
{
    /**
     * Get cows sold by the cow Seller.
     */
    public function cows()
    {
        return $this->hasMany('App\Cow');
    }
}
