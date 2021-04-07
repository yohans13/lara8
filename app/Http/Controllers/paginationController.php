<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\user;

class paginationController extends Controller
{
    public function allusers(){

        $user=User::paginate(10);
        return view('users',compact('user'));
    }
}
