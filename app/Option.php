<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Option extends Model
{
    use Translatable;
    protected $translatable = ['name'];

    protected $table = "options";
    protected $fillable = [
    	"type" ,
    	"label",
    	"name",
    	"icon",
    	"filter_shape",
    	"slug",
    	"status",
    	"dependence_id"
    ];

    public function OptionValues(){
    	return $this->hasMany('App/OptionValue');
    }


	public function  DependenceOn()
	{
	    return $this->belongsTo('App\OptionValue', 'dependence_id');
	}
}
