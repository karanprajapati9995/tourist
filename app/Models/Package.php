<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
        protected $primaryKey = 'id';
    protected $table = 'package';


       protected $casts = [
        
        'itinerarys' =>'array',
        'image' =>'json',
        'attractions' =>'json',
        
    ];

  public function regionCategorys(){

        return $this->belongsTo(Region::class,'region_id');
    }
  public function budgetCategorys(){

        return $this->belongsTo(Budget::class,'budget_id');
    }
  public function durationCategorys(){

        return $this->belongsTo(Duration::class,'duration_id');
    }
  public function travelerCategorys(){

        return $this->belongsTo(TravelerType::class,'traveler_id');
    }
  public function experienceCategorys(){

        return $this->belongsTo(ExperienceType::class,'traveler_id');
    }

 public function setAttractionsAttribute($value)
    {
        $this->attributes['attractions'] = json_encode(array_values($value));
    }
        public function packagedetailsinsert()
    {
        return $this->hasMany(Packagedetails::class,'package_id','id');
    }

}
