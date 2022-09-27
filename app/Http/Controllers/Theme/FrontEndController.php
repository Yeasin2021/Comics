<?php

namespace App\Http\Controllers\Theme;

use App\Http\Controllers\Controller;
use App\Models\AboutMe;
use App\Models\Subscriber;
use App\Models\Slider;
use Illuminate\Http\Request;
use App\Repositories\Frontend\FrontEndInterface;
use Illuminate\Support\Facades\Mail;
use App\Mail\FrontEndSubscriber;
use Exception;
use Illuminate\Support\Facades\Validator;

//use App\Repositories\AboutInterface;

class FrontEndController extends Controller
{


    public $frontEndInterface;
   
    public function __construct(FrontEndInterface $frontEndInterface)
    {
        $this->frontEndInterface  =  $frontEndInterface;
        
    }


    
    public function index(){
        
        $slider = $this->frontEndInterface->frontEndSlider();
        $data = $this->frontEndInterface->frontEndAboutMe();
        $blog = $this->frontEndInterface->frontEndBlog();
        $comics = $this->frontEndInterface->frontEndComics();

        
        return view('theme.app',compact('slider','data','blog','comics'));
    }

    
    public function subscriberMail(Request $request){


        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|unique:subscribers,subscriber_email',
            'subject' => 'required',
            'message' => 'required',
           
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

            $details = [
                'subscriber_name' => $request->name,
                'subscriber_email' => $request->email,
                'subject' => $request->subject,
                'message' => $request->message,
            ];
    
            Subscriber::create([
                'subscriber_name' => $request->name,
                'subscriber_email' => $request->email,
                'subject' => $request->subject,
                'message' => $request->message
            ]);
    
            Mail::to('yeasindeveloper@gmail.com')->send(new FrontEndSubscriber($details));
    
            toastr()->success("Your Mail Has Been Submitted !! ");
    
            return redirect()->route('front-home');

        }catch(Exception $error){
            toastr()->error($error->getMessage());
            return redirect()->back();
        }

    }
   


}
