@extends('backend.app')
@section('title')
    Admin's Slider Create  Page
@endsection


@section('content')
@include('backend.include.breadcrumb',['title' => 'Slider Create  Page'])
<div class="row m-3">
    <div class="col-md-6">
        <div class="card card-body">
            <h3 class="box-title m-b-0">Sample Basic Forms</h3>
            <p class="text-muted m-b-30 font-13">Bootstrap Elements</p>
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <form action="{{route('slider.content.update',$edit->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">User Profile Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Profile Name" name="name" value="{{$edit->name}}"/>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">User Designation One</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Job/Designation-01" name="designation_one" value="{{$edit->designation_one}}"/>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">User Designation Two</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Job/Designation-02" name="designation_two" value="{{$edit->designation_two}}"/>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">User Designation Three</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Job/Designation-03" name="designation_three" value="{{$edit->designation_three}}"/>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Profile Picture</label>
                            <input type="file" class="form-control" name="image"  id="image" onchange="previewFile(this)">
                        </div>
                        
                        
                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                        <button type="submit" class="btn btn-inverse waves-effect waves-light"><a href="{{route('slider.content.show')}}">Back</a></button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card card-body">
            <h3 class="box-title m-b-0">Show Here Profile or Slider Picture </h3>
            <p class="text-muted m-b-30 font-13">You are like your picture</p>
            <img src="{{$edit->image}}" class="img-fluid mt-2"  style="max-height:250px; max-width: 250px; margin:auto;" id="previewImg"  alt="image">
        </div>
    </div>
</div>


@endsection

@push('js')
<script>
        function previewFile(input){
            var file = $("input[type = file]").get(0).files[0];

            if(file){
                var reader = new FileReader();
                reader.onload = function(){
                    $('#previewImg').attr("src", reader.result);
                }
                reader.readAsDataURL(file);
            }
        }
    </script>
@endpush