@extends('backend.app')

@section('content')

 <!-- Row -->
                <!-- Row -->
        <form class="form p-t-20" action="{{route('blog.store')}}" method="post" enctype="multipart/form-data">@csrf
        <div class="row m-3">
            
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Blog Form</h4>
                                <h6 class="card-subtitle">Write To Post here</h6>
                                <!-- <form class="form p-t-20" action="{{route('admin-about-store-one')}}" method="post" enctype="multipart/form-data">@csrf -->
                                    <div class="form-group">
                                        <label for="title">Blog Title</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="ti-user"></i></div>
                                            <input type="text" class="form-control" id="title"  name="title">
                                        </div>
                                        <a href="#">Permalink => <span id="text"></span></a>
                                    </div>
                                    <div class="form-group">
                                        <label for="type">Blog Type</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="ti-email"></i></div>
                                            <input type="text" class="form-control" id="type"  name="type">
                                        </div>
                                    </div>
                                    
                                   
                                    
                                    
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Image Section</h4>
                                
                                
                                    <div class="form-group row">
                                        <label for="uname" class="col-sm-3 control-label">Photo*</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <input type="file" class="form-control" id="photo" onchange="previewFile(this)" name="image"  >
                                                <div class="input-group-addon"><i class="ti-image"></i></div>
                                            </div>
                                        </div>
                                        <img src="{{App\Models\AboutMe::first()->image}}" class="img-fluid mt-2"  style="max-height:180px; max-width: 200px; margin:auto;" id="previewImg"  alt="image">
                                    </div>
                                    
                                 
                            </div>
                        </div>
                    </div>
                    

                    


                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Write Here to About your Information</h4>
                                
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            
                                                <textarea name="description" id="editor" ></textarea> 
                                           
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row m-b-0">
                                        <div class="offset-sm-3 col-sm-9">
                                            <button type="submit" class="btn btn-info waves-effect waves-light">Submit</button></form>
                                            <!-- <a href="{{route('blog.index')}}"></a><button type="submit" class="btn btn-info waves-effect waves-light">Back</button> -->
                                        </div>
                                    </div>
                                
                            </div>
                        </div>
                    </div>
                    
                    
        </div>
        </form>
                <!-- Row -->
                <!-- Row -->







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

    <!-- <script>
        function test(){
            var x = document.getElementById('designation').value;
            document.getElementById('text').innerHTML = x;
        }
    </script> -->
    <script>
          function convertToSlug(text){
            return text
            .toLowerCase()
            .replace(/ /g,'-')
            .replace(/[^\w-]+/g,'');
            }

           let p = document.querySelector("#text")
        
       
           document.querySelector('input[name="name"]').addEventListener("keydown",function(e){
           if(e.key === "Backspace"){
        
             p.textContent = p.textContent.slice(0, -1);
         }else{
         p.textContent+=convertToSlug(e.key);
          }
          })

      </script>
@endpush