<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Blog;

class AdminCtr2 extends Controller
{
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
        return view('admin/blog/blogform', compact('title'));
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
        return redirect('admin/blog')->with('alert', 'Data Added...!');
    }

    public function show_blog($id)
    {
        $title = "Edit Blog";
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
