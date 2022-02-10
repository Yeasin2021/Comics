@extends('backend.app')

@section('content')

 <!-- Row -->
                <!-- Row -->
                <div class="row m-3">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">About of Bloger or Admin</h4>
                                <h6 class="card-subtitle">Criculam Information</h6>
                                <form class="form p-t-20" action="{{route('admin-about-store-one')}}" method="post" enctype="multipart/form-data">@csrf
                                    <div class="form-group">
                                        <label for="exampleInputuname">Name</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="ti-user"></i></div>
                                            <input type="text" class="form-control" id="name" value="{{App\Models\AboutMe::first()->name}}" name="name">
                                        </div>
                                        <a href="#">Permalink => <span id="text"></span></a>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="ti-email"></i></div>
                                            <input type="email" class="form-control" id="exampleInputEmail1" value="{{App\Models\AboutMe::first()->email}}" name="email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd1">Phone</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fas fa-phone"></i></div>
                                            <input type="text" class="form-control" id="pwd1" value="{{App\Models\AboutMe::first()->phone}}" name="phone">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd2">University</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-university" aria-hidden="true"></i>
                                            </div>
                                            <input type="text" class="form-control" id="pwd2"value="{{App\Models\AboutMe::first()->versity}}" name="versity">
                                        </div>
                                    </div>
                                    
                                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                                    <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                                <!-- </form> -->
                            </div>
                        </div>
                    </div>
                    

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">About of Bloger or Admin</h4>
                                <h6 class="card-subtitle">Personal Information</h6>
                                
                                    <div class="form-group">
                                        <label for="exampleInputuname">Designation</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fas fa-briefcase"></i></div>
                                            <input type="text" class="form-control" id="designation" value="{{App\Models\AboutMe::first()->designation}}" name="designation" onkeypress="test()">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Graduation</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fas fa-user-graduate"></i></div>
                                            <input type="text" class="form-control" id="exampleInputEmail1" value="{{App\Models\AboutMe::first()->graduation}}" name="graduation">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd1">Address</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fas fa-address-book"></i></div>
                                            <input type="text" class="form-control" id="pwd1" value="{{App\Models\AboutMe::first()->address}}" name="address">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd2">Skill</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fas fa-laptop"></i></div>
                                            <input type="text" class="form-control" id="pwd2" value="{{App\Models\AboutMe::first()->skil}}" name="skil">
                                        </div>
                                    </div>
                                    
                                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10"><i class="fa fa-refresh fa-spin fa-1x fa-fw"></i>Submit</button>
                                    <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                             
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Write Here to About your Information</h4>
                                
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            
                                                <textarea name="description" id="editor" >{!! App\Models\AboutMe::first()->description !!}</textarea> 
                                           
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row m-b-0">
                                        <div class="offset-sm-3 col-sm-9">
                                            <button type="submit" class="btn btn-info waves-effect waves-light">Submit</button>
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
                                    
                                    <div class="form-group row m-b-0">
                                        <div class="offset-sm-3 col-sm-9 ">
                                            <button type="submit" class="btn btn-info waves-effect waves-light">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                </div>
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