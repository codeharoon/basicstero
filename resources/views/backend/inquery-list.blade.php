@extends('layouts.backend.baseLayout')
@section('title', 'Inquiries ')
@section('main-content')
    <div class="page-header">
        <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-home"></i>
                </span> Inquiries </h3>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">All Inquiries</h4>
                    <table class="table table-bordered">
                        <thead class="bg-dark text-white">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($inquaries)
                            @foreach($inquaries as $inquiry)
                                <tr>
                                    <td>
                                        {{$inquiry->name}}
                                    </td>
                                    <td>
                                        {{$inquiry->email}}
                                    </td>
                                    <td>
                                        {{$inquiry->phone}}
                                    </td>
                                    <td>
                                        <ul class="list-group text-center text-small">
                                            {{--                                            <li class="list-group-item">--}}
                                            {{--                                                <a href="{{route('addPaymentPlanForm',$project->id)}}" class="btn btn-inverse-dark btn-fw btn-sm" style="font-size: 10px">Add Additional Detail</a>--}}
                                            {{--                                            </li>--}}
                                            <li class="list-group-item"><a href="{{route('singleInquiry',$inquiry->id)}}" class="btn btn-inverse-dark btn-fw btn-sm" style="font-size: 10px">View Detials</a></li>
                                        </ul>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <span class="alert alert-info p-5">
                                No Project Yet Added Yet
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
