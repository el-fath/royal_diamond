<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Blog;
use App\Models\Profile;
use App\Models\Config;
use Illuminate\Support\Str;

class AdminCtr2 extends Controller
{
    public function index_profile()
    {
        $title = "Profile";
        $data  = Profile::find(1);
        $action = route('profile.update');
        return view('admin/profile', compact('data','title', 'action'));
    }

    public function update_profile(Request $request)
    {
        try {
            $data = Profile::find(1);

            if ($request->file('photo')) {
                $myFile = "public/image/profile/".$data->photo;
                unlink($myFile);
    
                $file = $request->file('photo');
                $ext = $file->getClientOriginalExtension();
                $newName = rand(100000,1001238912).".".$ext;
                $file->move('public/image/profile',$newName);
    
                $newdata = [ 'photo' => $newName ];
                $data->update($newdata);
            }

            $newdata = [
                'name'       => $request->name,
                'email'      => $request->email,
                'phone'      => $request->phone,
                'facebook'   => $request->facebook,
                'instagram'  => $request->instagram,
                'twitter'    => $request->twitter,
                'start_day'  => $request->start_day,
                'end_day'    => $request->end_day,
                'open_time'  => $request->open_time,
                'close_time' => $request->close_time,
                'address'    => $request->address,
                'desc'       => $request->desc
            ];
            $data->update($newdata);
    
            return response()->json([
                'Code'    => "Success",
                'Message' => "Profile config updated"
            ]);
        } catch (Esception $e) {
            return response()->json([
                'Code'    => "Error",
                'message' => $e->getMessage()
            ]);
        }
    }

    public function index_config()
    {
        $title = "Config";
        $data  = Config::find(1);
        $action = route('config.update');
        return view('admin/config', compact('data','title', 'action'));
    }

    public function update_config(Request $request)
    {
        try {
            $data = Config::find(1);

            if ($request->file('photo')) {
                $myFile = "public/image/config/".$data->photo;
                unlink($myFile);
    
                $file = $request->file('photo');
                $ext = $file->getClientOriginalExtension();
                $newName = rand(100000,1001238912).".".$ext;
                $file->move('public/image/config',$newName);
    
                $newdata = [ 'icon' => $newName ];
                $data->update($newdata);
            }

            $newdata = [
                'web_name'           => $request->web_name,
                'description'        => $request->description,
                'meta_keyword'       => $request->meta_keyword,
                'meta_desc'          => $request->meta_desc,
                'head_script'        => $request->head_script,
                'after_body_script'  => $request->after_body_script,
                'before_body_script' => $request->before_body_script
            ];
            $data->update($newdata);
    
            return response()->json([
                'Code'    => "Success",
                'Message' => "Web config updated"
            ]);
        } catch (Esception $e) {
            return response()->json([
                'Code'    => "Error",
                'message' => $e->getMessage()
            ]);
        }
    }

    public function index_blog(){
        if(Session::get('login')){
            $title = "Blog";
            $blog = Blog::all()->sortByDesc('id');
            return view('admin/blog/blog', compact('blog','title'));
        }else{
            return redirect('auth');
        }
    }

    public function add_blog()
    {
        $title = "Add";
        $action = route('blog.store');
        return view('admin/blog/blogform', compact('title', 'action'));
    }

    public function store_blog(Request $request)
    {
        if ($request->file('photo')) {
            $file    = $request->file('photo');
            $ext     = $file->getClientOriginalExtension();
            $newName = rand(100000,1001238912).".".$ext;
            $file->move('public/image/blog',$newName);
        }else{
            $newName = NULL;
        }

        $data = [
            'title'    => $request->get('title'),
            'content'  => $request->get('content'),
            'id_admin' => Session::get('id'),
            'photo'    => $newName
        ];
        
        $data = Blog::create($data);

        $data->url_segment = Str::slug($data->title.'-'.$data->id, '-');
        $data->save();

        return redirect('admin/blog')->with('alert', 'Data Added...!');
    }

    public function show_blog($id)
    {
        $title = "Edit";
        $data  = Blog::find($id);
        $action = route('blog.update', $data->id);
        return view('admin/blog/blogform', compact('data','title', 'action'));
    }

    public function update_blog(Request $request, $id)
    {
        $data = Blog::find($id);

        if ($request->file('photo')) {
            $myFile = "public/image/blog/".$data->photo;
            unlink($myFile);

            $file = $request->file('photo');
            $ext = $file->getClientOriginalExtension();
            $newName = rand(100000,1001238912).".".$ext;
            $file->move('public/image/blog',$newName);

            $newdata = [ 'photo' => $newName ];
            $data->update($newdata);
        }

        $newdata = [
            'title'    => $request->get('title'),
            'content'  => $request->get('content'),
            'id_admin' => Session::get('id')
        ];

        $data->update($newdata);
        $data->url_segment = Str::slug($data->title.'-'.$data->id, '-');
        $data->save();

        return redirect('admin/blog')->with('alert', 'Data Edited...!');
    }

    public function destroy_blog($id)
    {
        $data = Blog::find($id);
        if ($data->photo != NULL) {
            $myFile = "public/image/blog/".$data->photo;
            unlink($myFile);
        }
        $data->delete();
        return redirect('admin/blog')->with('alert', 'Data Deleted...!');
    }
}
