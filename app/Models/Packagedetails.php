<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Packagedetails extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'packagedetails';

      protected $fillable = ['order_num','name','description','package_id'];
   
    public function packagedata()
    {
        return $this->belongsTo(Package::class,'package_id','id');
    }
}
