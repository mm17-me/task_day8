<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //

    public function homePage(){
        return view('index');
    }


    public function servicePage(){
        return view('service');   
    }

    public function aboutPage(){
        return view('about');   
    }

    public function guardPage(){
        return view('guard');   
    }

    public function contactUsPage(){
        return view('contact');
    }
}


