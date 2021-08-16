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
    <link href="https://code.jquery.com/ui/1.11.4/themes/black-tie/jquery-ui.css" rel="stylesheet" type="text/css"/>

<style>
    .styled-input {
        margin-right: 20px;
        height: 34px;
        padding: 0 15px;
        line-height: 34px;
        border-radius: 5px;
        border: 0;
    }

    .styled-select {
        margin-right: 20px;
        height: 34px;
        padding: 0 15px;
        border-radius: 5px;
        border: 0;
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

    .spacer {
        height: 30px;
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
@endsection

@section('content')
<div class="box1 border1">
    <div class="title6">Dashboard</div>
    
</div>

    <div class="box17 border1">
    <div class="box17-in">

        <div class="wrap7">
            <div class="title19">My orders</div>
        </div>

        <div class="wrap11 desktop_only">
            <div class="box18-in">
                <div class="box18-in-item">
                    <form method="get" action="/user/orders">
                        <input type="text" name="date_from" class="datepicker styled-input" placeholder="Start date" value="">
                        <input type="text" name="date_to" class="datepicker styled-input" placeholder="End date" value="">
                        <select name="status" class="styled-select">
                            <option value="0">All statuses</option>
                                                                <option  value="1">ORDER PROCESSING</option>
                                                                <option  value="2">WAITING FOR PAYMENT</option>
                                                                <option  value="3">ORDER SHIPPED</option>
                                                                <option  value="11">ORDER LOST</option>
                                                                <option  value="12">ORDER RESHIPPED</option>
                                                        </select>
                        <input type="submit" class="button6" style="margin-right:20px;" value="Apply">
                        <input type="button" class="button6" value="Clear" onclick="window.location='/user/orders';">
                    </form>

                    <form method="POST" action="https://basicstero.ws/user/mass_delete_order">
                        <input type="hidden" name="_token" value="2TzQgAdUTAnSPKK1fd5rT9oBHhhLh4InMoukKhN3">

                        <table class="transfer_data">
                            <thead>
                            <th><input type="checkbox" class="order_box_main"></th>
                            <th>Created</th>
                            <th>Order #</th>
                            <th>Status</th>
                            <th>Actions</th>
                            </thead>
                            <tbody>
                                                                <tr>
                                    <td width="1"><input class="order_box" type="checkbox" value="E6WBCWAB" name="orders_list[]"></td>
                                    <td>16.08.2021</td>
                                    <td>E6WBCWAB</td>
                                                                                <td>waiting for payment</td>
                                                                            <td>
                                        <a style="color:#089dea;" href="https://basicstero.ws/user/orders/E6WBCWAB">Details</a>
                                        <br>
                                                                                        <a onclick="editOrder('E6WBCWAB')" style="color:rgba(193, 164, 123, 1);" href="javascript:void(0)">Edit</a>
                                            <br>
                                                                                    <a href="javascript:void(0);" onclick="deleteOrder('E6WBCWAB')">Delete</a>
                                    </td>
                                </tr>
                                                            </tbody>
                        </table>
                        <div style="height:20px;"></div>
                        <input type="submit" class="button6" onclick="return confirm('Are you sure?')" value="Delete selected orders">
                    </form>
                </div>
            </div>
        </div>

        <div class="wrap11 mobile_only">
            <div class="box18-in">
                <div class="box18-in-item">
                    <div class="transfer_data_mobile">
                                                        <div class="linewrap">
                                <div class="transfer_label">Created</div>
                                <div class="transfer_value">16.08.2021</div>
                                <div class="clear"></div>
                            </div>
                            <div class="linewrap">
                                <div class="transfer_label">Order #</div>
                                <div class="transfer_value">E6WBCWAB</div>
                                <div class="clear"></div>
                            </div>
                            <div class="linewrap">
                                <div class="transfer_label">Status</div>
                                                                        <div class="transfer_value">waiting for payment</div>
                                                                    <div class="clear"></div>
                            </div>
                            <div class="linewrap">
                                <div class="transfer_label">Actions</div>
                                <div class="transfer_value">
                                    <a style="color:#089dea;" href="https://basicstero.ws/user/orders/E6WBCWAB">Details</a>
                                    <br>
                                                                                <a onclick="editOrder('E6WBCWAB')" style="color:rgba(193, 164, 123, 1);" href="javascript:void(0)">Edit</a>
                                        <br>
                                                                            <a href="javascript:void(0);" onclick="deleteOrder('E6WBCWAB')">Delete</a>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div style="height:15px;"></div>
                                                </div>
                </div>
            </div>
        </div>

        <div class="spacer"></div>

    </div>
</div>

<div style="display:none;">
    <form id="delete_form" method="POST" action="">
        <input type="hidden" name="_token" value="2TzQgAdUTAnSPKK1fd5rT9oBHhhLh4InMoukKhN3">
    </form>
</div>
@endsection