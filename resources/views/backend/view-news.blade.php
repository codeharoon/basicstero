@extends('layouts.backend.baseLayout')
@section('title', 'View News ')
@section('main-content')
    <div class="page-header">
        <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-home"></i>
                </span> News </h3>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">All News</h4>
                    <table class="table table-bordered">
                        <thead class="bg-dark text-white">
                        <tr>
                            <th> # </th>
                            <th> Title </th>
                            <th> Creation Date </th>
                            <th> Action </th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($news)
                            @foreach($news as $i=>$n)
                                <tr>
                                    <td>{{++$i}}</td>
                                    <td>{{$n->title}}</td>
                                    <td>{{$n->created_at->format('d-m-Y')}}</td>
                                    <td>
                                        <a href="{{route('singleNews',$n->id)}}" class="btn btn-sm btn-info float-left"><i class="fa fa-eye"></i>View</a>
                                        <a href="{{route('deleteNews',$n->id)}}" class="btn btn-sm btn-danger float-right"><i class="fa fa-trash">Delete</i></a>
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
