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
  
@endsection
@section('content')
<div class="section1 border1">
    <div class="wrap5">
                        <div class="title6">CURRENT DISCOUNTS</div>
            <div class="box13">
                                        <div class="box13-in">
                        <div class="box13-in-item1">
                            <div class="data3">06.11.2019</div>
                        </div>
                        <div class="box13-in-item2">
                            <div class="text2">
                                <h2 style="font-family:'SourceSansPro-Bold';">BLACK FRIDAY - GET $700 FOR FREE!</h2>
                                <p>Black&nbsp; Friday is <b>already running</b>! Don`t miss the chance to get $700 worth of products for free!</p><p><b>From 28th of November to 5th of December 2019 only!</b><br><br>PROMO CONDITIONS<br><br>1) Only for orders paid with cryptocurrency.<br>2) Only for international warehouses<br>3) Free bonuses are offered automatically only for orders paid by cryptocurrency.<br><br>If you order from<b> warehouse 1</b>, you will get the following free bonuses:<br><b>$50 USD bonus for orders over $ 200</b><br><b>$100 USD bonus for orders over $300</b><br><br>If your order is shipped from <b>warehouse 2</b>, you get the following free bonus:<br><b>$50 USD bonus for orders over $100</b><br><b>$100 bonus for orders over $200</b><br><b>$200 bonus for orders over $300</b><br><b>$400 bonus for orders over $500</b><br><b>$700 bonus for orders over $700</b><br><br>Bonuses
are picked during the ordering process and shipped together with the 
main order. No promo code is needed. In case of seizures only paid items
are reshipped. Pharmatropin is not participating in this promotion.<br><br>Our price list for international warehouses is here:<br><a href="https://int.basicstero.ws/products/show" target="" rel="">https://int.basicstero.ws/products/show</a><br><br>Promo is running&nbsp; for orders paid by bitcoin or other cryptocurrency only!<br>Don`t know how and where to buy bitcoin? Check our tutorial: <a href="https://int.basicstero.ws/index/bitcoin" target="" rel="">https://int.basicstero.ws/index/bitcoin</a><br><br>Reminder:
By default all orders are shipped from warehouse 1 from within Europe. 
This warehouse provides best delivery success with fastest shipping 
time.<br><br>If at least one single item in your order is out of stock 
from warehouse 1, your entire order automatically will be shipped from 
warehouse 2. You can not chose,what warehouse to order from. W1 is used 
always by default, unless some item you ordered is not in stock there. 
W2 is a spare warehouse. It has longer delivery time up to 15-21 days 
and chosen automatically if your order has at least some item missing 
from warehouse 1.<br></p><p><br></p><br><br>
                            </div>
                        </div>
                    </div>
                                </div>
        
                        <div class="title6">PERMANENT DISCOUNTS</div>
            <div class="box13">
                                        <div class="box13-in">
                        <div class="box13-in-item1">
                            <div class="data3">11.03.2016</div>
                        </div>
                        <div class="box13-in-item2">
                            <div class="text2">
                                <h2 style="font-family:'SourceSansPro-Bold';">5% bitcoin discount</h2>
                                <p>If you pay with bitcoins you get an extra 5% discount
to your order! It will be calculated by our store automatically AFTER you check out. No promo codes are required!</p>

<br>
                            </div>
                        </div>
                    </div>
                                        <div class="box13-in">
                        <div class="box13-in-item1">
                            <div class="data3">11.03.2016</div>
                        </div>
                        <div class="box13-in-item2">
                            <div class="text2">
                                <h2 style="font-family:'SourceSansPro-Bold';">Big orders discounts</h2>
                                If you place an order over 500 EUR (before shipping) you get&nbsp; 5%
discount!<br>If your order is over 1000 EUR (before shipping) you get 10%&nbsp;off!<br><br>Discounts will be calculated by our store automatically AFTER you checkout. No promo codes are required!

<br>
                            </div>
                        </div>
                    </div>
                                        <div class="box13-in">
                        <div class="box13-in-item1">
                            <div class="data3">11.03.2016</div>
                        </div>
                        <div class="box13-in-item2">
                            <div class="text2">
                                <h2 style="font-family:'SourceSansPro-Bold';">Loyalty program for repeat customers</h2>
                                All customers get the following LIFETIME discounts for
all products in our store:<br><p><span>
5% after 3 orders placed<br>
10% after 6 orders paced<br>
15% after 10 orders placed<br>
<br>
IMPORTANT: our international, USA domestic and EU domestic sections are in fact
3 different sites with 3 different independent databases. To get this discount
you need to place all orders in one and the same section! Example:<br>
if you placed 4 orders in our international section and 2 orders in our USA
domestic section you get only 5% discount in our international section! If you
place one more order in our USA domestic warehouse you will also get 5%
discount there.</span></p>

<br><br><br><br><br>
                            </div>
                        </div>
                    </div>
                                        <div class="box13-in">
                        <div class="box13-in-item1">
                            <div class="data3">11.03.2016</div>
                        </div>
                        <div class="box13-in-item2">
                            <div class="text2">
                                <h2 style="font-family:'SourceSansPro-Bold';">Referals program</h2>
                                You can invite new customers by using your personal reference link (find it
in your account - Dashboard - References).

<p>For each order made by each of your referals you get a reward equal to 5% of
the order total of your referal. Your reward will be transferred to your
account only after your referal`s order is paid and shipped! </p>

<p><span>There is no limits here! You can invite as many
referals as you want/can.<br>
Here is an example: you invited 3 persons. <br>
Person 1 placed an order worth 300$. Your reward would be 300 * 5% = 15$<br>
Person 2 placed an order worth 150$. Your reward would be 7.5$<br>
Person 3 placed an order worth 800$. Your reward would be 40$.<br>
Your total profit for all 3 referals would be 15+7.5+40=62.5$<br>
Not bad! What do you think? <br>
If these referals place same orders after say 2 weeks, you get again 62.5$ on
your account!</span></p><p>
Make our store work for you!!!</p>

<br><br><br><br>
                            </div>
                        </div>
                    </div>
                                        <div class="box13-in">
                        <div class="box13-in-item1">
                            <div class="data3">11.03.2016</div>
                        </div>
                        <div class="box13-in-item2">
                            <div class="text2">
                                <h2 style="font-family:'SourceSansPro-Bold';">Special discounts</h2>
                                We provide up to 15% discounts for competing athletes
and for militaries! To get a discount evidences are required. Please contact us
to get more details!

<br><br><br><br>
                            </div>
                        </div>
                    </div>
                                </div>
                </div>
</div>
@endsection