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
        return $this->belongsToMany('App\Vaccine')->withPivot('date')->withTimestamps();
    }
}
