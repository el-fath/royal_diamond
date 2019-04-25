<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Profile;
use App\Models\Config;
use App\Models\Blog;
use App\Models\Service;
use App\Models\Event;
use App\Models\Consultation;
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
    
    public function index_service(){
        if(Session::get('login')){
            $title = "Service";
            $service = Service::all()->sortByDesc('id');
            return view('admin/service/service', compact('service','title'));
        }else{
            return redirect('auth');
        }
    }

    public function add_service()
    {
        $title = "Add";
        $action = route('service.store');
        return view('admin/service/serviceform', compact('title', 'action'));
    }

    public function store_service(Request $request)
    {
        $data = [
            'icon'        => $request->get('icon'),
            'title'       => $request->get('title'),
            'description' => $request->get('description')
        ];
        
        $data = Service::create($data);

        return redirect('admin/service')->with('alert', 'Data Added...!');
    }

    public function show_service($id)
    {
        $title = "Edit";
        $data  = Service::find($id);
        $action = route('service.update', $data->id);
        return view('admin/service/serviceform', compact('data','title', 'action'));
    }

    public function update_service(Request $request, $id)
    {
        $data = Service::find($id);

        $newdata = [
            'icon'        => $request->get('icon'),
            'title'       => $request->get('title'),
            'description' => $request->get('description')
        ];

        $data->update($newdata);

        return redirect('admin/service')->with('alert', 'Data Edited...!');
    }

    public function destroy_service($id)
    {
        $data = Service::find($id);
        $data->delete();
        return redirect('admin/service')->with('alert', 'Data Deleted...!');
    }

    public function index_event(){
        if(Session::get('login')){
            $title = "Event";
            $event = Event::all()->sortByDesc('id');
            return view('admin/event/event', compact('event','title'));
        }else{
            return redirect('auth');
        }
    }

    public function add_event()
    {
        $title = "Add";
        $action = route('event.store');
        return view('admin/event/eventform', compact('title', 'action'));
    }

    public function store_event(Request $request)
    {
        if ($request->file('photo')) {
            $file    = $request->file('photo');
            $ext     = $file->getClientOriginalExtension();
            $newName = rand(100000,1001238912).".".$ext;
            $file->move('public/image/event',$newName);
        }else{
            $newName = NULL;
        }

        $data = [
            'title'    => $request->get('title'),
            'content'  => $request->get('content'),
            'id_admin' => Session::get('id'),
            'photo'    => $newName
        ];
        
        $data = Event::create($data);

        $data->url_segment = Str::slug($data->title.'-'.$data->id, '-');
        $data->save();

        return redirect('admin/event')->with('alert', 'Data Added...!');
    }

    public function show_event($id)
    {
        $title = "Edit";
        $data  = Event::find($id);
        $action = route('event.update', $data->id);
        return view('admin/event/eventform', compact('data','title', 'action'));
    }

    public function update_event(Request $request, $id)
    {
        $data = Event::find($id);

        if ($request->file('photo')) {
            $myFile = "public/image/event/".$data->photo;
            unlink($myFile);

            $file = $request->file('photo');
            $ext = $file->getClientOriginalExtension();
            $newName = rand(100000,1001238912).".".$ext;
            $file->move('public/image/event',$newName);

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

        return redirect('admin/event')->with('alert', 'Data Edited...!');
    }

    public function destroy_event($id)
    {
        $data = Event::find($id);
        if ($data->photo != NULL) {
            $myFile = "public/image/event/".$data->photo;
            unlink($myFile);
        }
        $data->delete();
        return redirect('admin/event')->with('alert', 'Data Deleted...!');
    }

    public function index_consultation(){
        if(Session::get('login')){
            $title = "Consultation";
            $consultation = Consultation::all()->sortByDesc('id');
            return view('admin/consultation', compact('consultation','title'));
        }else{
            return redirect('auth');
        }
    }

    public function show_consultation($id)
    {
        $data = Consultation::find($id);
        $data->view = $data->view + 1;
        $data->save();
        return response()->json($data);
    }
}
