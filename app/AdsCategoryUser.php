<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Category;
use Upgrade;

class AdsCategoryUser extends Model
{
    // this model for specific ads count foreach user upgarde type

    protected $table = "ads_category_users";
    protected $fillable = [
    	"ads_count" ,
    	"category_id" ,
    	"upgrade_id" 
    ];



    public function Categories(){
    	return $this->belongsTo('App/Category');
    }

    public function Upgrade(){
    	return $this->belongsTo('App/Upgrade');
    }
}
