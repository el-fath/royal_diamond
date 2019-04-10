<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    protected $appends 	= array('IconPath');

    public function getIconPathAttribute()
    {
        return "public/image/config/".$this->icon;
    }
}
