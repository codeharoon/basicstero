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
    @media (max-width: 400px) {
        .box16-in-item2 {
            margin-left: 10px;
        }
    }
</style>
@endsection

@section('content')
<div class="box1 border1">
    <div class="title6">Dashboard</div>
    
</div>


<div class="box16 border1">
    <div class="box16-in">
        <div class="box16-in-item1">

            <div class="ref-address">
                <div class="ref-address-title">Your personal link to invite referals</div>
                <div class="ref-link">https://basicstero.ws/login?ref=228941</div>
            </div>

            <div class="box14-in-item">
                <div class="nfo2-title title14">Who are referals?</div>
                <div class="nfo2-text">
                    <div class="text3">
                        <p>
                            Referal is a new customer / participant of our affiliate program who signed up in our store by using your personal reference link! In other words this is a new
                            customer, whom you invited into our store.
                        </p>
                    </div>
                </div>
            </div>

            <div class="box14-in-item">
                <div class="nfo2-title title14">How does it work?</div>
                <div class="nfo2-text">
                    <div class="text3">
                        <p> To participate in our affiliate program you need only to invite new customers by using your personal reference link:<br>
                            <a>https://basicstero.ws/login?ref=228941</a>
                        </p>

                        <p>
                            Send this link to your friends/colleagues, etc. After a new customer signed up he will be your referral!
                        </p>
                        <p>
                            For each order made by each of your referals you get a reward equal to 5% of the order total of your referal.
                            Your reward will be transferred to your account only after your referal`s order is paid and shipped!
                        </p>
                        <p>
                            There is no limits here! You can invite as many referals as you want/can.<br>
                            Here is an example: you invited 3 persons. <br>
                            Person 1 placed an order worth 300$. Your reward would be 300 * 5% = 15$<br>
                            Person 2 placed an order worth 150$. Your reward would be 7.5$<br>
                            Person 3 placed an order worth 800$. Your reward would be 40$.<br>
                            Your total profit for all 3 referals would be 15+7.5+40=62.5$<br>
                            Not bad! What do you think? <br>
                            If these referals place same orders after say 2 weeks, you get again 62.5$ on your account!<br>
                            You have not to pay for gear at all! It is only up to you!<br>

                        </p>
                    </div>
                </div>
            </div>

        </div>
        <div class="box16-in-item2">
            <div class="title7 padding-left">My referals</div>
            <table cellspacing="0" class="margin5">
                <tr class="tr2">
                    <td class="td">Date</td>
                    <td class="td">Name</td>
                    <td class="td">Total profit</td>
                </tr>
                                        <tr class="tr2">
                        <td colspan="3" class="td">You have no referals yet.</td>
                    </tr>
                
                
            </table>
        </div>
    </div>
</div>

@endsection