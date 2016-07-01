<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CowDead extends Model
{
    //gettind the dead cow 

    public function cow()
    {
    	return $this->belongsTo('App\Cow');
    }
}
