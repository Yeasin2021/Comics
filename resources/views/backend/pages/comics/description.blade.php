@extends('backend.app') 
 
@section('content')



    <div class="row m-3">
       
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Comics Description</h4>

                    <div class="form-group row">
                        <div class="col-md-12">
                            <textarea  id="editor">{!! $view->comics_description !!}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    </div>
    <div class="form-group row m-b-0 ml-2">
        <div class="offset-sm-3 col-sm-9 d-flex">
            <a href="{{route('comics-index')}}" class="btn btn-primary">Back</a>
        </div>
    </div>

@endsection

