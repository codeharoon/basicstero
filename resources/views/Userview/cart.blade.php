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
    .box17-in-item.warning .title16 {
        color: #ff0000;
    }

    .box17-in-item.warning .cart-title2 {
        color: #ff0000;
    }

    .attention2 {
        margin: 30px 0 20px;
        color: #f51632;
        font-family: 'SourceSansPro-Light', sans-serif;
        font-size: 30px;
        font-weight: 300;
        line-height: 36px;
        padding: 15px 15px 15px;
        background-color: rgba(245, 22, 50, 0.05);
        border: 1px solid #f51632;
    }

    .pay_method_button {
        margin-right: 20px !important;
        position: relative;
        display: inline-block;
    }

    .pay_method_button label {
        width: 150px !important;
        height: 75px !important;
        position: relative;
        display: block;
        text-align: center;
        padding: 15px !important;
        cursor: pointer;
    }

    .pay_method_button label img {
        width: 100% !important;
        height: 100% !important;
        object-fit: contain;
        margin: 0 auto;
    }

    input[type="radio"] {
        display: none;
    }

    .pay_method_button {
        border: 1px solid #0f0f0f;
        padding: 3px;
        margin-right: 50px !important;
        margin-left: 0 !important;
        border-radius: 5px;
        margin-bottom: 15px;
    }

    .active_payment {
        border: 3px solid #00b4ec;
        padding: 0;
    }

    .active_payment label {
        padding: 13px !important;
    }

    .form-delivery {
        width: 100%;
        margin: 20px 0 45px 0;
    }
</style>

@endsection

@section('content')
<div class="box5 border1">
    <div class="box5-item1 padding-left">
        <div class="wrap6">
            <div class="wrap6-item1">
                <h3 class="order-header" style="display:none">
                                                Your order
                                        </h3>
            </div>
                        </div>
        <div class="attention" style="display:none">
            <p>Your order can not be processed.<br>
                Your shopping card has products available on different warehouses. Only items from one single warehouse can be shipped within one and the same order.</p>

        </div>
        <div class="attention2 price_hider" style="display:none">
            <p>Minimum order ammount - $0</p>
        </div>

    </div>
</div>


@if ($product)
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
        <div class="attention" style="display:none">
            <p>Your order can not be processed.<br>
                Your shopping card has products available on different warehouses. Only items from one single warehouse can be shipped within one and the same order.</p>

        </div>
        <div class="attention2 price_hider" style="display:none">
            <p>Minimum order ammount - $0</p>
        </div>

    </div>
</div>

