<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Banner extends Model
{
    protected $table = "banners";
    protected $fillable = [
    	"banner" ,
    	"banner_position" ,
    	"external_link",
        "ad_space",
    	"status"
    ];

    public function Page()
    {
    	return $this->belongsTo('App\Page');	
    }

    public function Ad()
    {
    	return $this->belongsTo('App\Ad');	
    }

    public function City()
    {
        return $this->belongsTo('App\City');  
    }
}
