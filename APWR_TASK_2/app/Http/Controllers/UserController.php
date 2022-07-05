<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alluser;


class UserController extends Controller
{
    //
    public function user_register() {
        return view('page.user_register');
    }


    public function user_registersubmit(Request $req) {
     
        $this->validate($req,
    
        [
            'user1_name'=>'required|min:5|max:20|unique:users',
            'user1_email'=>'required|email',
            'user1_gender'=>'required',
            'user1_password'=>'required|min:2',
            'user1_com_password'=>'required|same:user1_password'

        ],
        [
            'user1_name.required'=> 'Please Provide username'
        ]
                        
    
    
    
    
    );  
    
    
    // Admin came from Model
    $us = new Alluser(); 
    $us->user1_name = $req->user1_name;
    $us->user1_email = $req->user1_email;
    $us->user1_password = $req->user1_password;
    //$ad->User_location = $req->user_location;
    $us->save(); // runs query in database

          


        return "<h1>This is $req->user1_name</h1>";
    // $req->validate(
    //         [
    //              'user1_name'=>'required|min:5|max:20|alpha',
    //              'user1_email'=>'required|email',
    //              'user1_gender'=>'required',
    //              'user1_password'=>'required|min:2',
    //              'user1_com_password'=>'required|same:user1_password'

    //         ]
    //         );
    //         return "<h1>This is $req->user_name</h1>";

}
}