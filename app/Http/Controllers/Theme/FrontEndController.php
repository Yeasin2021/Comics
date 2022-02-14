<?php

namespace App\Http\Controllers\Theme;

use App\Http\Controllers\Controller;
use App\Models\AboutMe;
use App\Models\Slider;
use Illuminate\Http\Request;
use App\Repositories\Frontend\FrontEndInterface;
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

    

   


}
