<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;

class Profile extends Model
{
    protected $appends 	= array('OpenCloseTime','PhotoPath');
    protected $guarded = [];

    public function getOpenCloseTimeAttribute()
    {
        return $this->start_day.' - '.$this->end_day.' '.$this->open_time.' - '.$this->close_time;
    }

    public function getPhotoPathAttribute()
    {
        return url('/')."/public/image/profile/".$this->logo;
    }

    public function getPhotoPathSmallAttribute()
    {
        $path_parts = pathinfo($this->getPhotoPathAttribute());

        if(isset($path_parts['filename'])){

            $fileexist = File::exists(url('/')."/public/image/profile/".$path_parts['filename']."_small.png");
            if(!$fileexist){
                $img = Image::make($this->getPhotoPathAttribute())->resize(161, 100);
                $img->save('public/image/profile/'.$path_parts['filename']."_small.png",50);
                // $img->encode('png');
                // $type = 'png';
                // $base64 = 'data:image/' . $type . ';base64,' . base64_encode($img);
            }
            return url('/')."/public/image/profile/".$path_parts['filename']."_small.png";
        }else{
            return url('/')."/public/image/profile/".$this->photo;
        }
    }
}
