<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
   public function index(){
       return view('login');
   }

   public function loginSubmit(request $req){

    $validateData=$req->validate([

        'email'=>'required|email',
        'password'=>'required|min:8|max:12'

    ]);
       $email=$req->input('email');
     

    $password=$req->input('password');
    return $email."<br> ".$password."<br>";
}
}
