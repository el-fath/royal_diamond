<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Main extends Controller
{
    //
    function index(){
        $title = "Home";
        $profile = $this->profile;
        return view('main/index', compact('title','profile'));
    }
}
