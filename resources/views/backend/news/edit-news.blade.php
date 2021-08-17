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
                </span> News </h3>
    </div>
    <div class="row d-flex">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit News</h4>
                    <form class="form-sample" method="post" action="{{route('updatenews',$news->id)}}" enctype="multipart/form-data">
                        @csrf
                        <p class="card-description"> News Details </p>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Title</label>
                                <input type="text" name="n_title" class="form-control" value="{{$news->title}}">
                                @if($errors->has('n_title'))
                                    <span class="text-danger" style="font-size: 12px;">{{ $errors->first('n_title') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <label>Date</label>
                                <input type="date" name="n_date" class="form-control" value="{{$news->Date}}">
                                @if($errors->has('n_date'))
                                    <span class="text-danger" style="font-size: 12px;">{{ $errors->first('n_title') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-12">
                                <label>Description</label>
                                <textarea class="form-control" name="n_description">{{$news->content}}</textarea>
                                @if($errors->has('n_description'))
                                    <span class="text-danger" style="font-size: 12px;">{{ $errors->first('n_description') }}</span>
                                @endif
                            </div>
                        </div>


                        <div class="row d-flex justify-content-around">
                            <div class="col-md-5">
                                <button type="submit" class="btn btn-primary btn-sm btn-block">Update</button>
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
