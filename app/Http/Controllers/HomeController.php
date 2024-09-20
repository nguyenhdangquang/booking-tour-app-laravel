<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //HomePage
    public function home(){
        return view('home');
    }
    //aboutPage
    public function about(){
        return view('about');
    }
    //blogHomePage
    public function blogHome(){
        return view('blog-home');
    }
    //blogSinglePage
    public function blogSingle(){
        return view('blog-single');
    }
    //ContactPage
    public function contact(){
        return view('contact');
    }
    //ElementPage
    public function elements(){
        return view('elements');
    }
    //HotelsPage
    public function hotels(){
        return view('hotels');
    }
    //InsurancePage
    public function insurance(){
        return view('insurance');
    }
    //Packages Page
    public function packages(){
        return view('packages');
    }
}
