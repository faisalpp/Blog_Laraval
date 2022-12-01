<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\message;

class ContactController extends Controller
{
    public function index(){
        try{
        $title = "Contact";
        return view('contact')->with(compact('title'));
        }catch(\Exception $e){
            return abort(404);
        }
    }

    public function message(Request $request){
     $request->validate(
      ['name'=>'required',
       'email'=>'required|email',
       'message'=>'required'
       ]
     );

     try{
     $message = new message;
     $message->name = $request['name'];
     $message->email = $request['email'];
     $message->message = $request['message'];
     $message->save();
     return view('contact');
     }catch(\Exception $e){
        return abort(500);
     }
    }
}
