<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sessionController extends Controller
{
    public function getSessionData(Request  $req){
        if($req->session()->has('name'))
        {
            echo $req->session()->get('name');
        }
        else 
        {
            echo "No data in the session";
        }
    }

    public function storeSessionData(Request $req){
            $req->session()->put('name','Yohan');
            echo "Plan has to be added to the session";
    }

    public function deleteSessionData(Request $req)
    {
        $req->session()->forget('name');
        echo "Data hass been remove from session";
    }
}
