<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    protected $appends 	= array('IconPath','ContactBanner1Path','ContactBanner2Path');
    protected $guarded = [];

    public function getIconPathAttribute()
    {
        return url('/')."/public/image/config/".$this->icon;
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
