<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

use City;
use Country;
class Area extends Model
{
     use Translatable;
    protected $translatable = ['area_name'];

    protected $table = "areas";
    protected $fillable = [
    	"area_name" ,
    	"status" 
    ];

    public function Country()
    {
    	return $this->belongsTo('App\Country');	
    }

    public function City()
    {
    	return $this->belongsTo('App\City');
    }
}
