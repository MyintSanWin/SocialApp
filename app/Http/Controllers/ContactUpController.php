<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactUpController extends Controller
{
    //
    function post_contact_message(){

        //validation
       $validation= request()->validate([
            'username'=>'required',
            'email'=>'required',
            'message'=>'required'
        ]);
        if($validation)
        {
             // get input dagta form input form
        
            $username=request('username');
            $email=request('email');
            $text=request('message');
           
            //save that
            $message=new ContactMessage();
            $message->username=$username;
            $message->email=$email;
            $message->messages=$text;
            $message->save();
            return back()->with("message","Message sent to admin");
        }
        else{
            return back()->withErrors($validation);
        }
       
        
    }
    function deleteMessage($id){

        //find that delete data in database by id
       $delete_message=ContactMessage::find($id);
       //delete that data
       $delete_message->delete();

       //return back
       return back()->with("message","Message Deleted");

    }
    function editMessage($id){
        $updateData=ContactMessage::find($id);


        return view('admin.editMessage',['updateData'=>$updateData])->with("message","Data is updated");
    }
    function updateMessage($id){
        //validation

        $validation=request()->validate([
            'username'=>'required',
            'email'=>'required',
            'message'=>'required',

        ]);
        if($validation){
            
              //fint the data in db by id
        $updateData=ContactMessage::find($id);

        
        //override that data
        $updateData->username=request('username');
        $updateData->email=request('email');
        $updateData->messages=request('message');
        
      


        //update that data
        $updateData->update();
          //return back with message
        return back()->with('message',"Data is updated");
        }
        else{
            return back()->withErrors($validation);
        }
      


      

       
    }
}
