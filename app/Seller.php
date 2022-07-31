<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Seller extends Model
{
    use Translatable;
    protected $translatable = ['name', 'position'];

    protected $table = "sellers";
    protected $fillable = [
    	"name" ,
    	"position",
    	"status"
    ];

    public function Country(){
    	return $this->belongsTo('App/Country');
    }


    public function City(){
    	return $this->belongsTo('App/City');
    }
    
}
