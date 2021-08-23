@extends('frontend.layout.layout')

@section('addition_style')

<style>
    .title1 {
        text-transform: uppercase;
    }

    .header {
        padding: 45px 0px 15px;
    }

    #pricelist_content tr td:nth-child(1) {
        text-transform: uppercase;
    }

    .box17-info .title16 {
        text-transform: uppercase;
    }

    .auth_a {
        width: auto;
    }

    .aligner .cart {
        margin: 0 auto;
    }

    .aligner {
        align-items: center;
        justify-content: center;
    }

    .auth_a .icon-in-item {
        margin: 1px -10px 0 0;
    }

    .auth_a a {
        color: #fff;
        display: flex;
        margin-left: 20px;
    }

    .pagination {
        margin: 0 auto;
        white-space: nowrap;
    }

    .pagination li.page-item {
        display: inline-block;
        width: 32px;
        height: 32px;
        line-height: 32px;
        font-size: 18px;
        text-align: center;
        background: #b8bfc6;
        color: #2d2d2d;
        margin: 0 5px;
        border-radius: 4px;
    }

    .pagination li.page-item.active {
        background: #000000;
        color: #b8bfc6;
    }

    .pagination li.page-item a {
        display: block;
        width: 32px;
        height: 32px;
        line-height: 32px;
        font-size: 18px;
        text-align: center;
        background: #b8bfc6;
        color: #2d2d2d;
        border-radius: 4px;
    }

    .icon-in-item.user {
        background: url(/static/img/profile.png) no-repeat top center;
        height: 15px;
        margin-left: 7px;
    }

    .icon-in {
        width: auto;
    }

    .icon-in a {
        margin-right: 20px;
        color: #fff;
    }

    .icon-in-item.chat {
        background: url(/static/img/bubbles.png) no-repeat center center;
    }

    .icon-in-item.top_cart {
        background: url(/static/img/cart.png) no-repeat center center;
    }

    .quantity-external {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        background: #b8bfc6;
        height: 8px;
        z-index: 15;
    }

    .quantity-inner {
        background: #03a8ed;
        height: 8px;
    }

    .quantity-inner.quantity_max {
        width: 100%;
    }

    .quantity-inner.quantity_avg {
        width: 70%;
    }

    .quantity-inner.quantity_low {
        width: 30%;
    }

    .quantity-inner.quantity_none {
        width: 0%;
    }

    div.quantity_max {
        background-color: rgba(123, 193, 159, 0.7);
    }

    div.quantity_avg {
        background-color: rgba(193, 164, 123, 0.5);
    }

    div.quantity_low {
        background-color: rgba(245, 22, 50, 0.3);
    }

    div.quantity_none {
        background-color: rgba(245, 22, 50, 0.7);
        pointer-events: none;
    }

    span.quantity_max {
        color: rgba(123, 193, 159, 1);
    }

    span.quantity_avg {
        color: rgba(193, 164, 123, 1);
    }

    span.quantity_low {
        color: #e8a3ad;
    }

    span.quantity_none {
        color: rgba(245, 22, 50, 1);
    }

    tr.quantity_none .cart,
    tr.quantity_none .cart-trigger {
        opacity: 0.5;
        pointer-events: none;
    }

    #overlay {
        width: 100%;
        height: 100%;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 999;
        background: rgba(0, 0, 0, 0.7);
        display: none;
    }

    .box6-in {
        background-image: none !important;
    }

    .mobile_only {
        display: none;
    }

    .cart-button.price {
        padding-right: 40px;
        background-image: url(/static/img/cart_dark.png) !important;
        background-position: center right 10px !important;
        background-repeat: no-repeat !important;
        white-space: nowrap !important;
        width: auto;
    }

    .cart-button.price:hover {
        background-image: url(/static/img/cart.png) !important;
    }

    .quantity-external {
        height: 18px;
        line-height: 18px;
        background: #fff;
    }

    .quantity-inner-wrapper {
        height: 18px;
        line-height: 18px;
        position: relative;
    }

    .quantity_inner_wrap {
        height: 18px;
        line-height: 18px;
        position: relative;
        z-index: 10;
        width: 100%;
        z-index: 10;
        opacity: 0.4;
    }

    .quantity_inner_fill {
        height: 18px;
        line-height: 18px;
        position: relative;
        position: absolute;
        top: 0;
        left: 0;
        z-index: 11;
    }

    .quantity_title {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 18px;
        text-align: center;
        line-height: 18px;
        color: #fff;
        z-index: 12;
        font-size: 12px;
    }

    .quantity_max .quantity_inner_wrap,
    .quantity_max .quantity_inner_fill {
        background-color: #7bc19f !important;
    }

    .quantity_avg .quantity_inner_wrap,
    .quantity_avg .quantity_inner_fill {
        background-color: #c1a47b !important;
    }

    .quantity_low .quantity_inner_wrap,
    .quantity_low .quantity_inner_fill,
    .quantity_none .quantity_inner_wrap,
    .quantity_none .quantity_inner_fill {
        background-color: #f51632 !important;
    }

    @media (max-width: 650px) {
        .content-1 {
            z-index: 20;
        }
    }

    .box2.border1 .box2-in {
        align-items: stretch;
    }

    .box2-in-item {
        padding: 25px 15px 25px 15px !important;
    }

    .quantity-external3 {
        bottom: 0px;
    }

    .quantity-external2 {
        bottom: 18px;
    }

    .quantity-external1 {
        bottom: 36px;
    }

    .cart-button.price {
        width: 100%;
    }

    .cart-button.price .wh_label {
        display: block;
        float: left;
        font-size: 12px;
    }

    .cart-button.price .price_label {
        display: block;
        float: right;
    }


    .user-dashboard-menu .box-item4 {
        margin: 0 0px 10px 0px !important;
        font-size: 15px !important;
        border-bottom: 0;
        line-height: 16px;
    }
