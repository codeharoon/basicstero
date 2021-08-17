@extends('layouts.backend.baseLayout')
@section('title', 'Add Project ')
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
                </span> Review </h3>
    </div>
    <div class="row d-flex">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add New Review</h4>
                    <form class="form-sample" method="post" action="{{route('saveReview')}}" enctype="multipart/form-data">
                        @csrf
                        <p class="card-description"> Review Details </p>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>Title</label>
                                <input type="text" name="r_title" class="form-control">
                                @if($errors->has('r_title'))
                                    <span class="text-danger" style="font-size: 12px;">{{ $errors->first('r_title') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-12">
                                <label>Description</label>
                                <textarea class="form-control" name="r_description"></textarea>
                                @if($errors->has('r_description'))
                                    <span class="text-danger" style="font-size: 12px;">{{ $errors->first('r_description') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <label>User Name</label>
                                <input type="text" class="form-control" name="r_user_name">
                                @if($errors->has('r_user_name'))
                                    <span class="text-danger" style="font-size: 12px;">{{ $errors->first('r_user_name') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <label>Thumbnail <sup style="color: red">(max size 1MB)</sup></label>
                                <input type="file" class="form-control" name="r_user_image">
                                @if($errors->has('r_user_image'))
                                    <span class="text-danger" style="font-size: 12px;">{{ $errors->first('r_user_image') }}</span>
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
    
@endsection
