<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\AppName;
use App\Models\Comics;
use App\Models\ComicsCategory;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ComicsController extends Controller
{


    public function comicsIndex(){
        $comics = Comics::all();
        return view('backend.pages.comics.index',compact('comics'));
    }
    public function comicsDescriptionView($id){
        $view = Comics::find($id);
        return view('backend.pages.comics.description',compact('view'));
    }

    public function comicsForm(){
        $comics_category = ComicsCategory::where('status',1)->get();
        return view('backend.pages.comics.create',compact('comics_category'));
    }

    public function comicsStore(Request $request){
        
        
        $validator = Validator::make($request->all(), [
            'comics_title' => 'required|unique:comics',
            'comics_link' => 'required',
            'comics_author' => 'required',
            'comics_description' => 'required',
            'comics_category_id' => 'required',
            'images' => 'required',
            // 'images.*' => 'mimes:jpg,png,jpeg,gif,svg,webp'
            
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

        $images = [];
        if($files = $request->file('images')){
            foreach($files as $item){
                $fileName = "comoices_".Str::random(10).'.'.$item->getClientOriginalExtension();
                // $hardPath = $tempFilePath.'profile_'.rand(0,999999).'-g.jpg';
                // $fileName = 'AVI_'.$request->comics_title.'_'.$request->comics_category.'_'.rand(0,999999).$item->getClientOriginalExtension();
                $item->move(public_path('image/comics_image'),$fileName);
                $images[] =  $fileName;
            }
        }
       

        Comics::create([
             'comics_title' => $request->comics_title,
             'comics_category_id' => $request->comics_category_id,
             'comics_link' => $request->comics_link,
             'comics_author' => $request->comics_author,
             'comics_description' => $request->comics_description,
             
             'image' =>  json_encode($images)
           
        ]);
        toastr()->success(" Successfully Comics Added ");
        return redirect()->route('comics-index');

        }
        catch(Exception $error){
        toastr()->error($error->getMessage());
        return redirect()->back();
        }

    }




    public function comicsEdit($id){
        $edit = Comics::find($id);
        $comics = ComicsCategory::all();
        return view('backend.pages.comics.edit',compact('edit','comics'));

    }

    

    public function comicsUpdate(Request $request,$id){
        

        $validator = Validator::make($request->all(), [
            'comics_title' => 'required',
            
            'comics_link' => 'required',
            'comics_author' => 'required',
            'comics_description' => 'required',
            'comics_category_id' => 'required',
            
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
        $update = Comics::find($id);
        $images = [];
        if($files = $request->file('images')){
            foreach($files as $item){
                $fileName = "comoices_".Str::random(10).'.'.$item->getClientOriginalExtension();
                // $hardPath = $tempFilePath.'profile_'.rand(0,999999).'-g.jpg';
                // $fileName = 'AVI_'.$request->comics_title.'_'.$request->comics_category.'_'.rand(0,999999).$item->getClientOriginalExtension();
                $item->move(public_path('image/comics_image'),$fileName);
                $images[] =  $fileName;
            }
            
        }

        if($request->file('images')){

            $update->update([
                'comics_title' => $request->comics_title,
                 'comics_category_id' => $request->comics_category_id,
                 'comics_link' => $request->comics_link,
                 'comics_author' => $request->comics_author,
                 'comics_description' => $request->comics_description,
                 'image' =>  json_encode($images)
            ]);
        }else{
            $update->update([
                'comics_title' => $request->comics_title,
                 'comics_category_id' => $request->comics_category_id,
                 'comics_link' => $request->comics_link,
                 'comics_author' => $request->comics_author,
                 'comics_description' => $request->comics_description,
                 'image' =>$update->image
            ]);
        }
       
        
        toastr()->success(" Successfully Comics Updated ");
        return redirect()->route('comics-index');

        }
        catch(Exception $error){
        toastr()->error($error->getMessage());
        return redirect()->back();
        }

    }



    public function comicsDelete($id){
        $delete = Comics::find($id);
        $delete->delete();
        toastr()->success(" Successfully Comics Deleted ");
        return redirect()->back();
    }


    public function comicsPublished($id){
        $published = Comics::find($id);
        $published->update([
            'status' => 1,
        ]);
        toastr()->success(" Successfully Comics Published ");
        return back();

    }

    public function comicsUnpublished($id){
        $unpublished = Comics::find($id);
        $unpublished->update([
            'status' => 0,
        ]);
        toastr()->success(" Successfully Comics Unpublished ");
        return back();

    }


    public function comicsImageShowForm($id){
        $edit = Comics::find($id);
        return view('backend.pages.comics.image-form',compact('edit'));
    }

    // public function comicsImageEdit($id){
    //     $edit = Comics::find($id);
    //     return view('backend.pages.comics.image-form',compact('edit'));
    // }

    public function comicsImageUpload(Request $request,$id){
        $update = Comics::find($id);

        $images = $request->file('file');
        if($images){
            $fileName = time().'.'.$images->extension();
            $images->move(public_path('image/comics_image'),$fileName);
        }


        //     $images = array();

        // if($files = $request->file('file')){
        //     foreach($files as $item){
        //         $fileName = time().'.'.$item->getClientOriginalExtension();
        //         $item->move(public_path('image/comics_image'),$fileName);
        //         $images[] =  $fileName;
        //     }
        // }
        
        // Comics::create([
        //     'image' => $request->file,
        // ]);
        $update->update([
            'image' => $fileName,
        ]);
       
        return response()->json(['success'=>$fileName]);
    }

    public function categoryIndex(){
        $data = ComicsCategory::all();
        return view('backend.pages.comics.category.index',compact('data'));
    }

    public function categoryForm(){
        
        return view('backend.pages.comics.category.create');
    }

    public function categoryAdd(Request $request){
        $validator = Validator::make($request->all(), [
            
            'comics_category' => 'required',
            
        ]);
        
        if ($validator->fails()) {

           $messages = $validator->messages();
        
                foreach ($messages->all() as $message)
                {
                    toastr()->error ( $message);
                }
        
             return redirect()->back()->withInput();
       }

       try{

        
        ComicsCategory::create([
             
             'comics_category' => $request->comics_category,
             
           
        ]);
        toastr()->success(" Successfully Comics Category Added ");
        return redirect()->route('comics-category-index');

        }
        catch(Exception $error){
        toastr()->error($error->getMessage());
        return redirect()->back();
        }
    }

    public function categoryEdit($id){
        $edit = ComicsCategory::find($id);
        return view('backend.pages.comics.category.edit',compact('edit'));
    }

    public function categoryUpdate(Request $request,$id){
        $validator = Validator::make($request->all(), [
            
            'comics_category' => 'required',
            
        ]);
        
        if ($validator->fails()) {

           $messages = $validator->messages();
        
                foreach ($messages->all() as $message)
                {
                    toastr()->error ( $message);
                }
        
             return redirect()->back()->withInput();
       }

       try{

        $update = ComicsCategory::find($id);
        $update->update([
             
             'comics_category' => $request->comics_category,
             
           
        ]);
        toastr()->success(" Successfully Comics Category Updated ");
        return redirect()->route('comics-category-index');

        }
        catch(Exception $error){
        toastr()->error($error->getMessage());
        return redirect()->back();
        }
    }

    public function categoryDelete($id){
        $delete = ComicsCategory::find($id);
        $delete->delete();
        toastr()->success('Category Deleted');
        return redirect()->back();
    }


    public function categoryPublished($id){
        $published = ComicsCategory::find($id);
        $published->update([
            'status' => 1,
        ]);
        toastr()->success(" Successfully Comics Published ");
        return back();

    }


    public function categoryUnpublished($id){
        $unpublished = ComicsCategory::find($id);
        $unpublished->update([
            'status' => 0,
        ]);
        toastr()->success(" Successfully Comics Unpublished ");
        return back();

    }

    public function appNameEdit($id){
        $edit = AppName::find($id);
        return view('backend.pages.comics.category.app_name',compact('edit'));
    }
    public function appNameUpdate(Request $request,$id){
        $validator = Validator::make($request->all(), [
            
            'app_name' => 'required',
            
        ]);
        
        if ($validator->fails()) {

           $messages = $validator->messages();
        
                foreach ($messages->all() as $message)
                {
                    toastr()->error ( $message);
                }
        
             return redirect()->back()->withInput();
       }

       try{

        $update = AppName::find($id);
        $update->update([
             
             'app_name' => $request->app_name,
             
           
        ]);
        toastr()->success(" Successfully App_Name is Updated ");
        return redirect()->route('comics-category-index');

        }
        catch(Exception $error){
        toastr()->error($error->getMessage());
        return redirect()->back();
        }
    }

    public function singleComicsDetails($id){
        $comics = Comics::find($id);
        return view('backend.pages.comics.singleComics',compact('comics'));
    }
    
}
