</style>
    <style>
    .box12-item4, .box12-item5 {
        height: auto;
    }

    .mobile-only {
        display: block;
        font-family: 'SourceSansPro', sans-serif;
        color: #1c1e1f;
        margin-bottom: 5px;

    }

    @media  screen and (min-width: 500px) {
        .box12-item5.moved {
            margin-right: 0;
            margin-left: 10px;
        }

        .mobile-only {

        }
    }

    .box12-item5 {
        border: none;
    }

    .box12-item5 .form-input-line2 {
        border: 1px solid #595959;
        border-radius: 4px;
    }

    .box12-item4 {
        border: none;
    }

    .box12-item4 .form-input-line2 {
        border: 1px solid #595959;
        border-radius: 4px;
    }

    .country_select {
        width: 100%;
        height: 45px;
    }

    .error {
        text-align: center;
        color: #ff0000;
        display: block;
    }

    .has-danger select,
    .has-danger input {
        border-color: #ff0000 !important;
    }

    .has-danger span {
        color: #ff0000;
    }

    @media  only screen
    and (min-device-width: 120px)
    and (max-device-width: 499px) {
        ::-webkit-input-placeholder {
            opacity: 0;
        }

        :-moz-placeholder { /* Firefox 18- */
            opacity: 0;
        }

        ::-moz-placeholder { /* Firefox 19+ */
            opacity: 0;
        }

        :-ms-input-placeholder {
            opacity: 0;
        }
    }

    ::-webkit-input-placeholder {
        opacity: 0;
    }

    :-moz-placeholder { /* Firefox 18- */
        opacity: 0;
    }

    ::-moz-placeholder { /* Firefox 19+ */
        opacity: 0;
    }

    :-ms-input-placeholder {
        opacity: 0;
    }
</style>
<style>
    .personal_area {
        text-shadow: 2px 2px 2px #059dea;
        font-size: 18px !important;
    }
</style>

@endsection

@section('content')

<div class="box5 border1">
    <div class="box5-item1 padding-left">
        <div class="wrap6">
            <div class="wrap6-item1">
                <h3>Your order</h3>
            </div>
                        </div>
    </div>
