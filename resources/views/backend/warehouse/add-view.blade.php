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
                </span> WareHouse </h3>
    </div>
    <div class="row d-flex">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add WareHouse</h4>
                    <form class="form-sample" method="post" action="{{route('storewarehouse')}}" enctype="multipart/form-data">
                        @csrf
                        <p class="card-description"> WareHouse Detail </p>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>Name</label>
                                <input type="text" name="n_title" class="form-control">
                                @if($errors->has('w_title'))
                                    <span class="text-danger" style="font-size: 12px;">{{ $errors->first('n_title') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-12">
                                <label>Description</label>
                                <textarea class="form-control" name="n_description"></textarea>
                                @if($errors->has('w_description'))
                                    <span class="text-danger" style="font-size: 12px;">{{ $errors->first('n_description') }}</span>
                                @endif
                            </div>
                        </div>


                        <div class="row d-flex justify-content-around">
                            <div class="col-md-5">
                                <button type="submit" class="btn btn-primary btn-sm btn-block">Submit</button>
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
