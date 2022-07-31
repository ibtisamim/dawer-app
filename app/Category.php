<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;

use Page;

class Category extends Model
{
    use Translatable;

    protected $translatable = ['slug', 'name' , 'description'];

    protected $table = 'categories';

    protected $fillable = ['slug', 'name' , 'description' , 'image' , 'status' , 'is_mashaheer' ,'options' , 'order'];

        /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'options' => 'array',
    ];

    public function Page()
    {
        return $this->hasMany('App/Page')
            ->published()
            ->orderBy('order', 'DESC');
    }

    public function parentId()
    {
        return $this->belongsTo(self::class);
    }
}
