<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class AlertMessage extends Model
{
     use Translatable;
    protected $translatable = ['message'];

    protected $table = "alert_messages";
    protected $fillable = [
    	"message" ,
    	"all_pages"
    ];


    public function Page()
    {
    	return $this->belongsTo('App\Page');	
    }

    public function Subscription()
    {
    	return $this->belongsTo('App\Subscription');	
    }
}
