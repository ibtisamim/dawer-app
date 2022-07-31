<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class TypeFiliter extends Model
{
     use Translatable;
    protected $translatable = ['title'];

    protected $table = "type_filiters";
    protected $fillable = [
    	"title" ,
    	"status"
    ];
}
