<?php

namespace App\HrmModels;

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
   
   /**
     * Get supplier related with reproduction.
     */
	public function reproduction()
	{

		return $this->hasMany('App\Reproduction');
	}
   
}