<div class="box17 border1">
    <div class="box17-in">
        <div class="wrap7">
            
                <div class="title15">Select payment method:</div>

                <form class="form-delivery" action="/set_payment_method" method="POST">
                    <input type="hidden" name="_token" value="WtIS4OT6NcJ2xcdV0FL3i56M2c3xvGRs5lOWSfzc">                        <p class="pay_method_button active_payment ">
                        <label for="p-bitcoin"><img src="{{asset('payments/bitcoin_logo.png')}}" width="50"></label>
                        <input type="radio" id="p-bitcoin" name="payment_method"
                               value="Bitcoin">
                    </p>

                    <p class="pay_method_button ">
                        <label for="p-BitcoinCash"><img src="{{asset('payments/BitcoinCash.png')}}"></label>
                        <input type="radio" id="p-BitcoinCash" name="payment_method"
                               value="BitcoinCash">
                    </p>

                    <p class="pay_method_button ">
                        <label for="p-Litecoin"><img src="{{asset('payments/Litecoin.png')}}"></label>
                        <input type="radio" id="p-Litecoin" name="payment_method"
                               value="Litecoin">
                    </p>

                    <p class="pay_method_button ">
                        <label for="p-Ethereum"><img src="{{asset('payments/Ethereum.png')}}"></label>
                        <input type="radio" id="p-Ethereum" name="payment_method"
                               value="Ethereum">
                    </p>

                    <p class="pay_method_button ">
                        <label for="p-Tether"><img src="{{asset('payments/tether.png')}}"></label>
                        <input type="radio" id="p-Tether" name="payment_method"
                               value="Tether">
                    </p>

                    <p class="pay_method_button ">
                        <label for="p-Dash"><img src="{{asset('payments/Dash.png')}}"></label>
                        <input type="radio" id="p-Dash" name="payment_method"
                               value="Dash">
                    </p>

                    <p class="pay_method_button ">
                        <label for="p-western"><img src="{{asset('payments/pay-western.png')}}" width="50"></label>
                        <input type="radio" id="p-western" name="payment_method"
                               value="Western Union">
                    </p>

                    <p class="pay_method_button ">
                        <label for="p-moneygram"><img src="{{asset('payments/moneygram.png')}}" width="50"></label>
                        <input type="radio" id="p-moneygram" name="payment_method"
                               value="MoneyGram">
                    </p>

                    <p class="pay_method_button ">
                        <label for="p-balance" style="line-height:83px;position:relative;">
                            <span>&nbsp;</span>
                            <span style="position:absolute;top:-5px;left:0;width:100%;text-align:center;">Pay from balance</span>
                        </label>
                        <input type="radio" id="p-balance" name="payment_method"
                               value="balance">
                    </p>


                    <br clear="all">


                </form>

                <style>
                    .col-md-9 {
                        width: calc(75% - 20px);
                        float: left;
                        margin-right: 20px;
                    }

                    .col-md-3 {
                        width: 25%;
                        float: left;
                    }

                    .promocode {
                        width: 100%;
                        height: 34px;
                        line-height: 34px;
                        border-radius: 5px;
                        padding: 0 10px;
                        border: 1px solid #000;
                    }

                    .promocode-apply {
                        width: 100%;
                        text-align: center;
                    }

                    .promocode-holder {
                        margin: 15px 0;
                    }

                    .promocode-status {
                        color: #089dea;
                        margin-top: 10px;
                    }
                </style>
                <div class="title15">Promocode</div>
                <form method="POST" action="https://basicstero.ws/apply_promocode">
                    <input type="hidden" name="_token" value="WtIS4OT6NcJ2xcdV0FL3i56M2c3xvGRs5lOWSfzc">
                    <div class="promocode-holder">
                        <div class="col-md-9 col">
                            <input type="text" class="promocode" name="promocode" value="">
                        </div>
                        <div class="col-md-3 col">
                            <input type="submit" class="button4 promocode-apply" value="apply promocode">
                        </div>
                        <br clear="all">
                        <div class="promocode-status"></div>
                    </div>
                </form>
                 @php
                     $price=0;
                 @endphp
                <div class="title15">Selected products</div>
                     @foreach ($product as $item)
                     @foreach ($item as $citem)
                            <div class="box17-in-item" id="product_114">
                                <div class="box17-img">
                                    <a href=""><img src="{{asset('/assets/backend/product/image/'.$citem->image)}}" alt=""></a>
                                </div>
                                <div class="box17-info">
                                    <div class="title16">{{$citem->title}}</div>
                                    <div class="text5 margin5">
                                        <p>{{$citem->Dosage}}</p>
                                        <p>{{$citem->Dosage}}</p>
                                        <strong>Warehouse {{$ware}}</strong>
                                    </div>
                                </div>
                                <div class="cart-wrap2">
                                    <div class="cart-item1">
                                        <div class="cart">
                                            <div class="minus2"></div>
                                            <div class="sum2">
                                                <input type="text" data-product_id="{{$citem->id}}" disabled value="{{$data[$citem->id]}}">
                                            </div>
                                            <div class="plus2"></div>
                                        </div>
                                    </div>
                                    <div class="cart-item2">
                                        <div class="cart-title2">
                                              @php
                                                  $price=$price+($citem->stock[$ware-1]->price*$data[$citem->id]);
                                              @endphp
                                              <span id="product_price_{{$citem->id}}">${{$citem->stock[$ware-1]->price*$data[$citem->id]}}</span>  
                                          
            
                                        </div>
                                    </div>
                                </div>
                                <div class="box17-close">
                                    <a href="https://basicstero.ws/del_from_cart/114">
                                        <img src="{{asset('img/cross.png')}}" alt="">
                                    </a>
                                </div>
                            </div>  
                     @endforeach
                     @endforeach
                
                                            </div>
                        <div class="wrap8">
                <div class="delivery">
                    <div class="delivery-item">
                        <div class="text5">
                            <p>Select shipping method:</p>
                        </div>
                    </div>
                    <div class="delivery-item">
                        <form>
                            <select name="" id="" value="" class="my_select_form">
                                <option value="1" selected class="option">Priority Mail worldwide</option>
                            </select>
                        </form>
                    </div>
                    <div class="delivery-item">
                        <div class="cart-title2">
                            <span id="delivery_price">$43.00</span>
                        </div>
                    </div>
                </div>
            </div>
                                <div class="wrap9">
                    <div class="title15" style="margin-right:135px;font-size:26px;">Bitcoin discount - 5%</div>
                </div>
                            <div class="wrap9">
                <div class="all-sum">
                    <div class="all-sum-item">
                        <div class="title15">Total</div>
                    </div>
                    <div class="all-sum-item">
                        <div class="cart-title2">
                            <span id="total_price">${{$price+43.00}}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrap10 price_hider2" style="display:block">
                <div class="further">
                    <a href="{{route('promo')}}">
                        <div class="further-item1">
                            <div class="button4">Next</div>
                        </div>
                    </a>
                    <div class="further-item2">
                        <div class="text5">
                            <p>Address</p>
                        </div>
                    </div>
                </div>
            </div>
                </div>

    <div class="box14-in-item margin1">
        <div class="title17">Promotions</div>
    </div>
    <div class="box14-in-item">
        <div class="title17">Address</div>
    </div>
    <div class="box14-in-item">
        <div class="title17">Confirmation</div>
    </div>
</div>
@else
<div class="box17 border1">
    <div class="box17-in">
        <div class="wrap7">
                                <div class="title15">Your cart is empty</div>
                        </div>
                </div>

    <div class="box14-in-item margin1">
        <div class="title17">Promotions</div>
    </div>
    <div class="box14-in-item">
        <div class="title17">Address</div>
    </div>
    <div class="box14-in-item">
        <div class="title17">Confirmation</div>
    </div>
</div>
@endif




@endsection