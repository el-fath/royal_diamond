<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    protected $appends 	= array('IconPath');
    protected $guarded = [];

    public function getIconPathAttribute()
    {
        return url('/')."/public/image/config/".$this->icon;
    }
}
