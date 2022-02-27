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
}
