<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class AdsStatus extends Model
{
     use Translatable;
    protected $translatable = ['tilte'];

    protected $table = "ads_statuses";
    protected $fillable = [
    	"tilte" ,
    	
    ];
}
