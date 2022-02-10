<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{


    public function loginForm(){
        return view('backend.login');
    }

    public function login(Request $request){

      
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:6',
            
            
        ]);
        
        if ($validator->fails()) {

           $messages = $validator->messages();
        
                foreach ($messages->all() as $message)
                {
                    toastr()->error ( $message);
                }
        
             return redirect()->back()->withInput();
       }


        $loginData=$request->only('email','password');
        if(Auth::attempt($loginData)){
            $request->session()->regenerate();
            toastr()->success("Welcome To Admin Panel.");
          return redirect()->route('admin.home');
        }else{
         
          toastr()->error("These credentials do not match our records.");
          return redirect()->back();
      }

    }

    public function logout(){
          Auth::logout();
          toastr()->success("Logout Successful.");
          return redirect()->route('login-form');

    }
}
