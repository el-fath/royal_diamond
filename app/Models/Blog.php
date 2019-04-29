<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    protected $guarded = [];
    protected $appends 	= array('PhotoPath','ContentSmall','Link');

    public function getPhotoPathAttribute()
    {
        return url('/')."/public/image/blog/".$this->photo;
    }

    public function getLinkAttribute()
    {
        return url('/').$this->url_segment;
    }


    public function getContentSmallAttribute(){
        return Str::words($this->content, $words = 50, $end = '...');
    }
}
