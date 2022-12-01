<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Hash; 
use App\Models\Admin;

class AuthController extends Controller
{
    /** 
    * @param \Illuminate\Http\Request
    * @return \Illuminate\Http\Response
    */
    
    public function loginView(){ 
      return view('login');
    }

    public function login(Request $request){  
    try{
      $user = Users::where('email',$request->email)->first();
      if($user){
       try{
        $pass = Hash::check($request->password, $user->password);
        $request->session()->put('name',$user->name);
        $request->session()->put('email',$user->email);
        $request->session()->put('role','user');
        $request->session()->flash('loginMsg','Welcome Back');
        return redirect('/');
       }catch(\Exception $e){
         return abort(401);
       }
      }
    }catch(\Exception $e){
      return abort(404);
    }
    }
    public function signupView(){
      try{
      return view('signup');
      }catch(\Exception $e){
        return abort(404);
      }
    }

  public function signup(Request $request){
   $pass = Hash::make($request['password']);
   $request->validate(
    ['name'=>'required',
     'email'=>'required|email',
     'password'=>'required']);
   
  try{
   $user = new Users();
   $user->name = $request['name'];
   $user->email = $request['email'];
   $user->password = $pass;
   $user->save();
   $request->session()->flash('newUserMsg','Account Successfully Created, Please Login to Proceed.');
   return redirect('/');
  }catch(\Exception $e){
    return view(500);
  }
  }

  public function logout(Request $request){
     $request->session()->flush();
     return redirect('/');
  }

  //Admin

  
  public function adminView(){
    return view('admin');
}

public function adminLogin(Request $request){
    try{
        $user = Admin::where('email',$request->email)->first();
        if($user){
         try{
          $pass = Hash::check($request->password, $user->password);
          $request->session()->put('name',$user->name);
          $request->session()->put('email',$user->email);
          $request->session()->put('role','admin');
          $request->session()->flash('loginMsg','Welcome Back Admin');
          return redirect('/');
         }catch(\Exception $e){
           return abort(401);
         }
        }
      }catch(\Exception $e){
        return abort(404);
      }
}

public function adminRegister(Request $request){
    $pass = Hash::make($request['password']);
    $request->validate(
     ['name'=>'required',
      'email'=>'required|email',
      'password'=>'required']);
    
   try{
    $user = new Admin();
    $user->name = $request['name'];
    $user->email = $request['email'];
    $user->password = $pass;
    $user->save();
    $request->session()->flash('newUserMsg','Account Successfully Created, Please Login to Proceed.');
    return redirect('/');
   }catch(\Exception $e){
     return view(500);
   }
}

public function adminRegView(){
  return view('adminSignup');
}

}

