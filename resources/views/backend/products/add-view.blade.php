@extends('backend.baseLayout')
@section('title', 'Add News ')
@section('styles')
    <style>
        .tox-notifications-container{
            display: none !important;
        }
    </style>

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
            </span> Product </h3>
    </div>
    <div class="row d-flex">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add Product</h4>
                    <form class="form-sample" method="post" action="{{route('storeproduct')}}" enctype="multipart/form-data">
                        @csrf
                        <p class="card-description"> Product Details </p>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>Check Code</label>
                                <input type="text" name="n_code" class="form-control" placeholder="Enter Check Code">
                                @if($errors->has('n_code'))
                                    <span class="text-danger" style="font-size: 12px;">{{ $errors->first('n_title') }}</span>
                                @endif
                            </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Title</label>
                                <input type="text" name="n_title" class="form-control" placeholder="Enter Title">
                                @if($errors->has('n_title'))
                                    <span class="text-danger" style="font-size: 12px;">{{ $errors->first('n_title') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <label>Weight</label>
                                <input type="text" name="n_weight" class="form-control" placeholder="Enter Weight">
                                @if($errors->has('n_weight'))
                                    <span class="text-danger" style="font-size: 12px;">{{ $errors->first('n_title') }}</span>
                                @endif
                            </div>
                            @foreach ($warehouses as $item)
                            <div class="form-group col-md-12">
                                <label style="font-weight: bold">WareHouse {{$loop->iteration}}</label>                             
                            </div>
                            <div class="form-group col-md-6">
                                <label>Stock</label>
                                <input type="text" name="stock[]" class="form-control" placeholder="Enter Warehouse {{$loop->iteration}} stock">
                                @if($errors->has('stock'))
                                    <span class="text-danger" style="font-size: 12px;">{{ $errors->first('n_title') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <label>Price</label>
                                <input type="text" name="price[]" class="form-control" placeholder="Enter Warehouse {{$loop->iteration}} stock">
                                @if($errors->has('price'))
                                    <span class="text-danger" style="font-size: 12px;">{{ $errors->first('n_title') }}</span>
                                @endif
                            </div>
                            @endforeach
                            

                            <div class="form-group col-md-6">
                                <label>Type</label>
                                <select name="type" id="" class="form-control">
                                    <option value="oralsteroids">ORAL LINE</option>
                                    <option value="injectableline">INJECTABLE LINE</option>
                                    <option value="hgh">HGH AND PEPTIDES</option>
                                </select>
                                @if($errors->has('type'))
                                    <span class="text-danger" style="font-size: 12px;">{{ $errors->first('n_title') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <label>Type Category</label>
                                <select name="type_category" id="" class="form-control">
                                    <option value="1">Category 1</option>
                                    <option value="2">Category 2</option>
                                    <option value="3">Category 3</option>
                                </select>
                                @if($errors->has('n_tcategory'))
                                    <span class="text-danger" style="font-size: 12px;">{{ $errors->first('n_title') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <label>Activity</label>
                                <input type="text" name="n_activity" class="form-control" placeholder="Enter Activity">
                                @if($errors->has('n_activity'))
                                    <span class="text-danger" style="font-size: 12px;">{{ $errors->first('n_title') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <label>Delay Water</label>
                                <select name="delay_water" id="" class="form-control">
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                                @if($errors->has('delay_water'))
                                    <span class="text-danger" style="font-size: 12px;">{{ $errors->first('n_title') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <label>Classification</label>
                                <select name="classification" id="" class="form-control">
                                    <option value="">select</option>
                                    @foreach ($classification as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                        
                                </select>
                                @if($errors->has('classification'))
                                    <span class="text-danger" style="font-size: 12px;">{{ $errors->first('n_title') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <label>HBR</label>
                                <select name="hbr" id="" class="form-control">
                                    <option value="Possible">Possible</option>
                                    <option value="Impossible">Impossible</option>
                                    <option value="Perhaps">Perhaps</option>
                                </select>
                                @if($errors->has('hbr'))
                                    <span class="text-danger" style="font-size: 12px;">{{ $errors->first('n_title') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <label>Dosage</label>
                                <input type="text" name="dosage" class="form-control">
                                @if($errors->has('dosage'))
                                    <span class="text-danger" style="font-size: 12px;">{{ $errors->first('n_title') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <label>HepoToxity</label>
                                <select name="hepoToxity" id="" class="form-control">
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                                @if($errors->has('hepoToxity'))
                                    <span class="text-danger" style="font-size: 12px;">{{ $errors->first('n_title') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <label>Acne</label>
                                <select name="acne" id="" class="form-control">
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                                @if($errors->has('acne'))
                                    <span class="text-danger" style="font-size: 12px;">{{ $errors->first('n_title') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <label>Aromatization</label>
                                <select name="aromatization" id="" class="form-control">
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                                @if($errors->has('aromatization'))
                                    <span class="text-danger" style="font-size: 12px;">{{ $errors->first('n_title') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-12">
                                <label>Short Description</label>
                                <textarea class="form-control" name="n_shortdescription"></textarea>
                                @if($errors->has('n_description'))
                                    <span class="text-danger" style="font-size: 12px;">{{ $errors->first('n_description') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-12">
                                <label>Description</label>
                                <textarea class="form-control" name="n_description"></textarea>
                                @if($errors->has('n_description'))
                                    <span class="text-danger" style="font-size: 12px;">{{ $errors->first('n_description') }}</span>
                                @endif
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
                        </div>


                        <div class="row d-flex justify-content-around">
                            <div class="col-md-5">
                                <button type="submit" class="btn btn-primary btn-sm btn-block">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript" src="{{asset('assets/backend/js/tinymce.min.js')}}"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: 'textarea',
            plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            toolbar_mode: 'floating',
        });
    </script>
    <script type="text/javascript">
        $('.input-images-1').imageUploader();
    </script>
@endsection
