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

    .inner-table {
        border-collapse: collapse;
    }

    .inner-table tr:hover td {
        background: #323232;
    }

    .box14.border1 table {
        min-width: 100%;
    }

    .td:nth-child(4) {
        padding-right: 15px;
        display: table-cell !important;
    }

    .tr:hover {
        background: rgba(255, 255, 255, 0.15);
        transition: all 0.3s ease;
    }

    .tr:first-child:hover {
        background: rgba(255, 255, 255, 0.15);
        transition: all 0.3s ease;
    }

    .minus2 {
        background: url({{asset('img/cart-minus3.png')}}) no-repeat center center;
    }

    .plus2 {
        background: url({{asset('img/cart-plus3.png')}}) no-repeat center center;
    }

    .sum2 input {
        color: #fff;
    }

    .td:nth-child(4),
    .td:nth-child(5),
    .td-title:nth-child(4),
    .td-title:nth-child(5) {
        width: 15% !important;
    }

    .td:nth-child(1),
    .td:nth-child(2),
    .td:nth-child(3),
    .td-title:nth-child(1),
    .td-title:nth-child(2),
    .td-title:nth-child(3) {
        width: 25% !important;
    }

    .td:nth-child(7),
    .td-title:nth-child(7) {
        width: 20px !important;
        padding-right: 20px !important;
    }

    .td-title:nth-child(6),
    .td:nth-child(6) {
        width: 70px !important;
        padding-right: 0px;
    }

    .mobile-only-price {
        display: none;
    }

    .mobile-only {
        display: none;
    }

    .data_trigger {
        color: #b8bfc6;
    }

    @media (max-width: 1100px) {
        .td-title:nth-child(7),
        .td:nth-child(7) {
            display: table-cell !important;
        }

        .td:nth-child(5),
        .td:nth-child(2),
        .td:nth-child(3),
        .td-title:nth-child(5),
        .td-title:nth-child(2),
        .td-title:nth-child(3) {
            display: none;
        }

        .td:nth-child(1),
        .td-title:nth-child(1) {
            width: 70% !important;
        }

        .td:nth-child(4),
        .td-title:nth-child(4) {
            width: 20% !important;
            text-align: center;
        }

        .mobile-only-price {
            /*display: block;*/
            font-size: 10px;
        }

        .mobile-only {
            display: block;
        }

        tr.tr.active td {
            border-bottom: none;
        }

        tr.tr.active + tr.mobile-only {
            display: table-row;
        }

        .data_trigger {
        / / color: #089dea;
        }

        a.quantity_max {
            color: #7bc19f;
        }

        a.quantity_avg {
            color: #c1a47b;
        }

        a.quantity_low {
            color: #f51632;
        }

        .headtext {
            padding: 0 20px 0px 30px !important;
        }
    }

    .borderer td {
        border-top: 1px solid #9a9a9a;
        border-bottom: 1px solid #9a9a9a;
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
</style>
<style>
    .personal_area {
        text-shadow: 2px 2px 2px #059dea;
        font-size: 18px !important;
    }
    .currency_select {
    font-size: 14px !important;
    height: 24px !important;
    padding: 0px 15px 0 10px !important;
}
</style>
@endsection

@section('content')
  
    <div class="box1 border1">
        <div class="title6">FULL PRODUCT RANGE</div>
        <div class="wrap2">
            <!--box-item3-active-->
                            <div class="box-item3" data-id="4">Boldenones</div>
                            <div class="box-item3" data-id="23">Fat Loss</div>
                            <div class="box-item3" data-id="26">GW1516</div>
                            <div class="box-item3" data-id="25">HGH</div>
                            <div class="box-item3" data-id="8">Masterones</div>
                            <div class="box-item3" data-id="10">Methandienone inj.</div>
                            <div class="box-item3" data-id="9">Mixes Special Line</div>
                            <div class="box-item3" data-id="3">Nandrolones</div>
                            <div class="box-item3" data-id="19">Oral Steroids</div>
                            <div class="box-item3" data-id="24">Oxymetholone</div>
                            <div class="box-item3" data-id="22">Post Cycle Therapy</div>
                            <div class="box-item3" data-id="7">Primobolanes</div>
                            <div class="box-item3" data-id="6">Stanozolol</div>
                            <div class="box-item3" data-id="1">Testosterones</div>
                            <div class="box-item3" data-id="5">Trenbolones</div>
                    </div>
    </div>

    <div class="headtext">
        <p><strong style="color:#089dea;">We have 3 warehouses on your choice:</strong></p>

        <p><strong style="color:#089dea;">W1</strong> - EU-domestic warehouse. Fast and safe shipping within EU. Close to zero seizure risk.
            Free reshipping in case of seizures,losses, damaged items, etc. Shipping takes 6-12 days depending on destination country.
            This warehouse does not currently ship to any other countries outside EU.</p>
        <p><strong style="color:#089dea;">W2</strong> - International warehouse with transit middle point in Europe. Orders are packed outside of Europe, shipped to a middle point in Europe first and
            rerouted to final destination
            afterwards.
            European tracking number. Shipping takes up to 15-21 days in average depending on destination country.Free reshipping in case of seizures,losses, damaged items, etc.</p>
        <p><strong style="color:#089dea;">W3</strong> - US domestic warehouse. Shipping from within the USA for any customers from the USA. Zero risks, no customs, fastest processing. Free reshipping
            in case of losses, damaged items,
            etc.</p>
    </div>

    <div class="box14 border1">
        <table cellspacing="0">
            <thead>
            <tr class="tr">
                <td class="td-title">Title</td>
                <td class="td-title">Active substance</td>
                <td class="td-title">Dosage</td>
                <td class="td-title">Price</td>
                <td class="td-title"></td>
                <td class="td-title" width="1"></td>
                <td class="td-title" width="1"></td>
            </tr>
            </thead>
            <tbody id="pricelist_content">
            @foreach ($products as $item)
            <tr class="tr">
                <td class="td">
                    <a class="data_trigger quantity_max" href="javascript:void(0);">PHARMATEST E 300</a>
                    <div class="mobile-only" style="color:#fff;font-size:12px;">
                        <br>
                        <p>Active substance: Testosterone Enanthate</p>
                        <p>Dosage: {{$item->Dosage}}</p>
                    </div>
                </td>
                <td class="td">
                    Testosterone Enanthate
                </td>
                <td class="td">
                    {{$item->Dosage}}
                </td>
                <td class="td" colspan="4">
                    <table class="inner-table">
                        @foreach ($item->stock as $whouse)
                        <tr>
                            <td width="60" class="">${{$whouse->price}}</td>
        
                            <td class="">
                                <span class="@if( $whouse->stock == 0 )
                                    {{"quantity_none"}}
                              @elseif( $whouse->stock > 0 and $whouse->stock < 20 )
                                    {{"quantity_avg"}}
                              @else
                                    {{"quantity_max"}}
                              @endif">W1 - @if( $whouse->stock == 0 )
                                    {{"OUT OF STOCK"}}
                              @elseif( $whouse->stock > 0 and $whouse->stock < 20 )
                                    {{"RUNNING LOW"}}
                              @else
                                    {{"IN STOCK"}}
                              @endif</span>
                            </td>
                            <td width="1" class="">
                                <div class="cart">
                                    <div class="minus2"></div>
                                    <div class="sum2">
                                        <input type="text" data-product_id="{{$item->id}}" data-warehouse="{{$loop->iteration}}" class="product_quantity" disabled=""
                                                value="0"  >
                                    </div>
                                    <div class="plus2"></div>
                                </div>
                            </td>
                            <td width="1" class="">
                                <div class="td-img cart-trigger" data-product_id="{{$item->id}}" data-warehouse="{{$loop->iteration}}"></div>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </td>
            </tr>  
            @endforeach



            </tbody>

        </table>
    </div>

    <div class="show-more-wrap">
        <a href="{{route('cart')}}">
            <div class="show-more" style="background:#089dea;padding:10px 20px;border-radius:5px;">GO TO SHOPPING CART</div>
        </a>
    </div>

        
@endsection 