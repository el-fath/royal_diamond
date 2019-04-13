<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    protected $guarded = [];
    protected $appends 	= array('PhotoPath');

    public function getPhotoPathAttribute()
    {
        return "public/image/treatment/".$this->photo;
    }
}
