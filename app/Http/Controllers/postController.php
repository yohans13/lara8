<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;


class postController extends Controller
{
    public function getAllPost()
    {
        $post=DB::table('post')->get();
        return view('posts',compact('post'));
    }


    public function addPost (){
        return view('add-post');
    }


    public function addPostSubmit(request $req){

        $validateData=$req->validate([

            'title'=>'required',
            'body'=>'required|min:2|max:111'
    
        ]);

       DB::table('post')->insert([
            'title'=>$req->title,
            'body'=>$req->body
            ]);

            return back()->with('Post Created','Post has been created succesfully');

    }


    public function getPostById($id){
            $post=DB::table('post')->where('id',$id)->first();
            return view('single-post',compact('post'));
 
            
    }


    public function deletePost($id){
        DB::table('post')->where('id',$id)->delete();
        return back()->with('post_delected','post has been deleted succesfully');
    }

    public function updatePost($id){
                return view('');
    }
}
