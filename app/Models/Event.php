<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $appends = array('PhotoPath');
    protected $guarded = [];

    public function getPhotoPathAttribute()
    {
        return url('/')."/public/image/event/".$this->photo;
    }
}
