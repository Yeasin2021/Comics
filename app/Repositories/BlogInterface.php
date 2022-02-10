<?php 


namespace App\Repositories;

interface BlogInterface{
    //blog index
    public function blogIndex();
    //data store
    public function blogStore(array $data);
    //edit
    public function blogEdit($id);
    //update
    public function blogUpdate(array $data,$id);
    //delete
    public function blogDelete($id);
    //published
    public function blogPublished($id);
    //unpublished
    public function blogUnpublished($id);

    //count
    public function count($id);
    // single blog details 
    public function singleBlogDetails($id);

}