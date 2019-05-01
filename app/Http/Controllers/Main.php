<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Config;
use App\Models\Consultation;
use App\Models\Event;
use App\Models\Member;
use App\Models\Profile;
use App\Models\Service;
use App\Models\Slide;
use App\Models\Team;
use App\Models\Treatment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;
use Mail;
use Illuminate\Support\Facades\Session;

class Main extends Controller
{
    public function __construct()
    {
        $profile = Profile::find(1);
        $config = Config::find(1);

        View::share('profile', $profile);
        View::share('config', $config);

        if(Session::get('IsLogin')){
            $member = Member::find(Session::get('MemberID'));
            View::share('CurrentMember', $member);
        }

    }

    //
    function index(){
        $title = "Home";
        $slide = Slide::where('is_show', 1)->get();
        $promo = Slide::where('is_show', 0)->get();

        $blog = Blog::all()->take(3)->sortByDesc("created_at");
        $treatment = Treatment::all()->take(3)->sortByDesc("created_at");
        $team = Team::all();
        $service = Service::all();

        return view('main/index', compact('title','slide','blog','treatment','team','service','promo'));
    }



    public function sendActivationMail($user)
    {

        if ($user->status) {
            return;
        }


        $link = route('member.activate', $user->activation_code);
        $message = sprintf('Activate account <a href="%s">%s</a>', $link, $link);

        Mail::raw($message, function ($m) use ($user) {
            $m->from('info@royaldiamond.com', 'Royal Diamond');
            $m->to($user->email, $user->name)->subject('Activate account!');
        });


    }

    protected function getToken()
    {
        return hash_hmac('sha256', str_random(40), config('app.key'));
    }

    function activateMember ($token){
        $member = Member::where('activation_code', $token)->first();

        if($member){
            $member->status = 1;
            $member->save();
            echo "Success, Your Account is Active";
        }
    }


    function doLogin(Request $request){
        $data = Member::where('Email', $request->post('Email'))->first();
        if($data){
            if($data->status == 0){
                echo json_encode(array(
                    "Code" => 404,
                    "Data" => "Gagal, akun anda belum active"
                ));
                return;
            }

            if(Hash::check($request->post('Password'),$data->password)){
                $Session = [
                    'MemberID'       => $data->id,
                    'Email' => $data->email,
                    'IsLogin'    => TRUE
                ];
                Session::put($Session);

            }else{
                echo json_encode(array(
                    "Code" => 404,
                    "Data" => "Gagal, Silahkan check email atau password"
                ));
                return;
            }
        }else{
            echo json_encode(array(
                "Code" => 404,
                "Data" => "Gagal, anda belum terdaftar"
            ));
            return;
        }
    }

    function doLogout(){

    }

    function doRegister(Request $request){
        $member = Member::where('email', $request->post('Email'))->first();

        if($member ){
            if($member->status == 0){
                $member->delete();
            }else{
                echo json_encode(array(
                    "Code" => 404,
                    "Data" => "Email anda telah terdaftar"
                ));
                return;
            }
        }

        $data = [
            'name'     => $request->post('Name'),
            'email'    => $request->post('Email'),
            'gender'   => $request->post('Gender'),
            'activation_code' => $this->getToken(),
            'status' => 0,
            'password' => Hash::make($request->post('Password')),
            'address'  => $request->post('Address'),
        ];

        $data = Member::create($data);

        $this->sendActivationMail($data);

        echo json_encode(array(
            "Code" => 200,
            "Data" => "Sukses, Silahkan check email untuk verifikasi"
        ));
        return;
    }


    function blog(){
        $title = "Blog";
        $blog = Blog::Paginate(3);

        return view('main/blog/index', compact('title','blog'));
    }

    function blogdetail($slug){
        $title = "Blog";
        $blog = Blog::where('url_segment', $slug)->first();

        return view('main/blog/detail', compact('title','blog'));
    }

    function event(){
        $title = "Event";
        $event = Event::Paginate(1);

        return view('main/event/index', compact('title','event'));
    }

    function eventdetail($slug){
        $title = "Event";
        $event = Event::where('url_segment', $slug)->first();

        return view('main/event/detail', compact('title','event'));
    }

    function promo(){
        $title = "Promo";
        $promo = Slide::all();

        return view('main/promo/index', compact('title','promo'));
    }

    function promodetail($slug){
        $title = "Promo";
        $slide = Slide::where('url_segment', $slug)->first();

        return view('main/promo/detail', compact('title','slide'));
    }

    function aboutus(){
        $title = "About Us";
        $team = Team::all();
        $service = Service::all();
        return view('main/aboutus/index', compact('title','team','service'));
    }

    function contactus(){
        $title = "Contact Us";
        $action = route('contactus.addconsult');
        return view('main/contactus/index', compact('title','action'));
    }

    public function addconsult(Request $request){

        $data = [
            'Name'  => $request->post('Name'),
            'Phone'  => $request->post('Phone'),
            'Email'  => $request->post('Email'),
            'DateTime'  => $request->post('DateTime'),
            'Comment'  => $request->post('Comment'),
        ];

        $data = Consultation::create($data);
        $data->save();

       echo json_encode(array(
            "Code" => 200,
            "Data" => "Sukses"
       ));
       return;
    }

    function treatment(){
        $title = "Treatment";
        $treatment = Treatment::all();

        return view('main/treatment/index', compact('title','treatment'));
    }

    function treatmentdetail($slug){
        $title = "Treatment";
        $treatment = Treatment::where('url_segment', $slug)->first();

        return view('main/treatment/detail', compact('title','treatment'));
    }
}
