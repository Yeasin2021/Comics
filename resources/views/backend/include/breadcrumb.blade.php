@php
    $path_info = $_SERVER['REQUEST_URI'];
    $path_info = explode('/', $path_info);
@endphp


<div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Comics Admin Panel > {{ $title }}</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ul class="app-breadcrumb breadcrumb">
                        <i class="app-menu__icon fa-2x fa fa-home" ></i>
                        @foreach (  $path_info as $item )
                        <li class="breadcrumb-item pt-2">{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
                <div>
                    <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                </div>
            </div>