<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tourdetails extends Model
{
      protected $primaryKey = 'id';
    protected $table = 'tourdetails';
    protected $fillable = ['order_num','name','description','tour_id'];
   
    public function tourdata()
    {
        return $this->belongsTo(Destination::class,'tour_id','id');
    }
}
