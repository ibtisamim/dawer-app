<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Faq extends Model
{
    use Translatable;
    protected $translatable = ['question', 'answer'];

    protected $table = "faqs";
    protected $fillable = [
    	"question" ,
    	"answer",
    	"status" 
    ];


}
