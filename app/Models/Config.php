<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\File;

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
        $path_parts = pathinfo($this->getIconPathAttribute());

        if(isset($path_parts['filename'])){

            $fileexist = File::exists(url('/')."/public/image/config/".$path_parts['filename']."_small.png");
            if(!$fileexist){
                $img = Image::make($this->getIconPathAttribute())->resize(161, 100);
                $img->save('public/image/config/'.$path_parts['filename']."_small.png",50);
                // $img->encode('png');
                // $type = 'png';
                // $base64 = 'data:image/' . $type . ';base64,' . base64_encode($img);
            }
            return url('/')."/public/image/config/".$path_parts['filename']."_small.png";
        }else{
            return url('/')."/public/image/config/".$this->photo;
        }
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
