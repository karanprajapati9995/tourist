<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExperienceType extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'experiencetype';

      public function packageexpertence(){

        return $this->hasMany(Package::class,'experience_id');
    }
}
