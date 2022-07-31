<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;



class Page extends Model
{
    protected $table = "pages";
    protected $fillable = [
    	"page_name" ,
    	"page_description",
    	"mobile_number",
    	"profile_photo",
    	"coverimage",
    	"trademarkimage",
    	"wheredidyouhearaboutus",
    	"email",
    	"street",
    	"website",
    	"google_lat",
    	"google_lng",
    	"maplocation",
    	"slug",
    	"status",
    	"likes_count",
    	"followers_count",
    	"views_count",
    	"approved",
    	"delivery",
    	"order"
    ];

    public function User(){
    	return $this->belongsTo('App\User');
    }


    public function Subscription(){
    	return $this->belongsTo('App\Subscription');
    }

    public function Country(){
    	return $this->belongsTo('App\Country');
    }


    public function City(){
    	return $this->belongsTo('App\City');
    }


    public function Area(){
    	return $this->belongsTo('App\Area');
    }

    public function InternalSections(){
    	return $this->hasMany('App\InternalSection');
    }


    public function Admins(){
    	return $this->belongsToMany('App\User' , 'page_admins');
    }

    public function Rate(){
    	return $this->hasOne('App\Rate');
    }

    public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }

    public function WorkTimes(){
        return $this->belongsTo('App\WorkTime');
    }

    public function Likes(){
    	return $this->belongsToMany('App\User' , 'user_like');
    }

    public function Fav(){
    	return $this->belongsToMany('App\User' , 'user_favs');
    }

    public function user_notify(){
    	return $this->belongsToMany('App\User' , 'user_favs');
    }



}
