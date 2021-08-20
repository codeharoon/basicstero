<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>MasterPharmalab | Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('assets/backend/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/backend/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('assets/backend/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('assets/backend/images/favicon.png')}}" />
</head>
<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
            <div class="row flex-grow">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left p-5">
                        <div class="brand-logo">
                            <a href="{{route('home')}}" style="margin: 0 100px">
                            <img src="{{asset('img/logo.png')}}" style="width:50px;height:50px">
                            </a>
                        </div>
                        <h6 class="font-weight-light">Sign in as Administrator</h6>
                        <form class="pt-3" method="post" action="{{route('submitadminlogin')}}">
                            @csrf
                            <div class="form-group">
                                <input type="email" name="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email">
                                @if($errors->has('email'))
                                    <span>{{$errors->first('email')}}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                                @if($errors->has('password'))
                                    <span>{{$errors->first('password')}}</span>
                                @endif
                            </div>
                            <div class="mt-3">
                                <button type="submit" class="btn btn-block  btn-lg font-weight-medium auth-form-btn" style="background-color: #1B335F;color: #CBA07E">SIGN IN</button>
                            </div>
                            <div class="my-2 d-flex justify-content-between align-items-center">
                                <div class="form-check">
                                    <label class="form-check-label text-muted">
{{--                                        <input type="checkbox" class="form-check-input"> Keep me signed in </label>--}}
                                </div>
                                {{-- <a href="#" class="auth-link text-black">Forgot password?</a> --}}
                            </div>
{{--                            <div class="text-center mt-4 font-weight-light"> Don't have an account? <a href="register.html" class="text-primary">Create</a>--}}
{{--                            </div>--}}
                        </form>
                        @if(session()->has('login-error'))
                            <span class="alert alert-danger pt-2">
                                {{session('login-error')}}
                            </span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="{{asset('assets/backend/vendors/js/vendor.bundle.base.js')}}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{asset('assets/backend/js/off-canvas.js')}}"></script>
<script src="{{asset('assets/backend/js/hoverable-collapse.js')}}"></script>
<script src="{{asset('assets/backend/js/misc.js')}}"></script>
<!-- endinject -->
</body>
</html>
