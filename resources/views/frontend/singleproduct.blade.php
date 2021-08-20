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
    .cart-title {
        position: relative;
        background: none;
    }

    .cart-button.refactor {
        width: 37px;
        height: 30px;
        background: url('/static/img/cart.png') no-repeat 98% center !important;
        cursor: pointer;
        position: absolute;
        top: 0;
        right: 0;
    }

    .title8 {
        background: url('/static/img/title7.png') no-repeat 5px center;
        font-family: sans-serif !important;
    }

    .box7-in-item:nth-child(7) {
        background: url('/static/img/acne.png') no-repeat left 8px;
    }

    .box7-in-item.water_base {
        background: url('/static/img/oil.png') no-repeat 5px 3px;
    }

    .box7-in-item.tablets {
        background: url('/static/img/tablet.png') no-repeat 5px 3px;
    }

    .box7-in-item.ampoules {
        background: url('/static/img/ampoule.png') no-repeat 5px 3px;
    }

    .cart-item0 {
        font-size: 29px;
        color: #fff;
        padding: 12px 0 0 15px;
        font-family: 'SourceSansPro-Bold', sans-serif;
    }

    .margin-left-10 {
        margin-left: 10px;
    }
</style>

@endsection

@section('content')
            <div class="box5 border1">
        <div class="box5-item1">
            <div class="breads-in">
                                    <a href="https://basicstero.ws/injectableline" class="breads-in-item1">Injectable Line</a>
                                <span class="breads-in-item2">/</span>
                <a href="/injection-line/trenbolone"
                   class="breads-in-item1">{{$product->type}}</a>
                <span class="breads-in-item2">/</span>
            </div>
            <h3 style="text-transform:uppercase;">{{$product->title}}</h3>
        </div>


        @foreach ($product->stock as $item)
        <div class="box5-item2 margin-left-10">
            <div class="cart-wrap">
                <div class="cart-item0">
                    W{{$loop->iteration}}
                </div>
                <div class="cart-item1">
                    <div class="cart">
                        <div class="minus"></div>
                        <div class="sum"><input type="text" value="1"></div>
                        <div class="plus"></div>
                    </div>
                </div>
                <div class="cart-item2">
                    <div class="cart-title">
                        ${{$item->price}}
                        <div class="cart-button refactor" data-product_id="114" data-warehouse="3"></div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

     
    </div>


    <div class="box6 border1">
        <div class="box6-in line3">
            <div style="height:55px;"></div>
            @foreach ($product->stock as $item)
                
            @endforeach
            <div class="quantity-external" style="bottom:auto;top:0;">
                <div class="quantity-inner-wrapper quantity_max">
                    <div class="quantity_inner_wrap"></div>
                    <div class="quantity_inner_fill" style="width:100%;"></div>
                    <div class="quantity_title">
                        W1 - IN STOCK
                    </div>
                </div>
            </div>
            <div class="quantity-external" style="bottom:auto;top:18px;">
                <div class="quantity-inner-wrapper quantity_max">
                    <div class="quantity_inner_wrap"></div>
                    <div class="quantity_inner_fill" style="width:100%;"></div>
                    <div class="quantity_title">
                        W2 - IN STOCK
                    </div>
                </div>
            </div>
            <div class="quantity-external" style="bottom:auto;top:36px;">
                <div class="quantity-inner-wrapper quantity_max">
                    <div class="quantity_inner_wrap"></div>
                    <div class="quantity_inner_fill" style="width:100%;"></div>
                    <div class="quantity_title">
                        W3 - IN STOCK
                    </div>
                </div>
            </div>

            <div class="box6-in-item1">
                <div class="box6-in-item1-img">
                    <span><img src="{{asset('/assets/backend/product/image/'.$product->image)}}" alt=""></span>
                </div>
            </div>
            <div class="box6-in-item2">
                <div class="title8">

                    
                    <br>100 mg/ml

                </div>
                                    <div style="padding:10px 20px;background:#efefef;border-radius:5px;margin-top:10px;width:calc(100% - 60px)">
                         {!!$product->short_description!!}
                    </div>
                                <div class="box7">
                    <div class="box7-in">
                        <div class="box7-in-item">
                            <div class="box7-title1">Activity</div>
                            <div class="box7-title2">{{$product->activity}}</div>
                        </div>
                        <div class="box7-in-item">
                            <div class="box7-title1">Delay water</div>
                            <div class="box7-title2">{{$product->delay_water}}</div>
                        </div>
                        <div class="box7-in-item">
                            <div class="box7-title1">Classification</div>
                            <div class="box7-title2">{{$product->classification->name}}</div>
                        </div>
                        <div class="box7-in-item">
                            <div class="box7-title1">HBR</div>
                            <div class="box7-title2">{{$product->hbr}}</div>
                        </div>
                        <div class="box7-in-item">
                            <div class="box7-title1">Dosage</div>
                            <div class="box7-title2">{{$product->Dosage}}</div>
                        </div>
                        <div class="box7-in-item">
                            <div class="box7-title1">Hepatoxity</div>
                            <div class="box7-title2">{{$product->Hepatoxity}}</div>
                        </div>
                        <div class="box7-in-item">
                            <div class="box7-title1">Acne</div>
                            <div class="box7-title2">{{$product->acne}}</div>
                        </div>
                        <div class="box7-in-item">
                            <div class="box7-title1">Aromatization</div>
                            <div class="box7-title2">{{$product->aromatization}}</div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
            <div class="box4 border1">
            <div class="box4-in">
                <div class="box4-in-item">
                    <div class="title5">Description</div>
                    <div class="text1 margin1">
                        {!!$product->description!!}
                    </div>
                </div>
            </div>
        </div>
        <div class="title9 border1 margin2">We recomend with this product:</div>

    <div class="box2 border1">
        <div class="box2-in">
            @foreach ($recommended_product as $item)
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
                                <input type="text" data-product_id="112" class="product_quantity" disabled="" value="1">
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
                      @endif" data-product_id="112" data-warehouse="1">
                            <span class="wh_label">W1 - @if( $whouse->stock == 0 )
                                {{"OUT OF STOCK"}}
                          @elseif( $whouse->stock > 0 and $whouse->stock < 20 )
                                {{"RUNNING LOW"}}
                          @else
                                {{"IN STOCK"}}
                          @endif</span> <span class="price_label">${{$whouse->price}}</span>
                        </div>
                    @endforeach
                
                </div>
            </div>
            @endforeach

            
        </div>
    </div>

    <div class="box1 border1">
        <div class="box-item1">
            <h4>Buy steroids online</h4>
        </div>
        <div class="box-item2">
            <div class="text2">
                <p>YOU ARE YOU ARE IN THE INTERNATIONAL PREMIUM WAREHOUSE NOW
WORLDWIDE SHIPPING FROM EUROPE WITH 100% DELIVERY GUARANTEE!</p>
            </div>

        </div>
    </div>
@endsection
        
 

