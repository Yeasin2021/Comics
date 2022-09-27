@extends('backend.app')

@section('title')
    User Profile Settings
@endsection

@section('content')

 @include('backend.include.breadcrumb',['title' => 'User Profile'])
                <div class="row m-3" >
                  
                    <div class="col-md-4 m-auto">
                        <div class="card">
                            <div class="card-body" >
                            @php
                                $users = App\Models\User::where('id',Auth()->user()->id)->first('image');
                                
                            @endphp
                                <center class="m-t-30"> <img src="{{ $users->image }}" class="img-circle" width="150" id="previewImg"/>
                                <label >
                                    <span style="margin-left:-145px; margin-top:300px;"><i class="fa fa-camera text-white"></i><span>
                                    <input type="file" name="image" class="form-control" style="display:none;" onchange="previewFile(this)" />
                                </label>
                                    <h4 class="card-title m-t-10">Developer</h4>
                                    <h6 class="card-subtitle">Life is Beautifull</h6>
                                    <div class="row text-center justify-content-md-center">
                                        
                                    </div>
                                </center>
                            </div>
                            <div>
                                <hr> </div>
                            <div class="card-body"> 
                                 <form class="form-horizontal form-material" action="{{ route('profile-text-post') }}" method="post" enctype="multipart/form-data">@csrf
                                            <div class="form-group">
                                                <label class="col-md-12">Full Name</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="Avi" class="form-control form-control-line" name="name" value="{{ Auth::user()->name }}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Email</label>
                                                <div class="col-md-12">
                                                    <input type="email" placeholder="avi@admin.com" class="form-control form-control-line" name="email" id="example-email" value="{{ Auth::user()->email }}">
                                                </div>
                                            </div>
                                           
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button class="btn btn-success">Update Profile</button>
                                                </div>
                                            </div>
                                        </form>
                                
                                <br/>
                                <button class="btn btn-circle btn-secondary"><i class="fa fa-facebook"></i></button>
                                <button class="btn btn-circle btn-secondary"><i class="fa fa-twitter"></i></button>
                                <button class="btn btn-circle btn-secondary"><i class="fa fa-youtube"></i></button>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    
                
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
               
                 var imgtype=file.type;
                 if(imgtype == 'image/jpeg' || imgtype == 'image/jpg' || imgtype == 'image/png' ){
                    var postData=new FormData();
                    postData.append('file', file);

                    var url="{{url('/admin-profile-post')}}";

                    $.ajax({
                        headers:{'X-CSRF-Token':$('meta[name=csrf_token]').attr('content')},
                        async:true,
                        type:"post",
                        contentType:false,
                        url:url,
                        data:postData,
                        processData:false,
                        success:function(){
                           
                            toastr.options =
                            {
                                "closeButton" : true,
                                "progressBar" : true
                            }
                            toastr.success("Profile has been updated");
                            setTimeout("window.location = 'admin-user-profile'",3000);
                        }
                  });
                 }else{
                     toastr.options =
                            {
                                "closeButton" : true,
                                "progressBar" : true
                            }
                            toastr.error("File Type Should be jpg,jpeg,png");
                            setTimeout("window.location = 'admin-user-profile'",1000);
                 }

            }
        }
 </script> 

    
    
@endpush