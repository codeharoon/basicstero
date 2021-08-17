@extends('layouts.backend.baseLayout')
@section('title', 'Add Additional Details')
@section('main-content')
    <div class="page-header">
        <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-home"></i>
                </span> Change Password </h3>
    </div>
    <div class="row d-flex justify-content-around">
        <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form class="forms-sample" method="post" action="{{route('updatePassword')}}">
                        @csrf
                        <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                        <div class="row mb-6">
                            <div class="col-lg-12">
                                <div class="card mb-6">
                                    <div class="card-body px-6 pt-6 pb-5">
                                        <div class="form-row mx-n4 justify-content-around">
                                            <div class="form-group col-md-7 px-4">
                                                <label for="current_password" class="text-heading">Current Password</label>
                                                <input type="password" class="form-control form-control-lg border-0" id="current_password" name="current_password">
                                                @if($errors->has('current_password'))
                                                    <span class="text-danger" style="font-size: 12px;">{{ $errors->first('current_password') }}</span>
                                                @endif
                                            </div>
                                            <div class="form-group col-md-7 px-4">
                                                <label for="password" class="text-heading">New Password</label>
                                                <input type="password" class="form-control form-control-lg border-0" id="password" name="password">
                                                @if($errors->has('password'))
                                                    <span class="text-danger" style="font-size: 12px;">{{ $errors->first('password') }}</span>
                                                @endif
                                            </div>
                                            <div class="form-group col-md-7 px-4">
                                                <label for="password_confirmation" class="text-heading">Confirm Password</label>
                                                <input type="password" class="form-control form-control-lg border-0" id="password_confirmation" name="password_confirmation">
                                                @if($errors->has('password_confirmation'))
                                                    <span class="text-danger" style="font-size: 12px;">{{ $errors->first('password_confirmation') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end flex-wrap">
                            {{--                    <button class="btn btn-lg bg-hover-white border rounded-lg mb-3">Delete Profile</button>--}}
                            <button type="submit" class="btn btn-lg btn-primary ml-4 mb-3">Change Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript">

    </script>
@endsection
