<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use App\Models\User;
use GuzzleHttp\RetryMiddleware;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    function index(){
        return view("admin.index");
    }

    function manage_premium_users(){
        $users=User::all();
        return view('admin.manage-premium-users',['users'=>$users]);
    }
    function deleteUser($id){
        //find the delete user by id
        $delete_user=User::find($id);

        //delete that data
        $delete_user->delete();

        //return back with message;
        return back()->with('message',"$delete_user->name 's data is deleted");
    }
    

    function editUser($id){
        $update_user=User::find($id);

        return view('admin.editUser',['update_user'=>$update_user]);
    }
    function updateUser($id){
        $validation=request()->validate([
        'username'=>'required',
        'email'=>'required',

        ]);

        if($validation){

            $updateUser=User::find($id);
            $updateUser->name=request('username');
            $updateUser->email=request('email');
            $updateUser->isAdmin=request('isAdmin');
            $updateUser->isPremium=request('isPremium');
            $updateUser->update();

            return redirect()->route('admin.manage_premium_users')->with('message',"$updateUser->name 's data have been updated");
        }
        else{
            return back()->withErrors($validation);
        }
        

      
    }
    function contact_messages(){

        $messages=ContactMessage::latest()->get();
        return view('admin.contact-messages',['messages'=>$messages]);
    }
}
