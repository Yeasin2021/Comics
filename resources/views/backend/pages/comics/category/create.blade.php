@extends('backend.app')


@section('content')

    <div class="row m-3">
        <div class="col-md-6" style="margin:auto;">
            <div class="card">
                <div class="card-body">

                    <form class="form p-t-20" action="{{route('comics-category-add')}}" method="post">
                        @csrf
                        <h4 class="card-title">Comics Form</h4>
                        <h6 class="card-subtitle">Write To add here</h6>

                        <div class="form-group">
                            <label for="title">Comics Category</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fab fa-battle-net"></i></div>
                                <input type="text" class="form-control" id="title" name="comics_category"/>
                            </div>
                            <div class="form-group">
                            <div class="offset-sm-3 col-sm-3 mt-5 d-flex">
                                <button type="submit" class="btn btn-info mr-3">Submit</button>
                                <a href="{{route('comics-category-index')}}" class="btn btn-primary">Back</a>
                            </div>
                       </div>
                        </div>
                        
                        </form>
                </div>
            </div>
        </div>   
        
    </div>


@endsection 
