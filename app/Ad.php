<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

use User;
use Country;
use City;
use Area;
use Category;
use Page;
use Internalsections;

class Ad extends Model
{
    use Translatable;
    protected $translatable = [
    	'ads_title', 
    	'slug',
    	'ads_text'
    ];

    protected $table = "ads";
    protected $fillable = [
    	"ads_title" ,
    	"slug" ,
    	"ads_text" ,
    	"mobile_number" ,
    	"mobile_display" ,
    	"price" ,
    	"currency" ,
    	"special" ,
    	"old_price" ,
    	"delivery" ,
    	"order" ,
    	"ads_status" ,
    	"start_date" ,
    	"end_date" ,
    	"created_at" 
    	
    ];



    public function User()
    {
    	return $this->belongsTo('App/User');
    }

    public function Page()
    {
    	return $this->belongsTo('App/Page');
    }

    public function Category()
    {
    	return $this->belongsTo('App/Category');
    }

    public function InternalSection()
    {
    	return $this->belongsTo('App/InternalSection');
    }


    public function Country()
    {
    	return $this->belongsTo('App/Country');	
    }

    public function City()
    {
    	return $this->belongsTo('App/City');
    }


    public function Area()
    {
    	return $this->belongsTo('App/Area');
    }

    public function Order()
    {
    	return $this->belongsToMany('App/Order' , 'order_items');
    }


    public function reporting_items()
    {
        return $this->morphMany('App\ReportingItem', 'item');
    }

}
