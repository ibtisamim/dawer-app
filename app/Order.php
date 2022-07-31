<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "orders";
    protected $fillable = [
    	"title" ,
    	"total",
    	"status	"
    ];

    public function User(){
    	return $this->belongsTo('App/User');
    }

     public function Page(){
    	return $this->belongsTo('App/Page');
    }

    public function Customer(){
    	return $this->belongsTo('App/User');
    }

    public function Items(){
    	return $this->belongsToMany('App/Ad' , 'order_items');
    }
}
