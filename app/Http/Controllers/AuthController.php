<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //login
    function login(){
        return view('auth.login');
    }
    function post_login(){
        //validateion our input-field
        $validation=request()->validate([
            "email"=>"required",
            "password"=>"required",

        ]);
        if($validation)
        {
           // if authentication is success or not
           $auth=Auth::attempt(["email"=>$validation['email'],"password"=>$validation['password']]);
           if($auth){
            return redirect()->route('home');

           }
           return back()->with("error","Authentication Failed Try again");

            //else return back with auth failed error
        }
        else{
            return back()->withErrors($validation);
        }
    }
    //register
    function register(){
        return view('auth.register');
    }
    function post_register(){
        // $username=request("username");
        $validateion=request()->validate([
            "username"=>"required",
            "email"=>"required",
            "password"=>"required  ||min:8 ",
            "image"=>"required",


        ]);
            if($validateion){
                //move image file to public path
                $image=request("image");
                $image_name=uniqid()."_".$image->getClientOriginalName();//save to database
                $image->move(public_path('images/profiles'),$image_name);
                $password=$validateion['password'];
                            // database save to user table
                $user=new User();
                $user->name=$validateion['username'];
                $user->email=$validateion['email'];
                $user->password=Hash::make($password);
                $user->image=$image_name;
                $user->save();
                //take 1second or 2seconds to save a data in db
                if(Auth::attempt(["email"=>request('email'),"password"=>request('password')])){
                    return redirect()->route('home');
                }
                
            }
            else
            {
                return back()->withErrors($validateion);
            }
        // return $username;
    }
    
    function post_userProfile(){
        $name=request('name');
        $email=request('email');
        $image=request('image');//file
        $old_password=request('oldpassword');
        $new_password=request('newpassword');


        //if user is not select image and not change password
        //add name and email to current user'id
        $id=auth()->user()->id;
        $current_user=User::find($id);
        $current_user->name=$name;
        $current_user->email=$email;
        

        if($image){
           // move file to public path
        $imageName=uniqid()."_".$image->getClientOriginalName();
        $image->move(public_path('images/profiles/'), $imageName);
        //return $imageName;
        //    save image name to current user id
        $current_user->image=$imageName;
        $current_user->update();
        return back()->with('success','image changed');
        }

        if($old_password && $new_password){
            //check user input old pw is same with current use pw in db
            if (Hash::check($old_password,$current_user->password)){
                 //let user to change new pw
                 $current_user->password=Hash::make($new_password);
                 $current_user->update();
                 return back()->with('success','password changed');
            } 
            else{
               return back()->with('error','old password is not changed');
            }
            //if same

           
        }
        $current_user->update();
        return back();
        // dd($name, $email, $image, $old_password, $new_password);

    }


    function logout(){
        Auth::logout();

        return redirect()->route('login');

    }
}
