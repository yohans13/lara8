<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class mailController extends Controller
{
    public function sendmail(){

        $details = [
            'title'=>'this is my first mail',
            'body'=>'this is my first mail body in laravel framework.'
        ];

        Mail::to("decamyoyo3@gmail.com")->send(new testMail($details));
        return "Email Send";
    }
}
