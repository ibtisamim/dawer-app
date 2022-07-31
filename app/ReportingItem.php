<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReportingItem extends Model
{
	
	protected $table = "reporting_items";
    protected $fillable = [
    	"item_id" ,
    	"item_type",
    	"reason_text"
    ];


    public function item()
    {
        return $this->morphTo();
    }


    public function User()
    {
        return $this->belongsTo('App/User');
    }

    public function Reason()
    {
        return $this->belongsTo('App/ReportingReason');
    }
}
