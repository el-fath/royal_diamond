<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $appends 	= array('OpenCloseTime');
    protected $guarded = [];

    public function getOpenCloseTimeAttribute()
    {
        return $this->start_day.' - '.$this->end_day.' '.$this->open_time.' - '.$this->close_time;
    }
}
