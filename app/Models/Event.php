<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $appends = array('PhotoPath','ContentSmall');
    protected $guarded = [];

    public function getPhotoPathAttribute()
    {
        return url('/')."/public/image/event/".$this->photo;
    }

    public function getContentSmallAttribute(){
        return Str::words($this->content, $words = 50, $end = '...');
    }
}
