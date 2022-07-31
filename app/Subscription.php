<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Subscription extends Model
{
     use Translatable;
    protected $translatable = ['subscription_name', 'subscription_desc'];

    protected $table = "subscriptions";
    protected $fillable = [
    	"subscription_name" ,
    	"subscription_desc",
    	"active_ad_count",
     	"image" ,
    	"advertising_statistics",
    	"cover_images_count",
     	"views_show_count" ,
    	"authentication_mark",
    	"emergence_of_private_ads",
    	"delivery_service" ,
    	"request_an_order",
    	"distinctive_interface",
    	"page_admin" ,
    	"web_image",
    	"mobile_image",
     	"price" ,
    	"days",
    	"status"
    ];


    public function Pages(){
    	return $this->hasMany('App/Page');
    }
}
