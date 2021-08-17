@extends('layouts.backend.baseLayout')
@section('title', 'Add Payment Plan ')
@section('main-content')
    <div class="page-header">
        <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-home"></i>
                </span> Projects </h3>
        <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-arrow-bottom-left"></i>
                </span> <a href="{{route('projectDetail',$id)}}">Back</a> </h3>
    </div>
<p class="card-description"> Payment Plan</p>
    <form method="post" action="{{route('savePaymentPlan')}}" enctype="multipart/form-data">
        @csrf
        @if(session()->has('success-msg'))
        <div class="row d-flex justify-content-around">
            <div class="col-md-5">
                <span style="font-size: 15px">{{session('success-msg')}}</span>
            </div>
        </div>
        @endif
        <div class="row">
            <div class="col-md-6" >
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Type</label>
                    <div class="col-sm-9">
                        @if($id)
                        <input type="hidden" name="project_id" value="{{$id}}">
                        @endif
                        <input type="text" name="pj_type" class="form-control" placeholder="e.g, Residential Plots">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Floor</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="pj_floor" placeholder="e.g, Entire Floor, Ground Floor">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Block</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="pj_block" placeholder="e.g, Block 1 or Block M">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Plot Size Type</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="pj_plot_size_type">
                            <option disabled selected class="form-control" value="Per Merla">Choose...</option>
                            <option class="form-control" value="Per Merla">Per Merla</option>
                            <option class="form-control" value="Per Kanal">Per Kanal</option>
                            <option class="form-control" value="Per Sqft">Per Sqft</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Plot Size</label>
                    <div class="col-sm-9">
                        <input type="number" name="pj_plot_size" class="form-control" placeholder="e.g. 3">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Rate Type#1</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="pj_rate_type1">
                            <option disabled selected class="form-control" value="Per Merla">Choose...</option>
                            <option class="form-control" value="Per Merla">Per Merla</option>
                            <option class="form-control" value="Per Kanal">Per Kanal</option>
                            <option class="form-control" value="Per Sqft">Per Sqft</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Rate#1 (Rs)</label>
                    <div class="col-sm-9">
                        <input type="number" name="pj_rate1" class="form-control">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Rate Type#2</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="pj_rate_type2">
                            <option disabled selected class="form-control" value="Per Merla">Choose...</option>
                            <option class="form-control" value="Per Merla">Per Merla</option>
                            <option class="form-control" value="Per Kanal">Per Kanal</option>
                            <option class="form-control" value="Per Sqft">Per Sqft</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Rate#2 (Rs)</label>
                    <div class="col-sm-9">
                        <input type="number" name="pj_rate2" class="form-control">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Rate Type#3</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="pj_rate_type3">
                            <option disabled selected class="form-control" value="Per Merla">Choose...</option>
                            <option class="form-control" value="Per Merla">Per Merla</option>
                            <option class="form-control" value="Per Kanal">Per Kanal</option>
                            <option class="form-control" value="Per Sqft">Per Sqft</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Rate#3 (Rs)</label>
                    <div class="col-sm-9">
                        <input type="number" name="pj_rate3" class="form-control">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Land Price (Rs)</label>
                    <div class="col-sm-9">
                        <input type="number" name="pj_land_price" class="form-control">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Booking (Rs)</label>
                    <div class="col-sm-9">
                        <input type="number" name="pj_booking" class="form-control" placeholder="e.g, 120000">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Booking Discount (%)</label>
                    <div class="col-sm-9">
                        <input type="number" name="pj_booking_discount" class="form-control" placeholder="e.g, 3">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Confirmation (Rs)</label>
                    <div class="col-sm-9">
                        <input type="number" name="pj_confirmation" class="form-control" placeholder="e.g, 120000">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Confirmation Discount (%)</label>
                    <div class="col-sm-9">
                        <input type="number" name="pj_confirmation_discount" class="form-control" placeholder="e.g, 3">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">On Possession (Rs)</label>
                    <div class="col-sm-9">
                        <input type="number" name="pj_on_possession" class="form-control" placeholder="e.g, 120000">
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">On Possession Discount (%)</label>
                    <div class="col-sm-9">
                        <input type="number" name="pj_on_possession_discount" class="form-control" placeholder="e.g, 2">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Balance (Rs)</label>
                    <div class="col-sm-9">
                        <input type="number" name="pj_balance" class="form-control" placeholder="e.g, 120000">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">No of Quarterly Installments</label>
                    <div class="col-sm-9">
                        <input type="number" name="pj_no_of_quarterly_installment" class="form-control" placeholder="e.g, 3">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Quarterly Installment (Rs)</label>
                    <div class="col-sm-9">
                        <input type="number" name="pj_quarterly_installment" class="form-control" placeholder="e.g, 120000">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">No of Monthly Installments</label>
                    <div class="col-sm-9">
                        <input type="number" name="pj_no_of_monthly_installment" class="form-control" placeholder="e.g, 4">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Quarterly Installment (Rs)</label>
                    <div class="col-sm-9">
                        <input type="number" name="pj_monthly_installment" class="form-control" placeholder="e.g, 120000">
                    </div>
                </div>
            </div>
        </div>
{{--        <div class="row">--}}
{{--            <div class="col-md-6">--}}
{{--                <div class="form-group row">--}}
{{--                    <label class="col-sm-3 col-form-label">Booking Details</label>--}}
{{--                    <div class="col-sm-9">--}}
{{--                        <textarea name="pj_booking_details" class="form-control"></textarea>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-6">--}}
{{--                <div class="form-group row">--}}
{{--                    <label class="col-sm-3 col-form-label">Extra Charges</label>--}}
{{--                    <div class="col-sm-9">--}}
{{--                        <textarea name="pj_extra_charges" class="form-control"></textarea>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-6">--}}
{{--                <div class="form-group row">--}}
{{--                    <label class="col-sm-3 col-form-label">Discounts</label>--}}
{{--                    <div class="col-sm-9">--}}
{{--                        <textarea name="pj_discounts" class="form-control"></textarea>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-6">--}}
{{--                <div class="form-group row">--}}
{{--                    <label class="col-sm-3 col-form-label">Image</label>--}}
{{--                    <div class="col-sm-9">--}}
{{--                        <input type="file" name="pj_payment_image" class="form-control">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <div class="row d-flex justify-content-around">
                <div class="col-md-5">
                    <button type="submit" class="btn btn-primary btn-sm btn-block">Submit</button>
                </div>
            </div>
    </form>
@endsection
@section('script')
    <script type="text/javascript">

    </script>
@endsection
