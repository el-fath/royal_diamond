<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\Admin;
use App\Models\Member;
use App\Models\Team;
use App\Models\Slide;
use App\Models\Promo;
use App\Models\Treatment;
use Illuminate\Support\Str;

class AdminCtr1 extends Controller
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
                    'role'     => $data->role,
                    'login'    => TRUE
                ];
                Session::put($Session);
                return redirect()->route('profile.index');
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

    public function reset_password($table, $id)
    {
        $default = 'RD12345';
        if ($table == 'admin') {
            $data = Admin::find($id);
            $data->password = Hash::make($default);
            $data->save();
            return redirect('admin/admin')
            ->with('alert', 'Success, password admin with username:'.$data->username.' was reset by default:'.$default);
        } else {
            $data = Member::find($id);
            $data->password = Hash::make($default);
            $data->save();
            return redirect('admin/member')
            ->with('alert', 'Success, password member with email:'.$data->email.' was reset by default:'.$default);
        }
    }

    public function index()
    {
        if(Session::get('login')){
            $title = "Admin";
            $admin = Admin::all()->sortByDesc('id');
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
            'role'     => $request->get('role')
        ];
        $data = Admin::create($data);
        return redirect('admin/admin')->with('alert', 'Data Added...!');
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
            'role'     => $request->get('role')
            // 'password' => $request->get('password')
        ];

        $data->update($newdata);
        
        return redirect('admin/admin')->with('alert', 'Data Edited...!');
    }

    public function update_password_admin($id ,Request $request)
    {
        $data = Admin::find($id);
        $data->password = Hash::make($request->newpass);
        $data->save();
        return response()->json([
            'Code'    => "Success",
            'Message' => "Password updated"
        ]);
    }

    public function destroy($id)
    {
        $data = Admin::find($id);
        $data->delete();
        return redirect('admin/admin')->with('alert', 'Data Deleted...!');
    }

    public function index_member(){
        if(Session::get('login')){
            $title = "Member";
            $member = Member::all()->sortByDesc('id');
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
            'password' => Hash::make($request->get('password')),
            'address'  => $request->get('address'),
            'photo'    => $newName
        ];
        
        $data = Member::create($data);
        return redirect('admin/member')->with('alert', 'Data Added...!');
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
            'address'  => $request->get('address'),
        ];

        $data->update($newdata);
        
        return redirect('admin/member')->with('alert', 'Data Edited...!');
    }

    public function destroy_member($id)
    {
        $data = Member::find($id);
        if ($data->photo != NULL) {
            $myFile = "public/image/member/".$data->photo;
            unlink($myFile);
        }
        $data->delete();
        return redirect('admin/member')->with('alert', 'Data Deleted...!');
    }

    public function index_team(){
        if(Session::get('login')){
            $title = "Team";
            $team = Team::all()->sortByDesc('id');
            return view('admin/team/team', compact('team','title'));
        }else{
            return redirect('auth');
        }
    }

    public function add_team()
    {
        $title = "Add";
        $action = route('team.store');
        return view('admin/team/teamform', compact('title', 'action'));
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
        $data->url_segment = Str::slug($data->name.'-'.$data->id, '-');
        $data->save();

        return redirect('admin/team')->with('alert', 'Data Added...!');
    }

    public function show_team($id)
    {
        $title = "Edit";
        $data  = Team::find($id);
        $action = route('team.update', $data->id);
        return view('admin/team/teamform', compact('data','title', 'action'));
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
        // $data->url_segment = Str::slug($data->name.'-'.$data->id, '-');
        // $data->save();

        return redirect('admin/team')->with('alert', 'Data Edited...!');
    }

    public function destroy_team($id)
    {
        $data = Team::find($id);
        if ($data->photo != NULL) {
            $myFile = "public/image/team/".$data->photo;
            unlink($myFile);
        }
        $data->delete();
        return redirect('admin/team')->with('alert', 'Data Deleted...!');
    }

    public function index_slide(){
        if(Session::get('login')){
            $title = "Slide";
            $slide = Slide::all()->sortByDesc('id');
            return view('admin/slide/slide', compact('slide','title'));
        }else{
            return redirect('auth');
        }
    }

    public function add_slide()
    {
        $title = "Add";
        $action = route('slide.store');
        return view('admin/slide/slideform', compact('title', 'action'));
    }

    public function store_slide(Request $request)
    {
        if ($request->file('photo')) {
            $file    = $request->file('photo');
            $ext     = $file->getClientOriginalExtension();
            $newName = rand(100000,1001238912).".".$ext;
            $file->move('public/image/slide',$newName);
        }else{
            $newName = NULL;
        }

        $data = [
            'title'   => $request->get('title'),
            'url'     => $request->get('url'),
            'content' => $request->get('content'),
            'expired' => $request->get('expired'),
            'is_show' => 1,
            'photo'   => $newName
        ];
        
        $data = Slide::create($data);
        $data->url_segment = Str::slug($data->title.'-'.$data->id, '-');
        $data->save();
        return redirect('admin/slide')->with('alert', 'Data Added...!');
    }

    public function show_slide($id)
    {
        $title = "Edit";
        $data  = Slide::find($id);
        $action = route('slide.update', $data->id);
        return view('admin/slide/slideform', compact('data','title', 'action'));
    }

    public function active_slide($id, $show)
    {
        $data = Slide::find($id);
        if ($show == 1) {
            $data->is_show = 1;
        }else{
            $data->is_show = 0;
        }
        $data->save();
        return response()->json($data);
    }

    public function update_slide(Request $request, $id)
    {
        $data = Slide::find($id);

        if ($request->file('photo')) {
            $myFile = "public/image/slide/".$data->photo;
            unlink($myFile);

            $file = $request->file('photo');
            $ext = $file->getClientOriginalExtension();
            $newName = rand(100000,1001238912).".".$ext;
            $file->move('public/image/slide',$newName);

            $newdata = [ 'photo' => $newName ];
            $data->update($newdata);
        }

        $newdata = [
            'title'   => $request->get('title'),
            'expired' => $request->get('expired'),
            'url'     => $request->get('url'),
            'content' => $request->get('content')
        ];

        $data->update($newdata);
        $data->url_segment = Str::slug($data->title.'-'.$data->id, '-');
        $data->save();
        return redirect('admin/slide')->with('alert', 'Data Edited...!');
    }

    public function destroy_slide($id)
    {
        $data = Slide::find($id);
        if ($data->photo != NULL) {
            $myFile = "public/image/slide/".$data->photo;
            unlink($myFile);
        }
        $data->delete();
        return redirect('admin/slide')->with('alert', 'Data Deleted...!');
    }


    public function index_promo(){
        if(Session::get('login')){
            $title = "Promo";
            $promo = Promo::all()->sortByDesc('id');
            return view('admin/promo/promo', compact('promo','title'));
        }else{
            return redirect('auth');
        }
    }

    public function add_promo()
    {
        $title = "Add";
        $action = route('promo.store');
        return view('admin/promo/promoform', compact('title', 'action'));
    }

    public function store_promo(Request $request)
    {
        if ($request->file('photo')) {
            $file    = $request->file('photo');
            $ext     = $file->getClientOriginalExtension();
            $newName = rand(100000,1001238912).".".$ext;
            $file->move('public/image/promo',$newName);
        }else{
            $newName = NULL;
        }

        $data = [
            'title'   => $request->get('title'),
            'url'     => $request->get('url'),
            'content' => $request->get('content'),
            'expired' => $request->get('expired'),
            'is_show' => 1,
            'photo'   => $newName
        ];
        
        $data = Promo::create($data);
        $data->url_segment = Str::slug($data->title.'-'.$data->id, '-');
        $data->save();
        return redirect('admin/promo')->with('alert', 'Data Added...!');
    }

    public function show_promo($id)
    {
        $title = "Edit";
        $data  = Promo::find($id);
        $action = route('promo.update', $data->id);
        return view('admin/promo/promoform', compact('data','title', 'action'));
    }

    public function active_promo($id, $show)
    {
        $data = Promo::find($id);
        if ($show == 1) {
            $data->is_show = 1;
        }else{
            $data->is_show = 0;
        }
        $data->save();
        return response()->json($data);
    }

    public function update_promo(Request $request, $id)
    {
        $data = Slide::find($id);

        if ($request->file('photo')) {
            $myFile = "public/image/promo/".$data->photo;
            unlink($myFile);

            $file = $request->file('photo');
            $ext = $file->getClientOriginalExtension();
            $newName = rand(100000,1001238912).".".$ext;
            $file->move('public/image/promo',$newName);

            $newdata = [ 'photo' => $newName ];
            $data->update($newdata);
        }

        $newdata = [
            'title'   => $request->get('title'),
            'expired' => $request->get('expired'),
            'url'     => $request->get('url'),
            'content' => $request->get('content')
        ];

        $data->update($newdata);
        $data->url_segment = Str::slug($data->title.'-'.$data->id, '-');
        $data->save();
        return redirect('admin/promo')->with('alert', 'Data Edited...!');
    }

    public function destroy_promo($id)
    {
        $data = Promo::find($id);
        if ($data->photo != NULL) {
            $myFile = "public/image/promo/".$data->photo;
            unlink($myFile);
        }
        $data->delete();
        return redirect('admin/promo')->with('alert', 'Data Deleted...!');
    }

    
    public function index_treatment(){
        if(Session::get('login')){
            $title = "Treatment";
            $treatment = Treatment::all()->sortByDesc('id');
            return view('admin/treatment/treatment', compact('treatment','title'));
        }else{
            return redirect('auth');
        }
    }

    public function add_treatment()
    {
        $title = "Add";
        $action = route('treatment.store');
        return view('admin/treatment/treatmentform', compact('title', 'action'));
    }

    public function store_treatment(Request $request)
    {
        if ($request->file('photo')) {
            $file    = $request->file('photo');
            $ext     = $file->getClientOriginalExtension();
            $newName = rand(100000,1001238912).".".$ext;
            $file->move('public/image/treatment',$newName);
        }else{
            $newName = NULL;
        }

        $data = [
            'name'  => $request->get('name'),
            'desc'  => $request->get('desc'),
            'photo' => $newName
        ];
        
        $data = Treatment::create($data);
        $data->url_segment = Str::slug($data->name.'-'.$data->id, '-');
        $data->save();

        return redirect('admin/treatment')->with('alert', 'Data Added...!');
    }

    public function show_treatment($id)
    {
        $title = "Edit";
        $data  = Treatment::find($id);
        $action = route('treatment.update', $data->id);
        return view('admin/treatment/treatmentform', compact('data','title', 'action'));
    }

    public function update_treatment(Request $request, $id)
    {
        $data = Treatment::find($id);

        if ($request->file('photo')) {
            $myFile = "public/image/treatment/".$data->photo;
            unlink($myFile);

            $file = $request->file('photo');
            $ext = $file->getClientOriginalExtension();
            $newName = rand(100000,1001238912).".".$ext;
            $file->move('public/image/treatment',$newName);

            $newdata = [ 'photo' => $newName ];
            $data->update($newdata);
        }

        $newdata = [
            'name' => $request->get('name'),
            'desc' => $request->get('desc')
        ];

        $data->update($newdata);

        $data->url_segment = Str::slug($data->name.'-'.$data->id, '-');
        $data->save();

        return redirect('admin/treatment')->with('alert', 'Data Edited...!');
    }

    public function destroy_treatment($id)
    {
        $data = Treatment::find($id);
        if ($data->photo != NULL) {
            $myFile = "public/image/treatment/".$data->photo;
            unlink($myFile);
        }
        $data->delete();
        return redirect('admin/treatment')->with('alert', 'Data Deleted...!');
    }

}
