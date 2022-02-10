<?php

namespace App\Repositories;
use App\Models\AboutMe;
class AboutRepository implements aboutInterface{

     

    public function aboutShow(){
        return view('backend.pages.about.create');
    }

    //this function declare for default image for table
    public function hardPath()
    {
        $hardPath = AboutMe::first()->image;
        return $hardPath;
    }

    public function aboutStore(array $data)
    {
        $update = AboutMe::where('id',1);
        
        // $update = AboutMe::first();
        return $update->update($data);
    }

}


