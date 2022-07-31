<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RateUser extends Model
{
    protected $table = "rate_users";
    protected $fillable = [
    	"rate" ,
    	"rate_count",
    	"rate_count_1",
    	"rate_count_2",
    	"rate_count_3",
    	"rate_count_4",
    	"rate_count_5"
    ];

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];


    public function User(){
    	return $this->belongsTo('App/User');
    }
}
