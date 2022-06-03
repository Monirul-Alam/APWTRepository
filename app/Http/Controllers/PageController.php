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
        return view('page.service'); 
    }

    public function teams () {
        return view('page.teams'); 
    }

    public function home () {
        return view('page.home'); 
    }
}
