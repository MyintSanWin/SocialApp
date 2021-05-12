<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //delete
    function deletePost($id){
        // get delete post by id
        $delete_post=Post::find($id);
        $delete_post->delete();
       
         return redirect()->route('home')->with('message',"deleted");
        
    }

    //update
    function updatePost($id){
        //get input data form edit blade form
       $title= request('title');
       $image=request('image');
       $content=request('content');
       
       //require update id
       $updateData=Post::find($id);
       $updateData->title=$title;
       $updateData->content=$content;


       //image
      if($image){
         $imageName=uniqid()."_".$image->getClientOriginalName();
         $image->move(public_path('images/posts'),$imageName);
         $updateData->image=$imageName;
        }
         $updateData->update();
         return back()->with('message',"data Updated");
      
        //update data in database


        //return back


        // return $id;
    }
    //insert
    function create_post(){
       
        $validation=request()->validate([
            'title'=>'required',
            'image'=>'required',
            'content'=>'required'
        ]);
        if($validation){
            //save  data to database
            $title=request('title');
            $image=request('image');//image file
            $content=request('content');
            $post=new Post();
            //take user id from user table
            $post->user_id=auth()->user()->id;
            $post->title=$title;
            $imageName=uniqid()."_".$image->getClientOriginalName();
            $image->move(public_path('images/posts/'),$imageName);
            $post->image=$imageName;
            $post->content=$content;
            $post->save();
            return redirect()->route('home')->with("message", "Post added");
        }
        else{
            return back()->withErrors($validation);
        }
      
    }

}
