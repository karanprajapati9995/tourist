<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Duration extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'duration';

      public function packageduration(){

        return $this->hasMany(Package::class,'duration_id');
    }
}
