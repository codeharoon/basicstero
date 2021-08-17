@extends('Userview.layouts.layout')

@section('custom_css')
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
        background: url({{asset('img/profile.png')}}) no-repeat top center;
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
        background: url({{asset('img/bubbles.png')}}) no-repeat center center;
    }

    .icon-in-item.top_cart {
        background: url({{asset('img/cart.png')}}) no-repeat center center;
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
        background-image: url({{asset('img/cart_dark.png')}}) !important;
        background-position: center right 10px !important;
        background-repeat: no-repeat !important;
        white-space: nowrap !important;
        width: auto;
    }

    .cart-button.price:hover {
        background-image: url({{asset('img/cart.png')}}) !important;
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

    label.full_width {
        width: 100%;
    }

    .button4 {
        width: auto;
        padding: 0 10px;
    }

    @media  screen and (min-width: 500px) {
        .box12-item5:nth-child(even) {
            margin-right: 0;
            margin-left: 10px;
        }
    }

    .has-danger {
        border-color: #ff0000;
        color: #ff0000;
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
@endsection

@section('content')
<div class="box1 border1">
    <div class="title6">Dashboard</div>
    
</div>


<div class="box17 border1">
    <form method="POST" action="{{route('storepassword')}}">
        @csrf
        <div class="box17-in">
            <div class="wrap7">
                <div class="title19">Change password</div>
            </div>

            <div class="wrap11">
                <div class="box18-in">
                    <div class="box18-in-item">
                        <div class="form-wrap">
                            <div class="box12-item4">
                                <span class="mobile-only">New password *</span>
                                <input type="password" id="form-input-line" value=""
                                       class="form-input-line2" name="password" placeholder="New password" autocomplete="off">
                            </div>
                            <div class="box12-item4">
                                <span class="mobile-only">Repeat password *</span>
                                <input type="password" id="form-input-line"
                                       class="form-input-line2" name="password_confirmation" placeholder="Repeat password" autocomplete="off">
                            </div>

                        </div>

                    </div>
                    <div class="box18-in-item">

                    </div>
                </div>

            </div>

            <div class="wrap10">
                <div class="further">
                    <div class="further-item1">
                        <input type="submit" class="button4" value="Change password">
                    </div>
                </div>
            </div>

        </div>
    </form>
</div>
@endsection