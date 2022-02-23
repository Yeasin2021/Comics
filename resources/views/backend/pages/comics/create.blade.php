@extends('backend.app')

@push('css')
<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: "Rubik", sans-serif;
    }
    body {
        background-color: #f5f8ff;
    }
    .container {
        background-color: #ffffff;
        width: 60%;
        min-width: 450px;
        position: relative;
        margin: 50px auto;
        padding: 50px 20px;
        border-radius: 7px;
        box-shadow: 0 20px 35px rgba(0, 0, 0, 0.05);
    }
    input[type="file"] {
        display: none;
    }
    .upload-f-img  {
        display: block;
        position: relative;
        background-color: #025bee;
        color: #ffffff;
        font-size: 18px;
        text-align: center;
        width: 300px;
        padding: 18px 0;
        margin: auto;
        border-radius: 5px;
        cursor: pointer;
    }
    .container p {
        text-align: center;
        margin: 20px 0 30px 0;
    }
    #images {
        width: 90%;
        position: relative;
        margin: auto;
        display: flex;
        justify-content: space-evenly;
        gap: 20px;
        flex-wrap: wrap;
    }
    figure {
        width: 45%;
    }
    img {
        width: 100%;
    }
    figcaption {
        text-align: center;
        font-size: 2.4vmin;
        margin-top: 0.5vmin;
    }
    #num-of-files{text-align: center; margin-top:20px;}
</style>

@endpush 

@section('title')
    Admin's Comics Create  Page
@endsection

@section('content')

@include('backend.include.breadcrumb',['title' => 'Comics Create  Page'])
<form class="form p-t-20" action="{{route('comics-store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row m-3">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Comics Form</h4>
                    <h6 class="card-subtitle">Write To add here</h6>

                    <div class="form-group">
                        <label for="title">Comics Title</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fab fa-battle-net"></i></div>
                            <input type="text" class="form-control" id="title" name="comics_title" />
                        </div>
                        <a href="#">Permalink => <span id="text"></span></a>
                    </div>
                    <div class="form-group">
                        <label for="type">Comics Type</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fas fa-tape"></i></div>
                            <select class="form-control" name="comics_category_id">
                            <option value="">Select Comices Type</option>
                                @foreach ($comics_category as $item)
                                     <option value="{{ $item->id }}">{{$item->comics_category }}</option>
                                @endforeach
                              
                            </select>
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="type">Comics Link</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fas fa-link"></i></div>
                            <input type="text" class="form-control" id="type" name="comics_link" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="type">Author or Publications</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fas fa-pen-nib"></i></div>
                            <input type="text" class="form-control" id="type" name="comics_author" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <input type="file" name="images[]" id="file-input" accept="image/png, image/jpeg" onchange="preview()" multiple />
                        <label for="file-input" class="upload-f-img"> <i class="fas fa-upload"></i> &nbsp; Choose A Photo </label>
                        <p id="num-of-files">No Files Chosen</p>
                        <div id="images"></div>
                    </div>
                </div>
            </div>
        </div>

       

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Write Here to Comics Description</h4>

                    <div class="form-group row">
                        <div class="col-md-12">
                            <textarea name="comics_description" id="editor"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="offset-sm-3 col-sm-3 mt-5 d-flex">
                                <button type="submit" class="btn btn-info mr-3">Submit</button>
                                <a href="{{route('comics-index')}}" class="btn btn-primary">Back</a>
                            </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</form>

@endsection @push('js') 


<script>
    let fileInput = document.getElementById("file-input");
    let imageContainer = document.getElementById("images");
    let numOfFiles = document.getElementById("num-of-files");

    function preview() {
        imageContainer.innerHTML = "";
        numOfFiles.textContent = `${fileInput.files.length} Files Selected`;

        for (i of fileInput.files) {
            let reader = new FileReader();
            let figure = document.createElement("figure");
            let figCap = document.createElement("figcaption");
            figCap.innerText = i.name;
            figure.appendChild(figCap);
            reader.onload = () => {
                let img = document.createElement("img");
                img.setAttribute("src", reader.result);
                figure.insertBefore(img, figCap);
            };
            imageContainer.appendChild(figure);
            reader.readAsDataURL(i);
        }
    }
</script>






@endpush
