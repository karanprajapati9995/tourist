<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
      protected $primaryKey = 'id';
    protected $table = 'destination';


     protected $casts = [
        
        'itinerary' =>'array',
        'images' =>'json',
        
    ];

      public function regionCategory(){

        return $this->belongsTo(Region::class,'region_id');
    }
       public function touretailsinsert()
    {
        return $this->hasMany(Tourdetails::class,'tour_id','id');
    }
}
