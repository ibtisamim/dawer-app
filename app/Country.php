<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Country extends Model
{
    use Translatable;
    protected $translatable = ['country_name'];

    protected $table = "countries";
    protected $fillable = [
    	"country_name" ,
    	"country_code",
    	"status" 
    ];
}
