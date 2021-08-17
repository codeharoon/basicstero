@extends('layouts.backend.baseLayout')
@section('title', 'Add User ')
@section('main-content')
    <div class="page-header">
        <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-home"></i>
                </span> Role </h3>
    </div>
    <div class="row d-flex justify-content-around">
        <div class="col-md-5 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add New Role</h4>
                    <form class="forms-sample" method="post" action="{{route('saveUserRole')}}">
                        @csrf
                        <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Name</label>
                            <div class="col-sm-9">
                                <input type="text" required class="form-control" name="name" id="exampleInputUsername2" placeholder="Name">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row d-flex justify-content-around">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">All Roles</h4>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Role</th>
                            <th>Created At</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($roles) > 0)
                            @foreach($roles as $role)
                                <tr>
                                    <td></td>
                                    <td>{{$role->name}}</td>
                                    <td>{{$role->created_at}}</td>
                                    <td><button class="btn btn-info btn-sm">Update</button></td>
                                    <td><button class="btn btn-danger btn-sm">Remove</button></td>
                                </tr>
                            @endforeach
                        @else
                            <div class="card text-center p-3">
                                No Role Added Yet!
                            </div>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript">

    </script>
@endsection
