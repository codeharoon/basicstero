@extends('layouts.backend.baseLayout')
@section('title', 'News Detail ')
@section('styles')
    <style>
        p span, p strong, ul, p{
            background-color: transparent !important;
        }
    </style>
@endsection
@section('main-content')
    <div class="page-header">
        <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-home"></i>
                </span> News Detail </h3>

    </div>
    <div class="container">
        <h2>{{$news->title}}</h2>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <img src="{{asset('assets/backend/news/'.$news->image)}}" class="img-fluid">
            </div>
            <div class="col-md-12 ">
                {!! $news->description !!}
            </div>
        </div>
    </div>
@endsection
@section('script')
@endsection
