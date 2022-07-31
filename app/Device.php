<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Device extends Model
{
    
    protected $table = "devices";
    protected $fillable = [
    	"device_id" ,
    	"device_type",
    	"fcm_id",
    	"os_version",
    	"status" ,
        "lang",
        "visitor",
        "city_id"
    ];


    public function City()
    {
    	return $this->belongsTo('App/City');
    }

}
