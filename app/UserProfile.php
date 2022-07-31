<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class UserProfile extends Model
{
    
    protected $table = "user_profiles";
    protected $fillable = [
    	"domain" ,
    	"cover_image",
    	"mobile_number",
    	"gender",
    	"followers_count",
    	"views_count",
    	"mobile_display",
    	"v_code",
    	"sms_verified_at"
    ];



    protected $hidden = [
         'created_at', 'updated_at', 'deleted_at' , 'user_id' , 'city_id'
    ];

    public function reporting_items()
    {
        return $this->morphMany('App\ReportingItem', 'item');
    }

    public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }

    public function Upgrade(){
        return $this->belongsTo('App\Upgrade');
    }

    public function User(){
        return $this->belongsTo('App\Upgrade');
    }

    public function City(){
    	return $this->belongsTo('App\City');
    }

}
