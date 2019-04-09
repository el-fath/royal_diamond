<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;

class Admin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->data;
        $title = "Member";
        $member = Member::all();
        return view('admin/member', compact('member','title','data'));
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
        $data = Member::find($id);
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
        $data = Member::find($id);
        if ($data->photo != NULL) {
            $myFile = "image/member/".$data->photo;
            unlink($myFile);
        }
        $data->delete();
        return redirect('admin')->with('alert', 'Data Deleted...!');
    }
}
