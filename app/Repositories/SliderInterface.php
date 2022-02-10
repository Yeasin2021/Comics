<?php 

namespace App\Repositories;

interface SliderInterface{

    // Data Show by this method
    public function show();

    //Data store by this method
    public function store(array $data);

    //Data Edit by this method
    public function edit($id);

    //Data Update by this method
    public function update(array $data,$id);

    //Data Delete by this method
    public function delete($id);


}