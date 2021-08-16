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
    <style>
    .personal_area {
        text-shadow: 2px 2px 2px #059dea;
        font-size: 18px !important;
    }
</style>
@endsection

@section('content')
<div class="section1 border1">
    <div class="wrap5">
        <div class="title6">Reviews</div>
        <div class="box13">
            <div class="box13-in">
                <div class="box13-in-item2">
                    <div class="text2">
                        <p>Hello dear customer!</p><p>If you are looking for a trusted high 
quality steroids supplier you`ve come to the right place! Basicstero.com
is pretty young as a retail store, however we are a very experienced 
player on the market, because we are direct retailer! We are Pharmacom 
Labs! Not resellers, we are manufacturers and Basicstero.net is our 
store! Pharmacom Labs is a manufacturer with an impaccable reputation 
and almost ten years in the business.</p><p>We implement the newest 
techologies in our production practice! In fact we are the only big 
manufacturer, which regularly provides test results of our raws and 
final products!</p><p>Please visit this section to watch our production 
video see for yourself that we comply with the highest manufacturing 
standards:&nbsp;<a href="http://pharmacomlabs.com/innovations" target="" rel="nofollow">http://pharmacomlabs.com/innovations</a></p>If
you still doubt whether to place an order in our store please visit and
find reviews, blood works and discussions of our products and our store
at the following boards:<br><br>1.&nbsp;<a href="http://www.anabolicsteroidforums.com/forumdisplay.php/158-Basicstero-com" target="" rel="nofollow">http://www.anabolicsteroidforums.com/forumdisplay.php/158-Basicstero-com</a><br>2. <a href="http://www.ironmagazineforums.com/forums/339-Basicstero" target="" rel="nofollow">www.ironmagazineforums.com/forums/339-Basicstero</a><br>3.&nbsp;<a href="https://thinksteroids.com/community/threads/pharmacom-labs-officials-and-our-basicstero-com-store.134363986/" target="" rel="nofollow">https://thinksteroids.com/community/threads/pharmacom-labs-officials-and-our-basicstero-com-store.134363986/</a><br>4. <a href="https://www.eroids.com/discussions/source/basicstero.ws" target="_blank" rel="nofollow">https://www.eroids.com/discussions/source/basicstero.ws</a> <br>5.&nbsp;<a href="http://steroid-forums.com/forumdisplay.php?380-BASICSTERO.COM" target="" rel="nofollow">http://steroid-forums.com/forumdisplay.php?380-BASICSTERO.COM</a><br>6.&nbsp;<a href="http://www.muscleandscience.com/forums/64-Basicstero-com-Direct-Pharmacom-Labs-Store" target="_blank" rel="nofollow">http://www.muscleandscience.com/forums/64-Basicstero-com-Direct-Pharmacom-Labs-Store</a><br>7. <a href="https://hardcore-underground.com/forumdisplay.php/70-www-basicstero-net?s=39f117296233c6a8410b728202b5343e" target="" rel="">https://hardcore-underground.com/forumdisplay.php/70-www-basicstero-net?s=39f117296233c6a8410b728202b5343e</a><br><br><br><br><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection