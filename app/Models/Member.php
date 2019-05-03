<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $guarded = [];
    protected $appends 	= array('PhotoPath');

    public function getPhotoPathAttribute()
    {
        return url('/')."/public/image/member/".$this->photo;
    }

}
