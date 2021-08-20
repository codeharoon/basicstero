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
            </span> Classification </h3>
    </div>
    <div class="row d-flex">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Classification</h4>
                    <form class="form-sample" method="post" action="{{route('updateclassification',$classification->id)}}" enctype="multipart/form-data">
                        @csrf
                        <p class="card-description"> Classification Details </p>
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label>Name</label>
                                <input type="text" name="n_title" class="form-control" placeholder="Enter Classification name" value="{{$classification->name}}">
                                @if($errors->has('w_title'))
                                    <span class="text-danger" style="font-size: 12px;">{{ $errors->first('n_title') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-4">
                                <div class="col-md-5 mt-4">
                                    <button type="submit" class="btn btn-primary btn-sm">Update</button>
                                </div>
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
