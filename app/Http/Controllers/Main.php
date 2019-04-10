<?php

namespace App\Http\Controllers;

use App\Models\Blog;
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
}
