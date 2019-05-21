<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Intervention\Image\ImageManagerStatic as Image;

class Config extends Model
{
    protected $appends 	= array('IconPath','IconPathSmall','ContactBanner1Path','ContactBanner2Path');
    protected $guarded = [];

    public function getIconPathAttribute()
    {
        return url('/')."/public/image/config/".$this->icon;
    }

    public function getIconPathSmallAttribute()
    {
        $img = Image::make($this->getIconPathAttribute())->resize(161, 100);
        $img->encode('png');
        $type = 'png';
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($img);
        return $base64;
    }

    public function getContactBanner1PathAttribute()
    {
        return url('/')."/public/image/config/".$this->contact_us_banner_1;
    }

    public function getContactBanner2PathAttribute()
    {
        return url('/')."/public/image/config/".$this->contact_us_banner_2;
    }
}
