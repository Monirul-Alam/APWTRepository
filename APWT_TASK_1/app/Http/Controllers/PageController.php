<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function about () {
        return view('page.about'); 
    }

    public function contact () {
        return view('page.contact'); 
    }

    public function service () {
        $services = ["Automation", "Chatbot", "Aritficial Intelligence"] ;
        return view('page.service')
        ->with('services', $services);
    }

    public function teams () {
        return view('page.teams'); 
    }

    public function home () {
        return view('page.home'); 
    }
}
