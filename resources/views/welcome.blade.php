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
    #mobilefixer {
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .button4 {
        width: auto;
        height: auto;
        padding: 10px 35px;
        text-transform: uppercase;
    }

    @media (max-width: 700px) {
        #mobilefixer {
            width: 88% !important;
            top: 40px;
            left: 50%;
            transform: translate(-50%, 0%);
        }
    }
</style>

@endsection

@section('content')
<div class="box1 border1">
    <div class="box-item1">
        <h4>Buy steroids online</h4>
    </div>
    <div class="box-item2">
        <div class="text2">
            <p></p>
        </div>

    </div>
</div>



<div class="box2 border1">
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


<div style="text-align:center;margin:-10px 0 30px 0;">
    <a class="button4" href="#">Show all products</a>
</div>

<div class="section-1">
    <div class="section-1-in border1">
        <div class="title4 center"></div>
        <div class="text2 center margin1">
            <p>Anabolic steroids for Sale - International Basicstero</p>
        </div>

        <div class="box3">
            <div class="box3-in">
                                        <div class="box3-in-item">
                        <div class="data">14.07.2021</div>
                        <div class="text3">
                            <p>Warehouse 1 was partly restocked!</p>
                        </div>
                    </div>
                                        <div class="box3-in-item">
                        <div class="data">05.07.2021</div>
                        <div class="text3">
                            <p>Dear customers,
first of all we would liek to inform you that we changed our site design, but we are still the only direct Pharmacom Labs store! We are Pharmacom Labs!
New site has one common accoun...</p>
                        </div>
                    </div>
                                        <div class="box3-in-item">
                        <div class="data">11.06.2021</div>
                        <div class="text3">
                            <p>Dear customers
we updated our site. The new design should be more user-friendly. We merged all 3 warehouses under one single account. If you had accounts with different passwords (US domestic and int...</p>
                        </div>
                    </div>
                                </div>
        </div>
    </div>
</div>
<div class="box4">
    <div class="box4-in">
        <div class="box4-in-item">
            <div class="title5">Advantages and disadvantages of steroids</div>
            <div class="text1 margin1">
                <p>1) Anabolic - a pharmacological replacement for the male hormone testosterone, which is allocated by the adrenal glands and testicles of men.</p>

                <p>2) Steroids enhance anabolic reaction, accelerate the metabolism and growth of cells, muscle growth.</p>

                <p>3) Steroids provide a high-quality raise in muscle mass, promote rapid recovery after exercise, helping to do defeat dystrophy, accelerate metabolism and heal serious sports
                    injuries.</p>

                <p>4) Another advantage - increasing amounts of testosterone, which is responsible for the courageous appearance, sexual desire and a good erection.</p>

                <p>5) Steroids help to overcome the genetic and physiological limits, inherent nature, as well as to force progress in training. They come to the rescue when seemingly all
                    the possible methods are tried and tested. In addition, it is the only way for professional athletes to increase physical performances - strength, endurance, reaction, agility,
                    resilience.</p>

                <p>6) Pros of steroids made them so popular in the world and essential in sports activities, linked to muscle mass. Cons of anabolic drugs - the need from time to time to maintain
                    the muscular form,
                    the presence of side effects, water retention in the body. The use androgens should be under the supervision of a trained specialist who will help to organize the right cycle,
                    and effective "entrance" and
                    "exit" from it. After using anabolics it is usually necessary to perform post-cycle therapy to help body to restore the hormonal balance, cleanse the body and restore natural
                    testosterone production.
                    In addition, it is important to understand that anabolics require specialist-made cycle. Other cons - the ability to aggravate some diseases, as well as the rollback
                    phenomenon.</p>

            </div>
        </div>

        <div class="box4-in-item">
            <div class="title5">Advantages of buying steroids in Anabolic online-Shop</div>
            <div class="text1 margin1">
                <p>Professional work and experience. Basicstero.net knows how to combine sport and pharmacology. We know everything about anabolic steroids and are always up to date with all the
                    news
                    concerning developments. Looking for a resource with the information about steroids? You've come to the right place. We are also ready to help, if you need to find some drug in
                    the wilds of the pharmacological world. Pros - it's about us.</p>

                <p>Rich assortment. Here you will find a number of similar products of different kinds. We have all known drugs necessary for the muscle massgaining, as well as cutting gear.
                    Always available products of the
                    Pharmacomlabs. Need a post-cycle therapy? Here you will find anti-estrogens and gonadotropin to normalize the natural testosterone synthesis. There are also injectable
                    steroids, peptides, fat burners (Tamoxifen or Clen),
                    sports nutrition, aromatase inhibitors, which protect against gynecomastia. Here you can get an effective anabolic cycle and even pick up the dosage.</p>

                <p>Confidentiality. We provide an individual approach and do not give out information about our customers. We also differ from similar stores affordable prices,
                    the possibility to buy a drug on the action and comfortable conditions of delivery. We only need to write - and steroids will be at your home shortly.</p>

            </div>
        </div>


    </div>
</div>
@endsection
        
 

