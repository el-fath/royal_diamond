<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $guarded = [];

    protected $appends 	= array('PhotoPath');

    public function getPhotoPathAttribute()
    {
        return "public/image/slide/".$this->photo;
    }
}
