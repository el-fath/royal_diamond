<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;
class Team extends Model
{
    protected $guarded = [];

    protected $appends 	= array('PhotoPath','PhotoPathSmall','PhotoPathMedium','ContentSmall');

    public function getPhotoPathAttribute()
    {
        return url('/')."/public/image/team/".$this->photo;
    }

    public function getPhotoPathSmallAttribute(){
        $img = Image::make($this->getPhotoPathAttribute())->resize(370, 270);
        $img->encode('png');
        $type = 'png';
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($img);
        return $base64;
    }

    public function getPhotoPathMediumAttribute(){
        $img = Image::make($this->getPhotoPathAttribute())->resize(945, 400);
        $img->encode('png');
        $type = 'png';
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($img);
        return $base64;
    }

    public function getContentSmallAttribute(){
        return Str::words($this->content, $words = 50, $end = '...');
    }
}
