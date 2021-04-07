<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uploadController extends Controller
{
    public function uploadForm(){
            return view('upload');
    }


    public function uploadfile(Request $req){
        $req->file->store('public/img');
        return "File has been upload successfully";
    }
}
