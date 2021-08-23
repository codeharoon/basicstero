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
    .transfers_list {
        width: 100%;
        border-bottom: 1px solid #fff;
        padding-left: 30px;
        margin-top: 30px;
    }

    .tab {
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
        border: 1px solid #fff;
        border-bottom: 0px;
        padding: 10px 25px;
        color: #fff;
        display: inline-block;
        z-index: 10;
        font-size: 15px;
        margin: 0 -4px -1px 0;
        background: #1c1e1f;
        position: relative;
        line-height: 20px;
        cursor: pointer;
    }

    .tab.active {
        font-size: 17px;
        z-index: 15;
        padding: 15px 25px;
    }
</style>
<style>
    .box12-item4, .box12-item5 {
        height: auto;
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

    p.warning {
        color: #ff0000;
        text-align: center;
        margin: 15px 0;
    }

    p.warning.big {
        font-weight: bold;

    }

    .box14-in-item-active {
        background: none;
        border-color: #000;
        color: #000;
    }

    .nfo2-title.title14 {
        color: #000;
        font-size: 22px;
        border-bottom: none;
    }

    .nfo2-text .text3 p {
        color: #000
    }

    .methsel {
        width: 100%;
        margin-bottom: 10px;
        height: 44px;
        font-size: 16px;
    }

    .normal-font {
        font-family: 'SourceSansPro-Light', sans-serif;
    }

    .normal-font p {
        line-height: 20px;
        margin-bottom: 15px;
    }

    .full_width {
        width: 100% !important;
        flex-basis: 100% !important;
        margin-right: 0 !important;
    }

    .box18-in-item {
        flex-basis: 45%;
    }

    .box18-in-item:nth-child(even) {
        margin-right: 45px;
    }

    .button4 {
        width: auto !important;
        padding: 0 10px;
    }

    .bit-amm {
        display: none;
    }

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
        margin-right: 20px !important;
        position: relative;
        display: inline-block;
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

    .headtext {
        margin: 0 60px 0px 60px;
        color: #fff;
        padding: 20px;
        border-radius: 5px;
        background: rgba(255, 255, 255, 0.15);;
    }

    .headtext p {
        color: #fff;
        line-height: 22px;
        padding-bottom: 10px;
    }

    .headtext strong {
        font-family: 'SourceSansPro-Bold', sans-serif;
        font-size: 20px;
    }

    .list-table {
        width: 100%;
        border-collapse: collapse;
    }

    .list-table th,
    .list-table td {
        border: 1px solid #1c1e1f;
        padding: 5px;
        text-align: center;
    }
</style>

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
@endsection

@section('content')
<div class="box1 border1">
    <div class="title6">Dashboard</div>
    
</div>

    <div class="headtext">
    <p><strong style="color:#089dea;">IMPORTANT: THIS IS NOT A PAYMENT GATEWAY! YOU CAN NOT DIRECTLY PAY ON THIS PAGE THROUGH CRYPTOCURRENCY OR WU/MG.</strong></p>

    <p>
        This page is needed only to submit information about payments, which you have already done!
        Once you place an order you get payment details assigned for your order. You need to make a payment to those credentials received after checkout.
        Once payment is done you need to visit this page and submit payment information for your order.
    </p>
    <p>
        If you do not submit payment details for your order, we will not know that you paid and your order will be
        automatically removed by our system 5 days after you placed it.
    </p>
    <p>
        On this page you can also request payment details,if you wish to add funds to your balance in advance without placing an order!
        In this case you will be able placing an order later and get it covered and confirmed by your balance immediately!
    </p>
</div>
<div class="box17 border1" style="padding-top:15px;">
    <div class="transfers_list">
        <div class="tab active payment" data-linked="transfer-tab-6">
            Submit payment info
        </div>
        <div class="tab pocket" data-linked="transfer-tab-5">
            Request payment info
        </div>
        <div class="tab" data-linked="transfer-tab-1">
            Pending transfers
        </div>
        <div class="tab" data-linked="transfer-tab-2">
            Confirmed transfers
        </div>
        <div class="tab" data-linked="transfer-tab-3">
            Cancelled transfers
        </div>
        <div class="tab" data-linked="transfer-tab-4">
            All transfers
        </div>
    </div>
    <div class="box17-in">
        <div class="transfer-tab transfer-tab-1" style="display:none;">
            <div class="wrap7">
    <div class="title19">You don&#039;t have any active transfers</div>
</div>
        </div>
        <div class="transfer-tab transfer-tab-2" style="display:none;">
            <div class="wrap7">
    <div class="title19">You don&#039;t have any confirmed transfers</div>
</div>
        </div>
        <div class="transfer-tab transfer-tab-3" style="display:none;">
            <div class="wrap7">
    <div class="title19">You don&#039;t have any cancelled transfers</div>
</div>
        </div>
        <div class="transfer-tab transfer-tab-4" style="display:none;">
            <div class="wrap7">
    <div class="title19">You don&#039;t have any transfers</div>
</div>
        </div>

        <div class="transfer-tab pocket transfer-tab-5" style="display:none;">
            <div class="wrap7">
                <div class="title19">Select payment method</div>
            </div>

            <div style="padding:20px 20px 5px 20px;border-radius:10px;background:#fff;">
                <form class="get_payment_info" method="POST" action="https://basicstero.ws/user/receive_pocket_data">
                    <input type="hidden" name="_token" value="2TzQgAdUTAnSPKK1fd5rT9oBHhhLh4InMoukKhN3">                        <p class="pay_method_button ">
                        <label for="p-bitcoin"><img src="{{asset('payments/bitcoin_logo.png')}}" width="50"></label>
                        <input type="radio" id="p-bitcoin" name="payment_method"
                               value="3">
                    </p>

                    <p class="pay_method_button ">
                        <label for="p-BitcoinCash"><img src="{{asset('payments/BitcoinCash.png')}}"></label>
                        <input type="radio" id="p-BitcoinCash" name="payment_method"
                               value="5">
                    </p>

                    <p class="pay_method_button ">
                        <label for="p-Litecoin"><img src="{{asset('payments/Litecoin.png')}}"></label>
                        <input type="radio" id="p-Litecoin" name="payment_method"
                               value="6">
                    </p>

                    <p class="pay_method_button ">
                        <label for="p-Ethereum"><img src="{{asset('payments/Ethereum.png')}}"></label>
                        <input type="radio" id="p-Ethereum" name="payment_method"
                               value="7">
                    </p>

                    <p class="pay_method_button ">
                        <label for="p-Tether"><img src="{{asset('payments/tether.png')}}"></label>
                        <input type="radio" id="p-Tether" name="payment_method"
                               value="10">
                    </p>

                    <p class="pay_method_button ">
                        <label for="p-Dash"><img src="{{asset('payments/Dash.png')}}"></label>
                        <input type="radio" id="p-Dash" name="payment_method"
                               value="8">
                    </p>

                    <p class="pay_method_button ">
                        <label for="p-western"><img src="{{asset('payments/pay-western.png')}}" width="50"></label>
                        <input type="radio" id="p-western" name="payment_method"
                               value="1">
                    </p>

                    <p class="pay_method_button ">
                        <label for="p-moneygram"><img src="{{asset('payments/moneygram.png')}}" width="50"></label>
                        <input type="radio" id="p-moneygram" name="payment_method"
                               value="2">
                    </p>
                    <br clear="all">
                    <div style="font-size:12px;color:#000;display:none;" class="request_pocket">Payment amount</div>
                    <input type="text" name="payment_amount" class="request_pocket req_input" placeholder="Payment amount">

                    <select name="currency" class="request_pocket req_input">
                        <option value="1">USD</option>
                        <option value="2">EUR</option>
                        <option value="3">GBP</option>
                    </select>

                    <input type="submit" class="button6 request_pocket" value="Request payment info" style="display:none;margin-bottom:15px;float:left;">
                    <br clear="all">
                                        </form>
            </div>

            <style>
                .req_input {
                    border: 1px solid #000;
                    height: 34px;
                    line-height: 34px;
                    margin-right: 50px;
                    float: left;
                    width: 160px;
                    margin-bottom: 15px;
                    border-radius: 5px;
                    color: #000;
                    padding: 0px 15px;
                    display: none;
                }

                .req_input::placeholder {
                    color: #000;
                }
            </style>

            
        </div>

        <div class="transfer-tab payment transfer-tab-6">

            <div class="wrap7">
                <div class="title19">Select payment method</div>
            </div>

            <div style="padding:20px 20px 5px 20px;border-radius:10px;background:#fff;">
                <form class="submit_payment_info">
                    <input type="hidden" name="_token" value="2TzQgAdUTAnSPKK1fd5rT9oBHhhLh4InMoukKhN3">                        <p class="pay_method_button ">
                        <label for="p-bitcoin"><img src="/static/imgold/bitcoin_logo.png" width="50"></label>
                        <input type="radio" id="p-bitcoin" name="payment_method"
                               value="Bitcoin">
                    </p>

                    <p class="pay_method_button ">
                        <label for="p-BitcoinCash"><img src="/static/imgold/BitcoinCash.png"></label>
                        <input type="radio" id="p-BitcoinCash" name="payment_method"
                               value="BitcoinCash">
                    </p>

                    <p class="pay_method_button ">
                        <label for="p-Litecoin"><img src="/static/imgold/Litecoin.png"></label>
                        <input type="radio" id="p-Litecoin" name="payment_method"
                               value="Litecoin">
                    </p>

                    <p class="pay_method_button ">
                        <label for="p-Ethereum"><img src="/static/imgold/Ethereum.png"></label>
                        <input type="radio" id="p-Ethereum" name="payment_method"
                               value="Ethereum">
                    </p>

                    <p class="pay_method_button ">
                        <label for="p-Tether"><img src="/static/imgold/tether.png"></label>
                        <input type="radio" id="p-Tether" name="payment_method"
                               value="Tether">
                    </p>

                    <p class="pay_method_button ">
                        <label for="p-Dash"><img src="/static/imgold/Dash.png"></label>
                        <input type="radio" id="p-Dash" name="payment_method"
                               value="Dash">
                    </p>

                    <p class="pay_method_button ">
                        <label for="p-western"><img src="/static/imgold/pay-western.png" width="50"></label>
                        <input type="radio" id="p-western" name="payment_method"
                               value="Western Union">
                    </p>

                    <p class="pay_method_button ">
                        <label for="p-moneygram"><img src="/static/imgold/moneygram.png" width="50"></label>
                        <input type="radio" id="p-moneygram" name="payment_method"
                               value="MoneyGram">
                    </p>

                </form>
            </div>

            <div class="coins_form" style="display:none;">
                <div class="wrap7">
                    <div class="title19">Submit payment info</div>
                </div>

                <div style="padding:20px 20px 5px 20px;border-radius:10px;background:#fff;">
                    <p style="color:#ff0000;">
                        While submitting your payment info always select the order number you are paying for! If you do not indicate it, your order will not be confirmed,
                        but just your balance refilled. Select balance refill only if you decided to refill your balance and do not have an order yet (to spare time later, e.g.)!
                    </p>
                    <form class="form-delivery submit_payment_info_form" action="/user/transfer" method="POST">
                        <input type="hidden" name="_token" value="2TzQgAdUTAnSPKK1fd5rT9oBHhhLh4InMoukKhN3">                            <input type="hidden" class="payment_method_input" name="payment_method" value="">
                        <div class="form-wrap">
                            <div class="box12-item5">
                                <span class="mobile-only">Order</span>
                                <select class="country_select" name="order_id">
                                    <option value="-1"></option>
                                                                                <option value="250493">#E6WBCWAB, 256.75$</option>
                                                                            <option value="0">Balance refill</option>
                                </select>
                            </div>
                            <div class="box12-item4">
                            <span class="mobile-only">Please specify EXACT amount in coins you sent! Don`t round it. We need exact value to be able to recognize your transfer.<br>
                            Amount in coins *</span>
                                <input type="text" id="form-input-line" value=""                                     class="form-input-line2" name="coin_amount" placeholder="Amount in coins *" autocomplete="off">
                            </div>
                            <div class="box12-item4">
                                <span class="mobile-only">Amount *</span>
                                <input type="text" id="form-input-line" value=""                                     class="form-input-line2" name="amount" placeholder="Amount in coins *" autocomplete="off">
                            </div>
                            <div class="box12-item5" style="margin-left:0;">
                                <span class="mobile-only">Currency *</span>
                                <select class="country_select" name="currency_id">
                                    <option value="1">USD</option>
                                    <option value="2">EUR</option>
                                    <option value="3">GBP</option>
                                </select>
                            </div>
                        </div>

                        <div style="height:40px;"></div>
                        <input type="submit" class="button6" value="Submit payment info">
                    </form>
                </div>
            </div>

            <div class="fiat_form" style="display:none;">
                <div class="wrap7">
                    <div class="title19">Submit payment info</div>
                </div>

                <div style="padding:20px 20px 5px 20px;border-radius:10px;background:#fff;">
                    <p style="color:#ff0000;">
                        While submitting your payment info always select the order number you are paying for! If you do not indicate it, your order will not be confirmed,
                        but just your balance refilled. Select balance refill only if you decided to refill your balance and do not have an order yet (to spare time later, e.g.)!
                    </p>
                    <form class="form-delivery submit_payment_info_form" action="/user/transfer" method="POST">
                        <input type="hidden" name="_token" value="2TzQgAdUTAnSPKK1fd5rT9oBHhhLh4InMoukKhN3">                            <input type="hidden" class="payment_method_input" name="payment_method" value="">
                        <div class="form-wrap">
                            <div class="box12-item5">
                                <span class="mobile-only">Order</span>
                                <select class="country_select" name="order_id">
                                    <option value="-1"></option>
                                                                                <option value="250493">#E6WBCWAB, 256.75$</option>
                                                                                                                </select>
                            </div>
                            <div class="box12-item4">
                                <span class="mobile-only">Sender *</span>
                                <input type="text" id="form-input-line" value=""                                     class="form-input-line2" name="full_name" placeholder="Amount in coins *" autocomplete="off">
                            </div>
                            <div class="box12-item4">
                                <span class="mobile-only">Sender`s country *</span>
                                <input type="text" id="form-input-line" value=""                                     class="form-input-line2" name="country" placeholder="Amount in coins *" autocomplete="off">
                            </div>
                            <div class="box12-item4">
                                <span class="mobile-only">MTCN *</span>
                                <input type="text" id="form-input-line" value=""                                     class="form-input-line2" name="transfer_number" placeholder="Amount in coins *" autocomplete="off">
                            </div>
                            <div class="box12-item4">
                                <span class="mobile-only">Receiver name *</span>
                                <input type="text" id="form-input-line" value=""                                     class="form-input-line2" name="receiver_name" placeholder="Amount in coins *" autocomplete="off">
                            </div>
                            <div class="box12-item4">
                                <span class="mobile-only">Amount *</span>
                                <input type="text" id="form-input-line" value=""                                     class="form-input-line2" name="amount" placeholder="Amount in coins *" autocomplete="off">
                            </div>
                            <div class="box12-item5" style="margin-left:0;">
                                <span class="mobile-only">Currency *</span>
                                <select class="country_select" name="currency_id">
                                    <option value="1">USD</option>
                                    <option value="2">EUR</option>
                                    <option value="3">GBP</option>
                                </select>
                            </div>
                        </div>

                        <div style="height:40px;"></div>
                        <input type="submit" class="button6" value="Submit payment info">
                    </form>
                </div>
            </div>

        </div>


    </div>
</div>
@endsection