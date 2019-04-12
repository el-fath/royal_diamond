<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\Admin;
use App\Models\Member;
use App\Models\Team;

class AdminCtr extends Controller
{

    public function auth()
    {
        return view('admin/login');
    }

    public function authentification(Request $request)
    {
        $username = $request->username;
        $password = $request->password;

        $data = Admin::where('username', $username)->first();
        if($data){ 
            if(Hash::check($password,$data->password)){
                $Session = [
                    'id'       => $data->id,
                    'username' => $data->username,
                    'login'    => TRUE
                ];
                Session::put($Session);
                return redirect()->route('admin.index');
            }else{
                return redirect()->route('auth')
                ->with('alert', 'Your password is wrong, please type again...!')
                ->with('username', $username);
            }
        }else{
            return redirect()->route('auth')
            ->with('alert', 'Login failed, your username is not registered...!');
        }
    }

    public function log_out()
    {
        Session::flush();
        return redirect()->route('auth');
    }

    public function index()
    {
        if(Session::get('login')){
            $title = "Admin";
            $admin = Admin::all();
            return view('admin/admin', compact('admin','title'));
        }else{
            return redirect('auth');
        }
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $data = [
            'name'     => $request->get('name'),
            'username' => $request->get('username'),
            'password' => Hash::make($request->get('password')),
            'role'     => "admin"
        ];
        // dd($data);
        $data = Admin::create($data);
        return redirect('admin')->with('alert', 'Data Added...!');
    }

    public function show($id)
    {
        $data = Admin::find($id);
        return response()->json($data);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $data = Admin::find($id);

        $newdata = [
            'name'     => $request->get('name'),
            'username' => $request->get('username'),
            // 'password' => $request->get('password')
        ];

        $data->update($newdata);
        
        return redirect('admin')->with('alert', 'Data Edited...!');
    }

    public function destroy($id)
    {
        $data = Admin::find($id);
        $data->delete();
        return redirect('admin')->with('alert', 'Data Deleted...!');
    }

    public function index_member(){
        if(Session::get('login')){
            $title = "Member";
            $member = Member::all();
            return view('admin/member', compact('member','title'));
        }else{
            return redirect('auth');
        }
    }

    public function store_member(Request $request)
    {
        if ($request->file('photo')) {
            $file    = $request->file('photo');
            $ext     = $file->getClientOriginalExtension();
            $newName = rand(100000,1001238912).".".$ext;
            $file->move('public/image/member',$newName);
        }else{
            $newName = NULL;
        }

        $data = [
            'name'     => $request->get('name'),
            'email'    => $request->get('email'),
            'gender'   => $request->get('gender'),
            'password' => $request->get('password'),
            'address'  => $request->get('address'),
            'photo'    => $newName
        ];
        
        $data = Member::create($data);
        return redirect('member')->with('alert', 'Data Added...!');
    }

    public function show_member($id)
    {
        $data = Member::find($id);
        return response()->json($data);
    }

    public function update_member(Request $request, $id)
    {
        $data = Member::find($id);

        if ($request->file('photo')) {
            $myFile = "public/image/member/".$data->photo;
            unlink($myFile);

            $file    = $request->file('photo');
            $ext     = $file->getClientOriginalExtension();
            $newName = rand(100000,1001238912).".".$ext;
            $file->move('public/image/member',$newName);

            $newdata = [ 'photo' => $newName ];
            $data->update($newdata);
        }
        $newdata = [
            'name'     => $request->get('name'),
            'email'    => $request->get('email'),
            'gender'   => $request->get('gender'),
            'password' => $request->get('password'),
            'address'  => $request->get('address'),
        ];

        $data->update($newdata);
        
        return redirect('member')->with('alert', 'Data Edited...!');
    }

    public function destroy_member($id)
    {
        $data = Member::find($id);
        if ($data->photo != NULL) {
            $myFile = "public/image/member/".$data->photo;
            unlink($myFile);
        }
        $data->delete();
        return redirect('member')->with('alert', 'Data Deleted...!');
    }

    public function index_team(){
        if(Session::get('login')){
            $title = "Team";
            $team = Team::all();
            return view('admin/team', compact('team','title'));
        }else{
            return redirect('auth');
        }
    }

    public function store_team(Request $request)
    {
        if ($request->file('photo')) {
            $file    = $request->file('photo');
            $ext     = $file->getClientOriginalExtension();
            $newName = rand(100000,1001238912).".".$ext;
            $file->move('public/image/team',$newName);
        }else{
            $newName = NULL;
        }

        $data = [
            'name'     => $request->get('name'),
            'position' => $request->get('position'),
            'content'  => $request->get('content'),
            'photo'    => $newName
        ];
        
        $data = Team::create($data);
        return redirect('team')->with('alert', 'Data Added...!');
    }

    public function show_team($id)
    {
        $data = Team::find($id);
        return response()->json($data);
    }

    public function update_team(Request $request, $id)
    {
        $data = Team::find($id);

        if ($request->file('photo')) {
            $myFile = "public/image/team/".$data->photo;
            unlink($myFile);

            $file = $request->file('photo');
            $ext = $file->getClientOriginalExtension();
            $newName = rand(100000,1001238912).".".$ext;
            $file->move('public/image/team',$newName);

            $newdata = [ 'photo' => $newName ];
            $data->update($newdata);
        }

        $newdata = [
            'name'     => $request->get('name'),
            'position' => $request->get('position'),
            'content'  => $request->get('content')
        ];

        $data->update($newdata);

        return redirect('team')->with('alert', 'Data Edited...!');
    }

    public function destroy_team($id)
    {
        $data = Team::find($id);
        if ($data->photo != NULL) {
            $myFile = "public/image/team/".$data->photo;
            unlink($myFile);
        }
        $data->delete();
        return redirect('team')->with('alert', 'Data Deleted...!');
    }
}
