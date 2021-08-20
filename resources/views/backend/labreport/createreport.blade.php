@extends('backend.baseLayout')
@section('title', 'Add Report ')
@section('styles')
    <style>
        .input-images-1 img{
            width: 100px !important;
            height: 100px !important;
            padding: 10px;
        }
    </style>
@endsection
@section('main-content')
    <div class="page-header">
        <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-home"></i>
                </span> Report </h3>
    </div>
    <div class="row d-flex">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add New Report</h4>
                    <form method="post" action="{{route('storelabreport')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-12">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control" placeholder="Title">
                            </div>
                          
        
                            <div class="form-group col-6">
                                <label>Type</label>
                                <select class="form-control selectpicker" title="Select" id="type" name="type">
                                    <option value="">Select</option>
                                    <option value="purity">Purity</option>
                                    <option value="dosage">Dosage</option>
                                </select>
                            </div>

                            <div class="form-group col-6">
                                <label>Category</label>
                                <select class="form-control selectpicker" title="Select" id="category" name="category">
                                    <option value="">Select</option>
                                    @foreach ($reportcategories as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                    
                                </select>
                            </div>
                
                            <div class="form-group col-12">
                                <label>Images</label>
                                <div class="row d-block">
                                    <div class="col-12">
                                        <div class="input-field" style="width: 100% !important;">
                                            <div class="input-images-1"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-12">
                                <label>Lab Report</label>
                                <input type="file" name="lab_report" class="form-control">
                            </div>
                        </div>
                        <div class="form-row justify-content-around">
                            <div class="form-group col-5">
                                <button type="submit" class="btn btn-sm btn-primary btn-block">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    {{--    Map Function Start--}}

    {{--    Map Function End--}}
    {{-- <script type="text/javascript">
        $('#property_type').on('change',function () {
            var propertyTypeId = $(this).find(":selected").val();
            $.ajax({
                url: "{{ route('getSubTypes') }}/" + propertyTypeId,
                method: 'GET',
                success: function(data) {
                    var propertSubTypeBox = $('#propert_sub_type');
                    propertSubTypeBox.css('display','block');
                    $("#property_sub_type_options").html(data.html);
                }
            });
        });

    </script> --}}

    <script type="text/javascript">
        $('.input-images-1').imageUploader();
    </script>
@endsection
