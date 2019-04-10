<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $appends 	= array('PhotoPath');

    public function getPhotoPathAttribute()
    {
        return "public/image/event/".$this->photo;
    }
}
