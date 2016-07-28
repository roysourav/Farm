<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reproduction extends Model
{
     /**
     * Get the cow.
     */

     public function cow()
     {
     	return $this->belongsTo('App\Cow');
     }

     /**
     * Get the doctor.
     */

     public function doctor()
     {
     	return $this->belongsTo('App\HrmModels\Doctor');
     }

     /**
     * Get the supplier.
     */

     public function supplier()
     {
     	return $this->belongsTo('App\HrmModels\Supplier');
     }

     public function preg_confirm_doctor()
     {
          return $this->belongsTo('App\HrmModels\doctor', 'preg_confirm_doctor_id');
     }




}
