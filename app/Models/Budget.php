<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'budget';

      public function packagebudget(){

        return $this->hasMany(Package::class,'budget_id');
    }
}
