<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Translation extends \TCG\Voyager\Models\Translation
{
		protected $hidden = ["table_name" , "foreign_key" , "id" , "created_at" , "updated_at"];
}
