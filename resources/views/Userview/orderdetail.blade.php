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
    .transfer_data {
        width: 100%;
        border: 0;
        border-collapse: collapse;
    }

    .transfer_data th, .transfer_data td {
        padding: 10px;
        border-bottom: 1px solid #fff;
        text-align: center;
    }

    .spacer {
        height: 30px;
    }

    dl {
        width: 100%;
        margin-bottom: 20px;
        clear: both;
    }

    dl dt {
        width: 220px;
        float: left;
        margin-bottom: 20px;
    }

    dl dd {
        width: calc(100% - 220px);
        float: left;
        margin-bottom: 20px;
    }

    .outer_right {
        float: right;
        max-width: 420px;
        width: 100%;
        margin-top: 20px;
    }

    .weighted {
        font-size: 18px;
        font-weight: bold;
        max-width: 420px;
        width: 100%;
        padding: 10px 0;
    }

    .weighted span {
        float: right;
    }

    .button4 {
        width: auto !important;
        padding: 0 10px;
    }
</style>

<style>
    .box17-in {
        background: none;
        color: #fff;
        border: none;
        margin-left: -15px;
    }

    .box17-in .title19 {
        color: #fff;
        border-bottom: 1px dotted #fff;
    }

    .transfer_data a {
        color: #ff0000;
    }

    .box17-in .nfo2-title,
    .box17-in .nfo2-text {
        color: #fff;
    }

    .box12-item4 {
        background: #fff;
        border: 1px solid #fff;
    }

    .nfo2-text .text3 p {
        color: #fff;
    }

    .box14-in-item-active {
        color: #fff;
        border-color: #fff;
    }

    .linewrap {
        width: 100%;
        padding: 10px 0;
        border-bottom: 1px solid #fff;
    }

    .linewrap .transfer_label {
        width: 47.5%;
        float: left;
        padding-right: 5%;
    }

    .linewrap .transfer_value a {
        color: #ff0000;
    }

    .linewrap .transfer_value {
        width: 47.5%;
        float: left;
        text-align: right;
    }

    div.clear {
        clear: both;
    }

    .mobile_label {
        display: none;
        font-size: 12px;
        margin-bottom: 5px;
    }

    @media  all and (max-width: 600px) {
        .desktop_only {
            display: none;
        }

        .mobile_only {
            display: block;
        }

        .box18-in-item:nth-child(even) {
            margin-right: 0;
        }

        .box18-in-item {
            flex-basis: 100%;
        }

        .payment_variant, .methsel {
            background: #fff;
        }

        .mobile_label {
            display: block;
        }
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
<div class="box1 border1">
    <div class="title6">Order #{{$ordernumber}}</div>
    
</div>

    <div class="box17 border1">
    <div class="box17-in">

        <style>
            .delivery-part {
                width: 31%;
                margin-right: 2.333%;
                float: left;
            }

            .delivery-part .header a {
                color: #089dea;
            }

            .delivery-part .header {
                font-size: 16px;
                font-weight: bold;
            }

            .delivery-part p.content {
                margin-top: 10px;
                font-size: 14px;
                background: none;
            }

            .pay-data {
                width: 240px;
                float: left;
            }

            .pay-warning {
                width: calc(100% - 240px);
                float: left;
            }

            .pay-warning a {
                color: #089dea;
            }

            .new-payment p {
                margin-bottom: 15px;
            }
        </style>

        <div class="wrap11">
            <div class="box18-in">
                <div class="box18-in-item">
                                                <div class="title19">Payment details:</div>
                        <div style="height:25px;"></div>
                        <div class="new-payment">
                            <div class="pay-data">
                                                                
                                                                                                        </div>
                            <div class="pay-warning">
                                                                        <p>Wallet address:</p>
                                    <p style="font-size:15px;">{{$order->walletaddress}}</p>
                                    <div class="blue-block">
                                        <p>AFTER PAYMENT IS DONE, PLEASE SUBMIT
                                            <a href="/user/transfer">PAYMENT</a> INFO ABOUT YOUR TRANSFER TO PAYMENT SECTION IN THE UPPER MENU.
                                            OTHERWISE WE WILL NOT KNOW THAT YOU PAID AND YOUR ORDER WILL NOT BE PROCEEDED!</p>
                                    </div>
                                
                            </div>
                            <br clear="all">
                        </div>
                                            <div style="height:40px;"></div>
                    <div class="title19">Delivery:</div>
                    <div style="height:25px;"></div>
                    <div class="new-delivery">
                        <div class="delivery-part">
                            <span class="header">Address (<a href="/user/edit_order_address/E6WBCWAB">edit</a>)</span>
                            <p class="content">
                                {{$order->user->full_name}}<br>
                                {{$order->user->addressline1}}<br>
                                {{$order->user->addressline2}}

                                <br>
                                {{$order->user->email}}
                                <br>
                                                                </p>
                        </div>
                        <div class="delivery-part">
                            <span class="header">Delivery</span>
                            <p class="content">
                                Priority Mail worldwide
                            </p>
                                                                <div style="height:15px;"></div>
                                <span class="header">Tracking number:</span>
                                                                                            </div>
                        <div class="delivery-part">
                            <span class="header">Comment (<a onclick="$('p.comment_content').toggle();$('form.comment_edit').toggle();"
                                                             href="javascript:void(0);">edit</a>)</span>
                            <p class="content comment_content">
                                {{$order->comment}}
                            </p>
                            <form style="display:none;" class="comment_edit" action="https://basicstero.ws/user/edit_comment/E6WBCWAB" method="POST">
                                <textarea name="comment" style="width:100%;padding:10px;margin-top:10px;
                                min-height:70px;border-radius:5px;"></textarea>
                                <input type="hidden" name="_token" value="mt1meYFb2ciMkWpc57plx1z0geetucmw3XEaJjoP">
                                <input type="submit" class="button4" value="Update comment">
                            </form>
                        </div>
                        <br clear="all">
                    </div>
                    
                    <div style="height:25px;"></div>
                    <div class="title19">Status:
                                                        {{$order->status}}
                                                </div>
                    <div style="height:25px;"></div>
                    <div class="title19">Selected products:</div>

                    <table class="transfer_data desktop_only">
                        <thead>
                        <th>Title</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        </thead>
                        <tbody>
                            @foreach ($order->products as $orderp)
                                <tr class="odd">
                                    <td class="w400" style="text-transform:uppercase;">{{$orderp->title}}</td>
                                    <td class="w80">{{$orderp->quantity}}</td>
                                    <td class="w150">${{$orderp->price}}</td>
                                </tr>
                            @endforeach
                         
                                                                                </tbody>
                    </table>

                    @foreach ($order->products as $orderp)
                    <div class="transfer_data_mobile mobile_only">
                        <div class="linewrap">
                            <div class="transfer_label">Title</div>
                            <div class="transfer_value" style="text-transform:uppercase;">{{$orderp->title}}</div>
                            <div class="clear"></div>
                            </div>
                            <div class="linewrap">
                            <div class="transfer_label">Quantity</div>
                            <div class="transfer_value">{{$orderp->quantity}}</div>
                            <div class="clear"></div>
                            </div>
                            <div class="linewrap">
                            <div class="transfer_label">Price</div>
                            <div class="transfer_value">${{$orderp->price}}</div>
                            <div class="clear"></div>
                            </div>

                            <div style="height:15px;"></div>
                                            </div>
                    @endforeach

                  

                    <div class="outer_right">

                        <div class="order-total-delivery weighted">
                            Products total:
                            <span class=" w150">${{$order->producttotal}}</span>
                        </div>

                                                                                                                                    <div class="order-total-delivery weighted">
                                        Bitcoin discount:
                                        <span class="w150">{{$order->discount}}%</span>
                                    </div>
                                                                                            
                        <div class="order-total-delivery weighted">
                            Delivery:
                            <span class="w150">${{$order->delivery}}</span>
                        </div>
                        <div class="order-total-price weighted">
                            Your current balance:
                            <span class="w150">${{$order->currentbalance}}</span>
                        </div>
                        <div class="order-total-price weighted">
                            Your order total:
                            <span class="w150">${{$order->ordertotal}}</span>
                        </div>
                                                        <div class="order-total-price weighted">
                                Bitcoin total:
                                <span class="w150">{{$order->bitcoin}} coins</span>
                            </div>
                                                    <div class="order-total-price weighted">
                                                                Amount left to pay:
                                <span class="w150">$
                                    {{$order->amountleft}}
                            </span>
                                                        </div>
                                                        <div>
                                <p>If you have some funds on your balance, our system will credit it towards covering the cost of the current order. Your balance value will be subtracted from your
                                    current order total, so you will be required to pay the remaining cost only.</p>
                            </div>
                                                </div>
                </div>
            </div>
        </div>

        <div class="spacer"></div>

        <div class="wrap10">
            <div class="further" style="display:block;width:100%;">
                <div class="further-item1" style="float:left;">
                    <a href="{{route('order')}}" class="button4">Back to order list</a>
                </div>

                {{-- <div class="further-item1" style="float:right;">
                    <form method="POST" action="https://basicstero.ws/user/edit_order/E6WBCWAB">
                        <input type="hidden" name="_token" value="mt1meYFb2ciMkWpc57plx1z0geetucmw3XEaJjoP">
                        <a onclick="$(this).parent().submit();" class="button4" href="javascript:void(0)">Edit order</a>
                    </form>
                </div> --}}
                <br clear="all">
            </div>
        </div>

    </div>
</div>

@endsection