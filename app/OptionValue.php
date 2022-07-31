<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class OptionValue extends Model
{
    use Translatable;
    protected $translatable = ['title', 'body'];

    protected $table = "option_values";
    protected $fillable = [
    	"name" ,
    	"icon",
    	"status"
    ];

    public function Option(){
    	return $this->belongsTo('App/Option');
    }

	
}
