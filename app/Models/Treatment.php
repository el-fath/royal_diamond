<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\File;

class Treatment extends Model
{
    protected $guarded = [];
    protected $appends 	= array('PhotoPath','PhotoPathSmall','PhotoPathMedium','ContentSmall');

    public function getPhotoPathAttribute()
    {
        return url('/')."/public/image/treatment/".$this->photo;
    }

    public function getPhotoPathSmallAttribute(){
        // $img = Image::make($this->getPhotoPathAttribute())->resize(370, 270);
        // $img->encode('png');
        // $type = 'png';
        // $base64 = 'data:image/' . $type . ';base64,' . base64_encode($img);
        // return $base64;
        
        $path_parts = pathinfo($this->getPhotoPathAttribute());
            
        if(isset($path_parts['filename'])){
            
            $fileexist = File::exists(url('/')."/public/image/treatment/".$path_parts['filename']."_small.png");
            if(!$fileexist){
                $img = Image::make($this->getPhotoPathAttribute())->resize(360, 331);
                $img->save('public/image/treatment/'.$path_parts['filename']."_small.png",60);
                // $img->encode('png');
                // $type = 'png';
                // $base64 = 'data:image/' . $type . ';base64,' . base64_encode($img);
            }
            return url('/')."/public/image/treatment/".$path_parts['filename']."_small.png";
        }else{
            return url('/')."/public/image/treatment/".$this->photo;
        }
    }

    public function getPhotoPathMediumAttribute(){
        
        $path_parts = pathinfo($this->getPhotoPathAttribute());
            
        if(isset($path_parts['filename'])){
            
            $fileexist = File::exists(url('/')."/public/image/treatment/".$path_parts['filename']."_medium.png");
            if(!$fileexist){
                $img = Image::make($this->getPhotoPathAttribute())->resize(945, 400);
                $img->save('public/image/treatment/'.$path_parts['filename']."_medium.png",60);
                // $img->encode('png');
                // $type = 'png';
                // $base64 = 'data:image/' . $type . ';base64,' . base64_encode($img);
            }
            return url('/')."/public/image/treatment/".$path_parts['filename']."_medium.png";
        }else{
            return url('/')."/public/image/treatment/".$this->photo;
        }
        
        
        // $img = Image::make($this->getPhotoPathAttribute())->resize(945, 400);
        // $img->encode('png');
        // $type = 'png';
        // $base64 = 'data:image/' . $type . ';base64,' . base64_encode($img);
        // return $base64;
    }

    public function getContentSmallAttribute(){
        return Str::words($this->content, $words = 50, $end = '...');
    }

}
