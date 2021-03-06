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
use App\Models\Promo;
use App\Models\Team;
use App\Models\Treatment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;
use Mail;
use Illuminate\Support\Facades\Session;
use DB;
use App\Quotation;

class Main extends Controller
{
    public function __construct()
    {
        $profile = Profile::find(1);
        $config = Config::find(1);

        View::share('profile', $profile);
        View::share('config', $config);
    

        $this->middleware(function ($request, $next) {
            $islogin = Session::get('IsLogin');
            if($islogin){
                $member = Member::find(Session::get('MemberID'));
                View::share('CurrentMember', $member);
            }
            return $next($request);
        });

    }

    function profilemember(){
        $title = "Profile";
        $member = "";
        $islogin = Session::get('IsLogin');
        if($islogin){
            $member = Member::find(Session::get('MemberID'));
        }

        return view('main/member/profile', compact('member','title'));
    }

    function doProfile(Request $request){
        $data = Member::find($request->post('ID'));

        $data->name = $request->post('Name');
        $data->email = $request->post('Email');
        $data->address = $request->post('Address');
        $data->save();

        echo json_encode(array(
            "Code" => 200,
            "Data" => "Sukses"
        ));
        return;
    }

    function doForgot(Request $request){
        $data = Member::where('Email', $request->post('Email'))->first();
        
        if($data){
            $this->sendForgotPassMail($data);
            echo json_encode(array(
                "Code" => 200,
                "Data" => "Sukses"
            ));
            return;
        }else{
            echo json_encode(array(
                "Code" => 404,
                "Data" => "Member Not found"
            ));
            return;
        }
        
       

    }

    //
    function index(){
        $title = "Home";
        $slide = Slide::where('is_show', 1)->get();
//        dd($slide);
        $slide = Slide::where( 'is_show', '=', 1 )
            ->whereDate('expired', '>', date('Y-m-d'))
            ->get();

//        dd($slide);

        $promo = Promo::where('is_show', 1)->get();

        $blog = Blog::all()->take(3)->sortByDesc("created_at");
        $treatment = Treatment::all()->take(3)->sortByDesc("created_at");
        $team = Team::all();
        $service = Service::all();

        return view('main/index', compact('title','slide','blog','treatment','team','service','promo'));
    }

    public function sendConsultMail($consult)
    {

        $data = [
            'pesan' => "Anda mendapat medapatkan pesan untuk request consultation di web Royal Diamond",
            'consult' => $consult,
        ];
        $beautymail = app()->make(\Snowfire\Beautymail\Beautymail::class);
        $beautymail->send('mail.consult', $data, function($message) use ($consult)
        {
            $message
                ->from('info@royaldiamondclinic.com',"Royal Diamond")
                ->to("info@royaldiamondclinic.com", "Royal Diamond")
                ->cc($consult->email,$consult->name)
                ->subject("Consultation Request");
        });

    }



    public function sendActivationMail($user)
    {

        if ($user->status) {
            return;
        }


        $link = route('member.activate', $user->activation_code);

        $data = [
            'link' => $link,
            'pesan' => "ini adalah email konfirmasi member Royal Diamond Clinic, silahkan klik tombol dibawah untuk confirmasi",
        ];
        $beautymail = app()->make(\Snowfire\Beautymail\Beautymail::class);
        $beautymail->send('mail.confirm', $data, function($message) use ($user)
        {
            $message
                ->from('info@royaldiamondclinic.com',"Royal Diamond")
                ->to($user->email, $user->name)
                ->subject("Activation Member");
        });

    }

    function forgotpassword($email){
        $title = "Forgot Password";
        $member = Member::where('Email', $email)->first();
        return view('main/member/forgot', compact('member','title'));
    }

    public function sendForgotPassMail($user)
    {

        if ($user->status) {
            return;
        }

        $link = route('member.forgotpassword', ['email' =>$user->email ]);

        $data = [
            'link' => $link,
            'pesan' => "ini adalah permintaan lupa password,silahkan link dibawah",
        ];
        $beautymail = app()->make(\Snowfire\Beautymail\Beautymail::class);
        $beautymail->send('mail.forgot', $data, function($message) use ($user)
        {
            $message
                ->from('info@royaldiamondclinic.com',"Royal Diamond")
                ->to($user->email, $user->name)
                ->subject("Forgot Password");
        });
        
        //dd($beautymail);
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
                    'MemberID' => $data->id,
                    'Email'    => $data->email,
                    'IsLogin'  => TRUE
                ];



                Session::put($Session);

                echo json_encode(array(
                    "Code" => 200,
                    "Data" => "Success"
                ));
                return;
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
        Session::forget('IsLogin');
        Session::forget('MemberID');
        Session::forget('Email');
        if(!Session::has('IsLogin') && !Session::has('MemberID') && !Session::has('Email'))
        {
            return redirect()->route('home');
        }
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
        $blog->view+=1;
        $blog->save();
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
        $event->view+=1;
        $event->save();
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
            'name'  => $request->post('Name'),
            'phone'  => $request->post('Phone'),
            'email'  => $request->post('Email'),
            'datecall'  => $request->post('DateTime'),
            'comment'  => $request->post('Comment'),
        ];

        $data = Consultation::create($data);
        $data->save();

        $this->sendConsultMail($data);

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
