@extends('layouts.backend.baseLayout')
@section('title', 'Add User ')
@section('main-content')
    <div class="page-header">
        <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-home"></i>
                </span> User </h3>
    </div>
    <div class="row d-flex justify-content-around">
        <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add New User</h4>
                    <form class="forms-sample" method="post" action="{{route('saveNewUser')}}">
                        @csrf
                        <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="name" id="exampleInputUsername2" placeholder="Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" name="email" id="exampleInputEmail2" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputMobile" class="col-sm-3 col-form-label">Mobile</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" name="mobile_no" id="exampleInputMobile" placeholder="Mobile number">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" name="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Assign Role</label>
                            <div class="col-sm-9">
                                <select required name="user_role" class="form-control">
                                    <option selected disabled>Choose...</option>
                                    @if(count($getUserRoles) > 0)
                                        @foreach($getUserRoles as $roles)
                                            <option value="{{$roles->id}}">{{$roles->name}}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
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
