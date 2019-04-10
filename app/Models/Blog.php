<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $appends 	= array('PhotoPath');

    public function getPhotoPathAttribute()
    {
        return "public/image/blog/".$this->photo;
    }
}
