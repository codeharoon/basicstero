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
    .box14.border1 table {
        min-width: 100%;
    }

    .box-item4-active {
        padding: 2px 5px 2px 5px;
        background-color: #089dea;
        border-bottom: 1px dotted transparent;
    }

    .box-item4:hover {
        padding: 2px 5px 2px 5px;
        background-color: #089dea;
        border-bottom: 1px dotted transparent;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .category_description {
        padding: 0 60px 20px 60px;
        color: #b8bfc6;
        font-family: 'SourceSansPro-Light', sans-serif;
        font-size: 14px;
    }

    .category_description p {
        color: #b8bfc6;
        font-family: 'SourceSansPro-Light', sans-serif;
        font-size: 16px;
        font-weight: 300;
        line-height: 20px;
    }

    .category_description h1,
    .category_description h2,
    .category_description h3,
    .category_description h4,
    .category_description h5,
    .category_description h6 {
        color: #b8bfc6;
        font-family: 'SourceSansPro-Bold', sans-serif;
        font-size: 20px;
        margin-top: 20px;
        margin-bottom: 20px;
        line-height: 22px;
    }

    .headtext {
        padding: 0 60px 0px 65px;
        color: #fff;
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

    @media (max-width: 1100px) {
        .headtext {
            padding: 0 20px 0px 20px !important;
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
    <div class="title6">HGH AND PEPTIDES</div>
    <div class="wrap2">
                        <a href="#">
                <div class="box-item4"
                     data-id="25" data-url="hgh">HGH</div>
            </a>
                            </div>
</div>

<div class="headtext">
    <p><strong>We have 3 warehouses on your choice:</strong></p>

    @foreach ($warehouse as $item)
    <p>{!!$item->discription!!}</p>
    @endforeach
</div>

<div class="box2 border1" id="main_catalog">
    <div class="box2-in">
        @foreach ($products as $item)
        <div class="box2-in-item">
            <a href="{{route('singleproduct',$item->id)}}">
                <div class="box2-img">
                    <img src="{{asset('/assets/backend/product/image/'.$item->image)}}" alt="">
                </div>
            </a>
            <div class="wrap1">
                <a href="{{route('singleproduct',$item->id)}}">
                    <div class="title1">{{$item->title}}</div>
                </a>
                <div class="title2">
                    {{$item->classification->name}}
                </div>
            
                <div class="cart-item1 aligner">
                    <div class="cart">
                        <div class="minus2"></div>
                        <div class="sum2">
                            <input type="text" data-product_id="191" class="product_quantity" disabled="" value="1">
                        </div>
                        <div class="plus2"></div>
                    </div>
                </div>
          
                @foreach ($item->stock as $whouse)
                <div class="price cart-button @if( $whouse->stock == 0 )
                      {{"quantity_none"}}
                @elseif( $whouse->stock > 0 and $whouse->stock < 20 )
                      {{"quantity_avg"}}
                @else
                      {{"quantity_max"}}
                @endif" data-product_id="191" data-warehouse="1">
                    <span class="wh_label">W1 - @if( $whouse->stock == 0 )
                        {{"OUT OF STOCK"}}
                  @elseif( $whouse->stock > 0 and $whouse->stock < 20 )
                        {{"RUNNING LOW"}}
                  @else
                        {{"IN STOCK"}}
                  @endif</span> <span class="price_label">${{$whouse->price }}</span>
                </div>
                @endforeach
             
            </div>
            </div>
        @endforeach
</div>
</div>

<div class="show-more-wrap" id="main_pagination">
        </div>

@endsection