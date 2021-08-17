@extends('layouts.backend.baseLayout')
@section('title', 'View News ')
@section('main-content')
    <div class="page-header">
        <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-home"></i>
                </span> Users </h3>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">All Users</h4>
                    <table class="table table-bordered table-responsive">
                        <thead class="bg-dark text-white">
                        <tr>
                            <th> # </th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($users)
                            @foreach($users as $i=>$item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->created_at}}</td>
                                <td>{{$item->updated_at}}</td>
                                {{-- <td>{{$item->no_of_beds}}</td>
                                <td>{{$item->no_of_bathroom}}</td> --}}
                                <td>
                                    <ul class="list-group text-center text-small">
                                        {{-- <li class="list-group-item"><a class="btn btn-primary" href="{{route('editProperty',$item->id)}}" class="btn btn-inverse-dark btn-fw btn-sm" style="font-size: 10px">Edit</a></li> --}}
                                        <li class="list-group-item"><a class="btn btn-danger" href="{{route('deleteuser',$item->id)}}" class="btn btn-inverse-dark btn-fw btn-sm" style="font-size: 10px">Delete</a></li>
                                    </ul>
                                </td>
                            </tr>
                            @endforeach
                        @else
                            <span class="alert alert-info p-5">
                                No News Added Yet
                            </span>
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
