<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Member;

class AdminCtr extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->data;
        $title = "Admin";
        $admin = Admin::all();
        return view('admin/admin', compact('admin','title','data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            'name'     => $request->get('name'),
            'username' => $request->get('username'),
            'password' => $request->get('password'),
            'role'     => "admin"
        ];
        // dd($data);
        $data = Admin::create($data);
        return redirect('admin')->with('alert', 'Data Added...!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Admin::find($id);
        return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Admin::find($id);

        $newdata = [
            'name'     => $request->get('name'),
            'username' => $request->get('username'),
            'password' => $request->get('password')
        ];

        $data->update($newdata);
        
        return redirect('admin')->with('alert', 'Data Edited...!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Admin::find($id);
        $data->delete();
        return redirect('admin')->with('alert', 'Data Deleted...!');
    }

    public function index_member(){
        $data = $this->data;
        $title = "Member";
        $member = Member::all();
        return view('admin/member', compact('member','title','data'));
    }

    public function store_member(Request $request)
    {
        if ($request->file('photo')) {
            $file    = $request->file('photo');
            $ext     = $file->getClientOriginalExtension();
            $newName = rand(100000,1001238912).".".$ext;
            $file->move('image/member',$newName);
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
            $file    = $request->file('photo');
            $ext     = $file->getClientOriginalExtension();
            $newName = rand(100000,1001238912).".".$ext;
            $file->move('image/member',$newName);
            $newdata = [
                'name'     => $request->get('name'),
                'email'    => $request->get('email'),
                'gender'   => $request->get('gender'),
                'password' => $request->get('password'),
                'address'  => $request->get('address'),
                'photo'    => $newName
            ];
        }else{
            $newdata = [
                'name'     => $request->get('name'),
                'email'    => $request->get('email'),
                'gender'   => $request->get('gender'),
                'password' => $request->get('password'),
                'address'  => $request->get('address'),
            ];
        }

        $data->update($newdata);
        
        return redirect('member')->with('alert', 'Data Edited...!');
    }

    public function destroy_member($id)
    {
        $data = Member::find($id);
        if ($data->photo != NULL) {
            $myFile = "image/member/".$data->photo;
            unlink($myFile);
        }
        $data->delete();
        return redirect('member')->with('alert', 'Data Deleted...!');
    }
}
