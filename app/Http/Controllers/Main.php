<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Event;
use App\Models\Service;
use App\Models\Slide;
use App\Models\Team;
use App\Models\Treatment;
use Illuminate\Http\Request;

class Main extends Controller
{
    //
    function index(){
        $title = "Home";
        $slide = Slide::all();
        $blog = Blog::all()->take(3)->sortByDesc("created_at");
        $treatment = Treatment::all()->take(3)->sortByDesc("created_at");
        $team = Team::all();
        $service = Service::all();

        return view('main/index', compact('title','slide','blog','treatment','team','service'));
    }


    function blog(){
        $title = "Blog";
        $blog = Blog::all();

        return view('main/blog/index', compact('title','blog'));
    }

    function blogdetail($slug){
        $title = "Blog";
        $blog = Blog::all();

        return view('main/blog/index', compact('title','blog'));
    }

    function event(){
        $title = "Event";
        $event = Event::all();

        return view('main/event/index', compact('title','event'));
    }

    function eventdetail($slug){
        $title = "Event";
        $event = Event::all();

        return view('main/event/index', compact('title','event'));
    }

    function promo(){
        $title = "Promo";
        $promo = Slide::all();

        return view('main/promo/index', compact('title','promo'));
    }

    function promodetail($slug){
        $title = "Promo";
        $promo = Slide::all();

        return view('main/promo/index', compact('title','promo'));
    }

    function aboutus(){
        $title = "About Us";
        $team = Team::all();
        $service = Service::all();
        return view('main/aboutus/index', compact('title','team','service'));
    }

    function contactus(){
        $title = "Contact Us";
        return view('main/contactus/index', compact('title'));
    }

    function treatment(){
        $title = "Treatment";
        $treatment = Treatment::all();

        return view('main/treatment/index', compact('title','treatment'));
    }

    function treatmentdetail($slug){
        $title = "Treatment";
        $treatment = Treatment::all();

        return view('main/treatment/index', compact('title','treatment'));
    }
}
