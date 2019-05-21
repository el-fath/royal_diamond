<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;
class Slide extends Model
{
    protected $guarded = [];

    protected $appends 	= array('PhotoPath','PhotoPathSmall','PhotoPathMedium','ContentSmall');

    public function getPhotoPathAttribute()
    {
        return url('/')."/public/image/slide/".$this->photo;
    }

    public function getPhotoPathSmallAttribute(){
        // $img = Image::make($this->getPhotoPathAttribute())->resize(945, 400);
        // $img->encode('png');
        // $type = 'png';
        // $base64 = 'data:image/' . $type . ';base64,' . base64_encode($img);
        // return $base64;
        
        
        $path_parts = pathinfo($this->getPhotoPathAttribute());
            
        if(isset($path_parts['filename'])){
            
            $fileexist = File::exists(url('/')."/public/image/slide/".$path_parts['filename']."_small.png");
            if(!$fileexist){
                $img = Image::make($this->getPhotoPathAttribute())->resize(370, 270);
                $img->save('public/image/blog/'.$path_parts['filename']."_small.png",60);
                // $img->encode('png');
                // $type = 'png';
                // $base64 = 'data:image/' . $type . ';base64,' . base64_encode($img);
            }
            return url('/')."/public/image/slide/".$path_parts['filename']."_small.png";
        }else{
            return url('/')."/public/image/slide/".$this->photo;
        }
    }

    public function getPhotoPathMediumAttribute(){
        $img = Image::make($this->getPhotoPathAttribute())->resize(2560, 1000);
        $img->encode('png');
        $type = 'png';
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($img);
        return $base64;
    }

    public function getContentSmallAttribute(){
        return Str::words($this->content, $words = 50, $end = '...');
    }
}
