<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    // Show Register/Create Form
    public function create() {
        return view('users.register');
    }

    // Creat New User
    public function store(Request $request) {
        $formFields = $request->validate([
            'name' =>'required|min:3',
            'email'=>'required|email', Rule::unique('users','email'),
            'password' => 'required |confirmed |min:6'
        ]);
        // hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        // Create user
        $user = User::create($formFields);

        //Login
        auth()->login($user);
        return redirect('/')->with('message','User created and logged in');

    }
    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
         $request->session()->regenerateToken();
        return redirect('/')->with('message','You have been logged out!');

    }

    // Show Login Form
    public function login() {
        return view('users.login');
    }

    // Authenticate User
    public function authenticate(Request $req)
    {
        $formVal = $req->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required'
        ]);

        $getUser =  $formVal["email"];

        $user = User::where("email", $getUser)->first();

        if ($user->type == "admin") {
            if (auth()->attempt($formVal)) {
                $req->session()->regenerate();

                Session::flash('msg', 'Logged in Successfully');
                return redirect('/admin');
            } else {
                Session::flash('msg', 'Invalid Credentials');
                return back();
            }
        }
        if ($user->type == "user") {
            if (auth()->attempt($formVal)) {
                $req->session()->regenerate();

                Session::flash('msg', 'Logged in Successfully');
                return redirect('/');
            } else {
                Session::flash('msg', 'Invalid Credentials');
                return back();
            }
        }


    }
   

        // return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');

        
      
}
