<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
        protected $primaryKey = 'id';
        protected $table = 'region';

        public function destinations(){

        return $this->hasMany(Destination::class,'region_id');
    }
        public function packages(){

        return $this->hasMany(Package::class,'region_id');
    }


}
