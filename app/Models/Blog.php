<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\File;

class Blog extends Model
{
    protected $guarded = [];
    protected $appends 	= array('PhotoPath','PhotoPathSmall','PhotoPathMedium','ContentSmall','Link');

    public function getPhotoPathAttribute()
    {
        return url('/')."/public/image/blog/".$this->photo;
    }

    public function getPhotoPathSmallAttribute(){
            $path_parts = pathinfo($this->getPhotoPathAttribute());
            
            if(isset($path_parts['filename'])){
                
                $fileexist = File::exists(url('/')."/public/image/blog/".$path_parts['filename']."_small.png");
                if(!$fileexist){
                    $img = Image::make($this->getPhotoPathAttribute())->resize(370, 270);
                    $img->save('public/image/blog/'.$path_parts['filename']."_small.png",50);
                    // $img->encode('png');
                    // $type = 'png';
                    // $base64 = 'data:image/' . $type . ';base64,' . base64_encode($img);
                }
                return url('/')."/public/image/blog/".$path_parts['filename']."_small.png";
            }else{
                return url('/')."/public/image/blog/".$this->photo;
            }
    }

    public function getPhotoPathMediumAttribute(){
        $path_parts = pathinfo($this->getPhotoPathAttribute());
        
        if(isset($path_parts['filename'])){
            $fileexist = File::exists(url('/')."/public/image/blog/".$path_parts['filename']."_medium.png");
                if($fileexist){
                    $img = Image::make($this->getPhotoPathAttribute())->resize(945, 400);
                    $img->save('public/image/blog/'.$path_parts['filename']."_medium.png",50);
                    // $img->encode('png');
                    // $type = 'png';
                    // $base64 = 'data:image/' . $type . ';base64,' . base64_encode($img);
                }
             return url('/')."/public/image/blog/".$path_parts['filename']."_medium.png";
        }else{
            return url('/')."/public/image/blog/".$this->photo;
        }
        
        
       
    }

    public function getLinkAttribute()
    {
        return url('/').$this->url_segment;
    }


    public function getContentSmallAttribute(){
        return Str::words($this->content, $words = 50, $end = '...');
    }
}
