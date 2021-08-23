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
    .priceline {
        font-size: 15px;
        padding: 10px 0;
        border-bottom: 1px solid #bebebe;
    }

    .priceline:last-of-type {
        border-bottom: 0;
        font-size: 18px;
    }

    .text5 p {
        margin-bottom: 15px;
    }

    .balance-trigger {
        margin-bottom: 15px;
        cursor: pointer;
    }

    .hider-balance {
        display: none;
    }

    .gray-block2 {
        padding: 0 15px 15px 15px;
        font-family: 'SourceSansPro-Regular', sans-serif !important;
    }

    .wrapper-small-block {
        margin-top: 15px;
        font-family: 'SourceSansPro-Regular', sans-serif;
        padding: 15px;

    }

    .wrap11 {
        font-family: 'SourceSansPro-Regular', sans-serif !important;
    }

    .wrap11 p {
        font-family: 'SourceSansPro-Regular', sans-serif !important;
    }

    .box17-img {
        padding: 0;
        flex-grow: 0;
    }

    .box17-in-item {
        margin: 20px 0;
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
                <h3 class="order-header" style="display:block">
                                                Your order
                                        </h3>
            </div>
                                <div class="wrap6-item2">
                    <a href="https://basicstero.ws/clear_cart">
                                                        <div class="button5">Clear cart</div>
                                                </a>
                </div>
                        </div>
    </div>
</div>
<div class="box17 border1">
    <div class="box14-in-item">
        <a href="https://basicstero.ws/order/cart">
            <div class="title18">Selected products</div>
        </a>
    </div>
    <div class="box14-in-item">
        <a href="https://basicstero.ws/order/promo">
            <div class="title18">Promotions</div>
        </a>
    </div>
    <div class="box14-in-item">
        <a href="https://basicstero.ws/order/address">
            <div class="title18">Address</div>
        </a>
    </div>
    
    <div class="box14-in-item">
        <a>
            <div class="title18" style="border-bottom:0;">Confirmation</div>
        </a>
    </div>
    <div class="box17-in">
        

        <form method="POST" class="order_form" action="https://basicstero.ws/order/add">
            <input type="hidden" name="_token" value="WtIS4OT6NcJ2xcdV0FL3i56M2c3xvGRs5lOWSfzc">
            <input type="hidden" name="custom_token" value="5772801151">
            <div class="wrap11" style="padding:20px;">

                <div class="box18-in">

                    <div class="box18-in-item">

                        <div class="gray-block2" style="font-size:22px;margin-bottom:10px;">
                            Attention!
                        </div>

                        <div class="gray-block2" style="font-size:16px;margin-bottom:10px;">
                            Please read our ordering terms carefully!
                        </div>

                        <div class="gray-block2" style="font-size:16px;margin-bottom:10px;">
                            1. SEIZED ORDERS ARE RESHIPPED ONLY ONE TIME!
                        </div>

                        <div class="gray-block2" style="font-size:16px;margin-bottom:10px;">
                            2. INTERNATIONAL ORDERS ARE NOT RESHIPPED FROM DOMESTIC WAREHOUSE AND NO DOMESTIC STORE CREDIT IS PROVIDED (FOR USA-BASED CUSTOMERS)! NO EXCEPTIONS!
                        </div>

                        <div class="gray-block2" style="font-size:16px;margin-bottom:10px;">
                            3.COMPLAINS REGARDING BROKEN OR MISSING ITEMS ARE ACCEPTED ONLY IF UNPACKING VIDEO IS PROVIDED! ON VIDEO SHOULD BE CLEARLY SEEN THE FRONT SIDE OF THE PACKAGE,
                            ADDRESS,NAME.
                            VIDEO OR PICTURES WITH ALREADY OPENED PACKAGES ARE NOT ACCEPTED!
                        </div>
                        <div class="gray-block2" style="font-size:16px;margin-bottom:10px;">
                            <textarea name="comment" class="form-input-area" placeholder="If you have any comment to your order, please submit it here"></textarea>
                        </div>


                        <div class="gray-block2" style="font-size:16px;margin-bottom:10px;">
                            By confirming this order you agree with our ordering terms. Post-sale support is carried out according to these terms. If you don`t agree with our ordering conditions,
                            you should not confirm your order.
                        </div>

                        <div class="further" style="margin-left:15px;">
                            <div class="further-item1">
                                <input type="submit" class="button6 unclick" value="I confirm my order">
                            </div>
                        </div>


                    </div>

                </div>

            </div>

        </form>
    </div>

</div>
@endsection