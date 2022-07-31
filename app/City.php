<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class City extends Model
{
  
    use Translatable;
    protected $translatable = ['city_name'];

    protected $table = "cities";
    protected $fillable = [
    	"city_name" ,
    	"status" 
    ];

/*
     protected $hidden = [
         'created_at', 'updated_at', 'deleted_at' 
    ];*/

    public function Countries()
    {
    	return $this->belongsTo('App\Country');	
    }

    public function Banners()
    {
        return $this->hasmany('App\Banner'); 
    }

    public function Devices()
    {
        return $this->hasmany('App\Device'); 
    }

}
