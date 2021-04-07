<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use App\Models\Post;


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

    public function editPost($id){
        $post=DB::table('post')->where('id',$id)->first();
                return view('edit-post',compact('post'));
    }

    public function updatePost(Request $req)
    {
        DB::table('post')->where('id',$req->id)->update([
            'title'=>$req->title,
            'body'=>$req->body
        ]);
        return back()->with('post updated',"post has been update");
    }

    public function innerJoinCaluse(){
        $req=DB::table('users')
            ->join('post','users.id','=','post.user_id')
            ->select('users.name','post.title','post.body')
            ->get();
            return $req;
    }

    public function leftJoinCaluse(){
        $req=DB::table('users')
            ->leftJoin('post','users.id','=','post.user_id')
           
            ->get();
            return $req;
    }

    public function rightJoinCaluse(){
        $req=DB::table('users')
            ->rightJoin('post','users.id','=','post.user_id')
           
            ->get();
            return $req;
    }

    public function getAllPostUsingModel(){

        $posts=Post::all();
        return $posts;
    }
}
