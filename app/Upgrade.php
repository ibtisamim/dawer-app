<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Upgrade extends Model
{
     use Translatable;
    protected $translatable = ['title'];

    protected $table = "upgrades";
    protected $fillable = [
    	"title" ,
    	"isfree",
    	"ads_available_count",
    	"price",
    	"status"
    ];

 protected $hidden = [
         'created_at', 'updated_at', 'deleted_at' 
    ];
    public function Users(){
    	return $this->hasMany('App/User');
    }

}
