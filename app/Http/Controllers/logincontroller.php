<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\registeruser;
use Hash;
class logincontroller extends Controller
{


 
    function LoginData(Request $req){

        $req -> validate([
            'password' => 'required ',
            'username' => 'required'
        ]);

        $user=registeruser::where('username',$req->username)->first();
        if($user){
        if($user->password == $req->password){  
                return redirect('index');
    }
    else{
               return redirect('/')->with('error', 'Please enter correct login credentials' );;
    }
}   
}
    function RegisterData(Request $req){

        $req -> validate([
            'username' => 'required | min:5 | max:10 | unique:registerusers',
            'password' => 'required | size:8  ',
            'email' => 'required| email | unique:registerusers',
            'confirm_password' => 'required | same:password'

        ]);

        $registeruser = new registeruser();
        $registeruser->Email = $req->email;
        $registeruser->username = $req->username;
        $registeruser->password =$req->password;

        $registeruser->save();


        return redirect('/');
    }
}
