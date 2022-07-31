<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkTime extends Model
{
    protected $table = "work_times";
    protected $fillable = [
    	"all_open" ,
    	"sat",
    	"sun",
    	"mon",
    	"tue",
    	"wed",
    	"thu",
    	"fri"
    ];


    public function Page(){
        return $this->belongsTo('App/Page');
    }

}
