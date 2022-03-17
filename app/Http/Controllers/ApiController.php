<?php

namespace App\Http\Controllers;

use App\Models\AboutMe;
use App\Models\Blog;
use App\Models\Comics;
use App\Models\Count;
use App\Models\Profile;
use App\Models\Slider;
use App\Models\Subscriber;
use Illuminate\Http\Request;
// use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ApiController extends Controller
{
    public function getData(){

        $data['slider'] = Slider::all();
        $data['about'] = AboutMe::first();
        $data['blog'] = Blog::all();
        $data['comics'] = Comics::all();
        $data['profile'] = Profile::first();
        $data['subscribe'] = Subscriber::all();
        $data['count'] = Count::first();
        return response()->json([
            'Success' => "Data Get Successfully",
            'data'    => $data,
        ]);
    }



    public function login(Request $request){
        $validator = Validator::make($request->all(),[
            'email' => ['required'],
            'password' => ['required'],
        ]);
        if($validator->fails()){
            return response()->json([
                'err_message' => 'validation error',
                'data' => $validator->errors(),
            ],422);
        }else{
            $req_data  = request()->only('email','password');
        if(Auth::attempt($req_data)){
            $user = Auth::user();
            $data['access_token'] = $user->createToken('accessToken')->accessToken;
            $data['user'] = $user;
            return response()->json($data,200);
        }else{
            $data['message'] = 'user not exits';
    
            $data['data']['password']= ['passowrd is incorrect'];
            return response()->json($data,401);
            }
        }
    
      }
    
      public function logout(){
        Auth::user()->token()->revoke();
        return response()->json([
            'message' => 'logout',
        ], 200);
    }










}
