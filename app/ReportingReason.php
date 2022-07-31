<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class ReportingReason extends Model
{
    use Translatable;
    protected $translatable = ['reason_text'];

    protected $table = "reporting_reasons";
    protected $fillable = [
    	"reason_text" ,
    	"status",
    	"source",
    	'updated_at',
    	'created_at' ,

    ];

/*
	protected $hidden = [
       'updated_at', 'deleted_at' , 'created_at' , 'status'
    ];*/
    
}
