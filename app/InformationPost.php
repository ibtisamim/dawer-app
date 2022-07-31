<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class InformationPost extends Model
{
    use Translatable;
    protected $translatable = ['title', 'excerpt' , 'body' , 'image' , 'slug' , 'status'];

    protected $table = "information_pages";
    protected $fillable = [
    	"title" ,
    	"excerpt",
    	"body",
    	"image",
    	"slug",
    	"status" 
    ];
}
