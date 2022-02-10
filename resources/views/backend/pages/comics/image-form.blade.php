@extends('backend.app') 
@push('css')
<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
<style>
    .center {
    margin-left: auto;
    margin-right: auto;
    }
    .side {
    float: left;
    }
</style>
@endpush 
@section('content')


    <div class="row">
    <div class="col-md-8 offset-md-2 center">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Images*</h4>

                <div class="form-group">
                    <form action="{{route('image-upload',$edit->id)}}" method="post" class="dropzone" id="my-awesome-dropzone" enctype='multipart/form-data'>@csrf
                    
                    
                    </form>
                    <a href="{{route('comics-index')}}" class="btn btn-primary mt-3 side" >Back</a>
                </div>
            </div>
            
        </div>
    </div>
</div>



@endsection 
@push('js')


    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <script>
    Dropzone.options.myDropzone= {
    
    autoProcessQueue: false,
    uploadMultiple: true,
    parallelUploads: 5,
    maxFiles: 5,
    maxFilesize: 1,
    acceptedFiles: 'image/*',
    addRemoveLinks: true,
    init: function() {
        dzClosure = this; // Makes sure that 'this' is understood inside the functions below.

        // for Dropzone to process the queue (instead of default form behavior):
        document.getElementById("submit-all").addEventListener("click", function(e) {
            // Make sure that the form isn't actually being sent.
            e.preventDefault();
            e.stopPropagation();
            dzClosure.processQueue();
        });

        //send all the form data along with the files:
        this.on("sendingmultiple", function(data, xhr, formData) {
            formData.append("firstname", jQuery("#firstname").val());
            formData.append("lastname", jQuery("#lastname").val());
        });
    }
}</script>
     
@endpush
