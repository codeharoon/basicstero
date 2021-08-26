@extends('backend.baseLayout')
@section('title', 'Add News ')
@section('styles')
    <style>
        .tox-notifications-container{
            display: none !important;
        }
    </style>
@endsection
@section('main-content')
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-home"></i>
            </span> Category </h3>
    </div>
    <div class="row d-flex">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Category</h4>
                    <form class="form-sample" method="post" action="{{route('updatecategory',$category->id)}}" enctype="multipart/form-data">
                        @csrf
                        <p class="card-description"> Category Details </p>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>Type</label>
                                <select name="type" id="" class="form-control">
                                    <option value="oralsteroids" @if ($category->type=="oralsteroids") {{"selected"}}  @endif >ORAL LINE</option>
                                    <option value="injectableline" @if ($category->type=="injectableline") {{"selected"}}  @endif>INJECTABLE LINE</option>
                                    <option value="hgh" @if ($category->type=="hgh") {{"selected"}}  @endif>HGH AND PEPTIDES</option>
                                </select>
                                @if($errors->has('type'))
                                    <span class="text-danger" style="font-size: 12px;">{{ $errors->first('n_title') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-12">
                                <label>Name</label>
                                <input type="text" name="c_title" class="form-control" placeholder="Enter Category name" value="{{$category->name}}">
                                @if($errors->has('c_title'))
                                    <span class="text-danger" style="font-size: 12px;">{{ $errors->first('n_title') }}</span>
                                @endif
                            </div>
                        
                                <div class="col-md-5 mt-4">
                                    <button type="submit" class="btn btn-primary btn-sm">Update</button>
                                </div>
                     
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript" src="{{asset('assets/backend/js/tinymce.min.js')}}"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: 'textarea',
            plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            toolbar_mode: 'floating',
        });
    </script>
@endsection
