<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getSliderContent(){

        $silder_content = Slider::all();
        return response()->json([
            'Success' => "Data Get Successfully",
            'data'    => $silder_content,
        ]);
    }
}
