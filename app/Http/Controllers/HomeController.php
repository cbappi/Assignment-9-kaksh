<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view("pages.home");
    }
    public function aboutme(){
        return view("pages.aboutme");
    }
    public function projects(){
        return view("pages.projects");
    }
    public function contact(){
        return view("pages.contact");
    }
}
