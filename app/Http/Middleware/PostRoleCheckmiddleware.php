<?php

namespace App\Http\Middleware;

use App\Models\Post;
use Closure;
use Illuminate\Http\Request;

class PostRoleCheckmiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {


    
        //check current user is premium user
        //check current user is admin or not
        //check that post is current user's post
      
        //or gate
        //post id(post-id ,user-id)
        
        //currentuser-id == authorid
        $id=request('id');//delete or update post id
        $authorId=Post::find($id)->user_id;
        



        if(auth()->user()->isPremium=="1" || auth()->user()->isAdmin=="1" || auth()->user()->id==$authorId){
            return $next($request);//delete update (posts)
        }
        else{
            return redirect()->route('home')->with('errors','Yor are not premium or admin');
        }
    }
}
