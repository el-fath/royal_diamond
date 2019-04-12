<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $guarded = [];

    protected $appends 	= array('PhotoPath');

    public function getPhotoPathAttribute()
    {
        return "public/image/team/".$this->photo;
    }
}
