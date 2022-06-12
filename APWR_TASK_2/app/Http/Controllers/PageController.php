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
    public function register () {
        return view('page.register'); 
    }

    public function login () {
        return view('page.login'); 
    }

    public function registersubmit (Request $req) {
        $req->validate(
            [
                 'user_name'=>'required|min:5|max:20|alpha',
                 'user_email'=>'required|email',
                 'user_gender'=>'required',
                 'user_password'=>'required|min:2',
                 'user_com_password'=>'required|same:user_password'

            ]
            );


        return "<h1>This is $req->user_name</h1>";
    }

    public function loginsubmit (Request $req) {
        $req->validate(
            [
                 'user_name1'=>'required|min:5|max:20|alpha',
                 'user_email1'=>'required|email',
                 
                 'user_password1'=>'required|min:2',
          

            ]
            );


        return "<h1>This is $req->user_name1</h1>";
    }
    public function contactsubmit (Request $req) {
        $req->validate(
            [
                 'contact_name'=>'required|min:5|max:20|alpha',
                 'contact_email'=>'required|email',
          

            ]
            );


        return "<h1>This is $req->user_name</h1>";
    }
}
