<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;
use Page;

class InternalSection extends Model
{
    use Translatable;
    protected $translatable = ['name'];

    protected $table = "internal_sections";
    protected $fillable = [
    	"name" ,
    	"image"
    ];

    public function Page(){
    	return $this->belongsTo('App/Page');	
    }

}
