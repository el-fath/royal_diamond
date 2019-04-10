<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $appends 	= array('OpenCloseTime','PhotoPath');
    protected $guarded = [];

    public function getOpenCloseTimeAttribute()
    {
        return $this->start_day.' - '.$this->end_day.' '.$this->open_time.' - '.$this->close_time;
    }

    public function getPhotoPathAttribute()
    {
        return "public/image/profile/".$this->logo;
    }
}
