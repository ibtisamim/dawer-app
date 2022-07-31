<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "comments";
    protected $fillable = [
    	"text" ,
    	"commenter_type" 
    ];

    public function commentable()
    {
        return $this->morphTo();
    }

     public function parentId()
    {
        return $this->belongsTo(self::class);
    }

    public function reporting_items()
    {
        return $this->morphMany('App\ReportingItem', 'item');
    }
}
