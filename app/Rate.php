<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    protected $table = "rates";
    protected $fillable = [
    	"rate" ,
    	"rate_count",
    	"rate_count_1",
    	"rate_count_2",
    	"rate_count_3",
    	"rate_count_4",
    	"rate_count_5"
    ];



    public function Page(){
    	return $this->belongsTo('App/Page');
    }
}
