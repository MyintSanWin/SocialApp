<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Bus\UpdatedBatchJobCounts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PageController extends Controller
{
    function index(){
        $posts=Post::latest()->get();//51 ka nay 1 ko retrieve
        return view('Index',['posts'=>$posts]);
        
    }
    function showPostById($id){

        $post=Post::find($id);
        return view('user.showPosts',['post'=>$post]);
    }
   
    function editPost($id){
        $update_data=Post::find($id);
        return view('user.editPost',['update_data'=>$update_data]);
    }
   
    function createPost(){
        return view('user.Create');
    }

    function userprofile(){
        return view('user.Userprofile');
    }
    function contactUs(){
        return view('user.ContactUs');
    }

   }
