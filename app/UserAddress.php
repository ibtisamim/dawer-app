<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class UserAddress extends Model
{
     use Translatable;
    protected $translatable = ['addrss'];


    protected $table = "user_addresses";
    protected $fillable = [
    	"addrss" 
    ];

    public function Country(){
    	return $this->belongsTo('App/Country');
    }


    public function City(){
    	return $this->belongsTo('App/City');
    }


    public function Area(){
    	return $this->belongsTo('App/Area');
    }

    public function User(){
    	return $this->belongsTo('App/User');
    }
}
