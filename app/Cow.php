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
        return $this->belongsTo('App\HrmModels\Supplier');
    }

     /**
     * Get the species of the cow.
     */
    public function species()
    {
        return $this->belongsTo('App\Species');
    }

    /**
     * Get reproduction relation.
     */
    public function reproduction()
    {
    	return $this->hasMany( 'App\Reproduction' );
    }

    public function vaccines()
    {
        return $this->belongsToMany('App\StockConsumptionModels\Vaccine')->withPivot('date')->withTimestamps();
    }

    public function medicines()
    {
        return $this->belongsToMany('App\StockConsumptionModels\Medicine')->withPivot('date','dose','days')->withTimestamps();
    }

     /**
     * Get Milk.
     */
    public function milks()
    {
        return $this->hasMany( 'App\MilkModels\Milk' );
    }


    
}
