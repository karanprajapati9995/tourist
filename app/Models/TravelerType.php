<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TravelerType extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'travelertype';

    
      public function packagetraveler(){

        return $this->hasMany(Package::class,'traveler_id');
    }
}
