<?php

namespace App\Http\Controllers;

use App\Models\Config;
use App\Models\Profile;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Image; //Intervention Image
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;

class Controller extends BaseController
{
    public function __construct()
    {
        $profile = Profile::find(1);
        $config = Config::find(1);

        View::share('profile', $profile);
        View::share('config', $config);
    }

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function uploadFileCustom($file = null,$folder = 'image'){
        if ($file){

            $ext = $file->getClientOriginalExtension();
            $newName = time() .".".$ext;
            $file->move($folder,$newName);


            $smallname = "small_".$newName;
            $mediumname = "medium_".$newName;

//            $filesmall = Storage::copy(public_path().'/'.$folder.$newName,public_path().'/'.$folder.'/small',$smallname);
//            $filemedium = Storage::copy(public_path().'/'.$folder.$newName,public_path().'/'.$folder.'/medium',$mediumname);

//            $filesmall->move(public_path().'/'.$folder.'/small',$smallname);
//            $filemedium->move(public_path().'/'.$folder.'/medium',$mediumname);

//            $smallpath = public_path($folder.'/small/'.$smallname);
//            $this->createThumbnail($smallpath, 300, 185);
//
//            $mediumpath = public_path($folder.'/medium/'.$mediumname);
//            $this->createThumbnail($mediumpath, 550, 340);



            return $newName;
        }else{
            return null;
        }

    }

    public function createThumbnail($path, $width, $height)
    {
        $img = Image::make($path)->resize($width, $height, function ($constraint) {
            $constraint->aspectRatio();
        });
        $img->save($path);
    }
}
