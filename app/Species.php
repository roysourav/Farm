<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Species extends Model
{
     /**
     * Get Cows.
     */
    public function cow()
    {
    	return $this->hasMany( 'App\Cow' );
    }
}
