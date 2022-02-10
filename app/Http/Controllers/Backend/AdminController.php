<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\AboutMe;
use App\Models\Slider;
use App\Repositories\SliderInterface;
use App\Repositories\AboutInterface;
use App\Repositories\BlogInterface;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\Console\Input\Input;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Crypt;

class AdminController extends Controller
{
    // public function adminIndex(){
    //     return view('backend.app');
    // }
    

    //Repositories 
    public $SliderInterface;
    public $AboutInterface;
    public $BlogInterface;
    
    public function __construct(SliderInterface $SliderInterface, AboutInterface $AboutInterface,BlogInterface $BlogInterface)
    {
        $this->SliderInterface  =  $SliderInterface;
        $this->AboutInterface  =  $AboutInterface;
        $this->BlogInterface  =  $BlogInterface;
    }

   
    //Repositories end 


    public function adminHome(){
        return view('backend.pages.home');
    }





    public function sliderContentShow(){
        // return dd($this->SliderInterface->show());
        $data = $this->SliderInterface->show();
        return view('backend.pages.data_table',compact('data'));
    }

    public function sliderContentForm(){
        return view("backend.pages.slider_form");
    }

    public function sliderContentAdd(Request $request){

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'designation_one' => 'required',
            'designation_two' => 'required',
            'designation_three' => 'required',
            'image' => 'required',
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

                $input = $request->all();
                if($request->hasFile('image')){
                $file = $request->file('image');
                $tempFilePath = "image/protfolio/";
                $hardPath = $tempFilePath.'profile_'.rand(0,999999).'-g.jpg';
                $move = $file->move($tempFilePath,$hardPath);
                $input['image'] = $hardPath;
               }

                $this->SliderInterface->store($input);
                toastr()->success(" Successfully Work done ");
                return redirect()->back();

        }
        catch(Exception $error){
                toastr()->error($error->getMessage());
                return redirect()->back();
        }

        
    }



    public function sliderContentUpdate(Request $request,$id){

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'designation_one' => 'required',
            'designation_two' => 'required',
            'designation_three' => 'required',
            
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

                $input = $request->all();
                if($request->hasFile('image')){
                $file = $request->file('image');
                $tempFilePath = "image/protfolio/";
                $hardPath = $tempFilePath.'profile_'.rand(0,999999).'-g.jpg';
                $move = $file->move($tempFilePath,$hardPath);
                $input['image'] = $hardPath;
               }

                $this->SliderInterface->update($input,$id);
                toastr()->success(" Successfully Updated done ");
                return redirect()->back();

        }
        catch(Exception $error){
                toastr()->error($error->getMessage());
                return redirect()->back();
        }

        
    }

    public function sliderContentEdit($id){
        $edit = $this->SliderInterface->edit(Crypt::decrypt($id));
        return view('backend.pages.edit',compact('edit'));
    }

    public function sliderContentDelete($id){
       
        $dlt = $this->SliderInterface->delete($id);
        toastr()->success("Data deleted successfully");
        return redirect()->back();
    }




    /*------------About Part Start here ------------------------- */

    public function aboutContentForm(){
        // return view('backend.pages.about.create');
        return $this->AboutInterface->aboutShow();
    }

    public function aboutContentStoreOne(Request $request){
        
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'versity' => 'required',
            'designation' => 'required',
            'graduation' => 'required',
            'address' => 'required',
            'skil' => 'required',
            'description' => 'required',
            // 'image' => 'required',
            
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


            // $input = $request->all();
            // AboutMe::create([
            //     'name' => $request->name,
            //     'email' => $request->email,
            //     'phone' => $request->phone,
            //     'versity' => $request->versity,
            // ]);
            // $this->AboutInterface->aboutStore($input);

           


            // $hardPath = AboutMe::first()->image;
            $hardPath = $this->AboutInterface->hardPath();
            if($request->hasFile('image')){
                
                $file = $request->file('image');
                $tempFilePath = "image/about-me/";
                $hardPath     = $tempFilePath.'about-image_'.rand(0,99999).'-g.jpg';
                $move         = $file->move($tempFilePath,$hardPath); 
                
            }
            
            $this->AboutInterface->aboutStore([
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'versity' => $request->versity,
                'designation' => $request->designation,
                'graduation' => $request->graduation,
                'address' => $request->address,
                'skil' => $request->skil,
                'description' => $request->description,
                'image' => $hardPath,
            ]);
            toastr()->success("Data Updated Successfully..!!");
            return redirect()->back();

        }catch(Exception $e){
            toastr()->error($e->getMessage());
            return redirect()->back();

        }
        
        
    }

    

    /*------------About Part End here ------------------------- */
    /*------------Blog Part Start here ------------------------- */

    public function blogIndex(){
        $blog = $this->BlogInterface->blogIndex();
        return view('backend.pages.blog.index',compact('blog'));
    }

    public function blogForm(){
        return view('backend.pages.blog.create');
    }
    public function blogStore(Request $request){

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'type' => 'required',
            'image' => 'required',
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

                $input = $request->all();
                if($request->hasFile('image')){
                $file = $request->file('image');
                $tempFilePath = "image/blog/";
                $hardPath = $tempFilePath.'blog'.rand(0,999999).'-g.jpg';
                $move = $file->move($tempFilePath,$hardPath);
                $input['image'] = $hardPath;
               }

                $this->BlogInterface->blogStore($input);
                toastr()->success(" Successfully Work done ");
                return redirect()->route('blog.index');

        }
        catch(Exception $error){
                toastr()->error($error->getMessage());
                return redirect()->back();
        }

    

    }


    public function blogEdit($id){
        $edit = $this->BlogInterface->blogEdit($id);
        return view('backend.pages.blog.edit',compact('edit'));
    }


    public function blogUpdate(Request $request,$id){

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'type' => 'required',
           
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

                $input = $request->all();
                if($request->hasFile('image')){
                $file = $request->file('image');
                $tempFilePath = "image/blog/";
                $hardPath = $tempFilePath.'blog'.rand(0,999999).'-g.jpg';
                $move = $file->move($tempFilePath,$hardPath);
                $input['image'] = $hardPath;
               }

                $this->BlogInterface->blogUpdate($input,$id);
                toastr()->success("Successfully Work done ");
                return redirect()->route('blog.index');

        }
        catch(Exception $error){
                toastr()->error($error->getMessage());
                return redirect()->back();
        }

    }


    public function blogDelete($id){
        $delete = $this->BlogInterface->blogDelete($id);
        toastr()->success("Successfully Work done ");
        return redirect()->back();
    }


    public function blogPublished($id){
        $this->BlogInterface->blogPublished($id);
        toastr()->success("Published");
        return redirect()->back();
    }
    public function blogUnpublished($id){
        $this->BlogInterface->blogUnpublished($id);
        toastr()->success("Unpublished");
        return redirect()->back();
    }


    // public function blogCount($id){
    //     $blog = $this->BlogInterface->singleBlogDetails($id);
    //     $this->BlogInterface->count($id);
    //     toastr()->success('count ');
    //     return redirect()->back();
    //     return view('theme.page.singleBlog',compact('blog'));
    // }

    public function singleBlogDetails($id){
        $blog = $this->BlogInterface->singleBlogDetails($id);
        $this->BlogInterface->count($id);
        return view('theme.page.singleBlog',compact('blog'));
    }






    /*------------Blog Part End here ------------------------- */

    public $link  = '';
    public function Url(Slider $slider){
        $p = Slider::find(2);
        $slug = Str::slug($p->name);
        
        $link = Url("/news",$slug);
        
        echo $link; 
       
        
    }
    public function urlTest(){
       return "ok";
    }


}
