<?php 

namespace App\Repositories;
use App\Models\Blog;

class BlogRepository implements BlogInterface{

    public function blogIndex(){
        return Blog::all();
    }

    public function blogStore(array $data){
        return  Blog::create($data);
    }
    public function blogEdit($id){
          return  Blog::find($id);
    }
    public function blogUpdate(array $data,$id){
        $update = Blog::find($id);
        return $update->update($data);
    }
    public function blogDelete($id){
        $delete = Blog::find($id);
        return $delete->destroy($id);
    }

    public function blogPublished($id){
        $published = Blog::find($id);
        return $published->update(['status' => 1]);
    }

    public function blogUnpublished($id){
        $unpublished = Blog::find($id);
        return $unpublished->update(['status' => 0]);
    }
    
    public function count($id){
        // $count = Blog::first()->count;
        $count = Blog::where('id',$id)->increment('count');
        
    }

    public function singleBlogDetails($id){
        return Blog::find($id);
    }


}