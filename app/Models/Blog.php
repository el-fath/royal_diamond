<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    protected $guarded = [];
    protected $appends 	= array('PhotoPath','ContentSmall');

    public function getPhotoPathAttribute()
    {
        return url('/')."/public/image/blog/".$this->photo;
    }


    public function getContentSmallAttribute(){
        return Str::words($this->content, $words = 50, $end = '...');
    }
}
