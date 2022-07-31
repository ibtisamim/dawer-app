<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Currency extends Model
{
    use Translatable;
    protected $translatable = ['name' , 'code'];

    protected $table = "currencies";
    protected $fillable = [
    	"name" ,
    	"code",
    	"rate"
    ];


  //  protected $hidden = ["rate" , "created_at" , "updated_at"];
}
