<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(){
        return view('backend.profile.create');
    }

    public function profileUpdate(Request $request){

        $user = Auth::user();
        if ($request->ajax()) {
            if ($request->hasFile('file')) {
                
                    $file = $request->file('file');
                    $tempFilePath = "image/profile/";
                    $hardPath = $tempFilePath.rand(0,999999).'-g.jpg';
                    $move = $file->move($tempFilePath,$hardPath);
                   
                   $user->image =  $hardPath;
                   $user->save();
                
                return response()->json('profile updated',200);
                
        }
    }

   }

    public function contentText(Request $request){
        //$user = Auth::user();

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            
        ]);
        
        if ($validator->fails()) {

           $messages = $validator->messages();
        
                foreach ($messages->all() as $message)
                {
                    toastr()->error ( $message, 'Error');
                }
        
             return redirect()->back()->withInput();
       }

       try{
        $update = Auth::user();
            $update->update([
                'name' => $request->name,
                'email' => $request->email,
                 
            ]);
        
       
        
        toastr()->success(" Successfully Profile Updated ");
        return redirect()->route('admin.home');

        }
        catch(Exception $error){
        toastr()->error($error->getMessage());
        return redirect()->back();
        }


    }



}