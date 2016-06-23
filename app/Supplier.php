<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
	/**
     * Get cows sold by the seller.
     */
	public function cows()
	{

		return $this->hasMany('App\Cow');
	}
   
}
