<?php 

namespace App\Repositories\Frontend;

use App\Models\AboutMe;
use App\Models\Blog;
use App\Models\Count;
use App\Models\Slider;
use App\Models\Comics;
use Illuminate\Support\Facades\DB;

class FrontEndRepositories implements FrontEndInterface{

public function frontEndAboutMe(){
    return AboutMe::first();
}

public function frontEndSlider(){
    return Slider::first();
}

public function frontEndBlog(){
    // return Count::all();
    // return Blog::all()->paginate(1);
     return Blog::paginate(3);
    // return DB::table('blogs')->paginate(1);
}
public function frontEndComics(){
    
     return Comics::paginate(3);
    
}








}



?>