</div>
<div class="box17 border1">
    <div class="box14-in-item">
        <a href="{{route('cart')}}">
            <div class="title18">Selected products</div>
        </a>
    </div>
    <div class="box14-in-item">
        <a href="{{route('promo')}}">
            <div class="title18">Promotions</div>
        </a>
    </div>
    <form action="{{route('addpromo')}}" method="POST">
        <div class="box17-in">
            <div class="wrap7">
                <div class="title19">Address</div>
            </div>

            <div class="wrap11">

                <div class="box18-in">
                    @csrf
                    <input type="hidden" name="delivery_type" value="1">
                    <div class="box18-in-item">

                        <div class="form-wrap">
                            <div class="box12-item4">
                                <span class="mobile-only">Full name *</span>
                                <input type="text" id="form-input-line" value="Haroon iqbal"
                                       class="form-input-line2" name="order_address[fio]" value="{{$user->full_name}}" placeholder="Ф.И.О. *" autocomplete="off">
                            </div>
                            <div class="box12-item4 ">
                                <span class="mobile-only">E-mail *</span>
                                <input type="text" id="form-input-line" value="harooniqbal585@gmail.com"
                                       class="form-input-line2" name="order_address[email]" value="{{$user->email}}" placeholder="E-mail *" autocomplete="off">
                            </div>

                            <div class="box12-item5">
                                <span class="mobile-only">Address line 1 *</span>
                                <input type="text" id="form-input-line" value="Lahore, pakistan"
                                       class="form-input-line2" name="order_address[address_street]" value="{{$user->addressline1}}" placeholder="Address line 1 *" autocomplete="off">
                            </div>
                            <div class="box12-item5 moved">
                                <span class="mobile-only">Address line 2 (optional)</span>
                                <input type="text" id="form-input-line" value=""
                                       class="form-input-line2" name="order_address[address_street2]" value="{{$user->addressline1}}" placeholder="Address line 2 (optional)" autocomplete="off">
                            </div>

                            <div class="box12-item5">
                                <span class="mobile-only">City *</span>
                                <input type="text" id="form-input-line" value="Lahore"
                                       class="form-input-line2" name="order_address[address_city]" value="{{$user->city}}" placeholder="City *" autocomplete="off">
                            </div>


                            <div class="box12-item5 region1 moved">
                                <span class="mobile-only">State / Region *</span>
                                <input type="text" id="form-input-line" value="punjab"
                                       class="form-input-line2 text_region" name="order_address[address_region]" value="{{$user->state}}" placeholder="State / Region" autocomplete="off">
                            </div>

                            <div style="display:none;" class="box12-item5 region2 moved">
                                <span class="mobile-only">State / Region</span>

                                <select class="country_select region">
                                    <option value="">Choose a state</option>
                                    <option value="AL">Alabama</option>
                                    <option value="AK">Alaska</option>
                                    <option value="AS">American Samoa</option>
                                    <option value="AZ">Arizona</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="CA">California</option>
                                    <option value="CO">Colorado</option>
                                    <option value="CT">Connecticut</option>
                                    <option value="DE">Delaware</option>
                                    <option value="FL">Florida</option>
                                    <option value="GA">Georgia</option>
                                    <option value="GU">Guam</option>
                                    <option value="HI">Hawaii</option>
                                    <option value="ID">Idaho</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IN">Indiana</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="LA">Louisiana</option>
                                    <option value="ME">Maine</option>
                                    <option value="MD">Maryland</option>
                                    <option value="MA">Massachusetts</option>
                                    <option value="MI">Michigan</option>
                                    <option value="MN">Minnesota</option>
                                    <option value="MS">Mississippi</option>
                                    <option value="MO">Missouri</option>
                                    <option value="MP">Northern Mariana Islands</option>
                                    <option value="MT">Montana</option>
                                    <option value="NE">Nebraska</option>
                                    <option value="NV">Nevada</option>
                                    <option value="NH">New Hampshire</option>
                                    <option value="NJ">New Jersey</option>
                                    <option value="NM">New Mexico</option>
                                    <option value="NY">New York</option>
                                    <option value="NC">North Carolina</option>
                                    <option value="ND">North Dakota</option>
                                    <option value="OH">Ohio</option>
                                    <option value="OK">Oklahoma</option>
                                    <option value="OR">Oregon</option>
                                    <option value="PA">Pennsylvania</option>
                                    <option value="PR">Puerto Rico</option>
                                    <option value="RI">Rhode Island</option>
                                    <option value="SC">South Carolina</option>
                                    <option value="SD">South Dakota</option>
                                    <option value="TN">Tennessee</option>
                                    <option value="TX">Texas</option>
                                    <option value="UT">Utah</option>
                                    <option value="VT">Vermont</option>
                                    <option value="VA">Virginia</option>
                                    <option value="VI">U.S. Virgin Islands</option>
                                    <option value="WA">Washington</option>
                                    <option value="DC">District of Columbia</option>
                                    <option value="WV">West Virginia</option>
                                    <option value="WI">Wisconsin</option>
                                    <option value="WY">Wyoming</option>
                                    <option value="AE">AE - US Armed Forces EMEA &amp; Canada</option>
                                    <option value="AP">AP - US Armed Forces Pacific</option>
                                    <option value="AA">AA - US Armed Forces Americas</option>
                                </select>

                            </div>

                            <div class="box12-item5">
                                <span class="mobile-only">Zip Code *</span>
                                <input type="text" id="form-input-line" value="30936"
                                       class="form-input-line2" name="order_address[address_index]" value="{{$user->zipcode}}" placeholder="Zip Code *" autocomplete="off">
                            </div>
                            <div class="box12-item5 moved">
                                <span class="mobile-only">Choose your country *</span>
                                <select class="country_select country" name="order_address[address_country]">
                                    <option value="">Choose your country *</option>
                                                                                <option value="Austria"
                                                                                            >
                                            Austria
                                        </option>
                                                                                <option value="Belgium"
                                                                                            >
                                            Belgium
                                        </option>
                                                                                <option value="Bulgaria"
                                                                                            >
                                            Bulgaria
                                        </option>
                                                                                <option value="Croatia (Hrvatska)"
                                                                                            >
                                            Croatia (Hrvatska)
                                        </option>
                                                                                <option value="Cyprus"
                                                                                            >
                                            Cyprus
                                        </option>
                                                                                <option value="Czech Republic"
                                                                                            >
                                            Czech Republic
                                        </option>
                                                                                <option value="Denmark"
                                                                                            >
                                            Denmark
                                        </option>
                                                                                <option value="Estonia"
                                                                                            >
                                            Estonia
                                        </option>
                                                                                <option value="Finland"
                                                                                            >
                                            Finland
                                        </option>
                                                                                <option value="France"
                                                                                            >
                                            France
                                        </option>
                                                                                <option value="Germany"
                                                                                            >
                                            Germany
                                        </option>
                                                                                <option value="Greece"
                                                                                            >
                                            Greece
                                        </option>
                                                                                <option value="Hungary"
                                                                                            >
                                            Hungary
                                        </option>
                                                                                <option value="Italy"
                                                                                             >
                                            Italy
                                        </option>
                                                                                <option value="Latvia"
                                                                                            >
                                            Latvia
                                        </option>
                                                                                <option value="Lithuania"
                                                                                            >
                                            Lithuania
                                        </option>
                                                                                <option value="Luxembourg"
                                                                                            >
                                            Luxembourg
                                        </option>
                                                                                <option value="Malta"
                                                                                            >
                                            Malta
                                        </option>
                                                                                <option value="Netherlands"
                                                                                            >
                                            Netherlands
                                        </option>
                                                                                <option value="Portugal"
                                                                                            >
                                            Portugal
                                        </option>
                                                                                <option value="Romania"
                                                                                            >
                                            Romania
                                        </option>
                                                                                <option value="Slovakia"
                                                                                            >
                                            Slovakia
                                        </option>
                                                                                <option value="Slovenia"
                                                                                            >
                                            Slovenia
                                        </option>
                                                                                <option value="Spain"
                                                                                            >
                                            Spain
                                        </option>
                                                                                <option value="Sweden"
                                                                                            >
                                            Sweden
                                        </option>
                                                                                <option value="Switzerland"
                                                                                            >
                                            Switzerland
                                        </option>
                                                                                <option value="United Kingdom"
                                                                                            >
                                            United Kingdom
                                        </option>
                                                                        </select>
                            </div>

                            <p class="address_mobile" style="margin-bottom:15px;display:none;">
                                We are testing a new shipping way, which should have close to 100% delivery success rate. You will get USPS tracking number.
                                For this way phone number is needed. You might be contacted by USPS employee if your pack does not fit into your postal box, e.g.
                            </p>

                            <p class="address_vat" style="margin-bottom:15px;display:none;">
                                Since January 1st, 2021 postal service requires VAT for all orders shipped to UK. Without VAT orders to UK can not be processed and shipped.
                                Please indicate your VAT in the field below:
                            </p>

                            <div style="display:none;" class="address_vat box12-item5">
                                <span class="mobile-only">VAT number *</span>
                                <input type="text" id="form-input-line" value=""
                                       class="form-input-line2" name="order_address[address_vat]" placeholder="VAT number *" autocomplete="off">
                            </div>

                            <div style="display:none;" class="address_mobile box12-item5">
                                <span class="mobile-only">Phone number</span>
                                <input type="text" id="form-input-line" value=""
                                       class="form-input-line2" name="order_address[mobile_number]" placeholder="Phone number" autocomplete="off">
                            </div>

                            </div>

                    </div>
                </div>

            </div>

            <div class="wrap10">
                <div class="further">
                    <div class="further-item1">
                        <input type="submit" class="button4" value="Next">
                    </div>
                    <div class="further-item2">
                        <div class="text5">
                            <p>to confirmation</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </form>

    <div class="box14-in-item">
        <div class="title17">Confirmation</div>
    </div>
</div>
@endsection