@extends('backend.baseLayout')
@section('title', 'View News ')
@section('main-content')
    <div class="page-header">
        <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-home"></i>
                </span> FAQ </h3>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">All FAQ</h4>
                    <table class="table table-bordered">
                        <thead class="bg-dark text-white">
                        <tr>
                            <th> # </th>
                            <th> Question </th>
                            <th> Creation Date </th>
                            <th> Action </th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($faq)
                            @foreach($faq as $i=>$blog)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$blog->question}}</td>
                                    <td>{{$blog->created_at->format('d-m-Y')}}</td>
                                    <td>
                                        <a href="{{route('editfaq',$blog->id)}}" class="btn btn-sm btn-info float-left"><i class="fa fa-eye"></i>Edit</a>
                                        <a href="{{route('deletefaq',$blog->id)}}" class="btn btn-sm btn-danger float-right"><i class="fa fa-trash">Delete</i></a>
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
