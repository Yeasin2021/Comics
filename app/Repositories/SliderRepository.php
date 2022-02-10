<?php 


namespace App\Repositories;
use App\Models\Slider;
class SliderRepositories implements SliderInterface{
    
    public function show(){
        return Slider::all();
    }

    public function store(array $data){
        return Slider::create($data);
    }

    public function edit($id){
        return Slider::find($id);
    }

    public function update(array $data,$id){
        return Slider::find($id)->update($data);
    }

    public function delete($id){
        return Slider::destroy($id);
    }

    
}