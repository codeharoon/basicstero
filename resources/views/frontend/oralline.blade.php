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
    <div class="title6">ORAL LINE</div>
    <div class="wrap2">
                        <a href="/oralsteroids/oral-steroids">
                <div class="box-item4"
                     data-id="19" data-url="oral-steroids">Oral Steroids</div>
            </a>
                        <a href="/oralsteroids/pct">
                <div class="box-item4"
                     data-id="22" data-url="pct">Post Cycle Therapy</div>
            </a>
                        <a href="/oralsteroids/fat-loss">
                <div class="box-item4"
                     data-id="23" data-url="fat-loss">Fat Loss</div>
            </a>
                            </div>
</div>

<div class="headtext">
    <p><strong>We have 3 warehouses on your choice:</strong></p>

    <p>W1 - EU-based warehouse. Worldwide shipping to any country worldwide, incl. USA, Canada, Australia, etc. For EU citizens it is EU-domestic warehouse.
        Close to zero seizure risk. Free reshipping in case of seizures,losses, damaged items, etc. Shipping takes 6-12 days depending on destination country.</p>
    <p>W2 - International warehouse with transit middle point in Europe. Orders are packed outside of Europe, shipped to a middle point in Europe first and rerouted to final destination
        afterwards.
        European tracking number. Shipping takes up to 15-21 days in average depending on destination country.Free reshipping in case of seizures,losses, damaged items, etc.</p>
    <p>W3 - US domestic warehouse. Shipping from within the USA for any customers from the USA. Zero risks, no customs, fastest processing. Free reshipping in case of losses, damaged items,
        etc.</p>
</div>

<div class="box2 border1" id="main_catalog">
    <div class="box2-in">
<div class="box2-in-item">
<a href="https://basicstero.ws/oral-steroids/dianabolos-10">
    <div class="box2-img">
        <img src="/uploads/products/img_product_126_400_0_0.jpeg" alt="">
    </div>
</a>
<div class="wrap1">
    <a href="https://basicstero.ws/oral-steroids/dianabolos-10">
        <div class="title1">Dianabolos</div>
    </a>
    <div class="title2">
        Methandienone
    </div>

    <div class="cart-item1 aligner">
        <div class="cart">
            <div class="minus2"></div>
            <div class="sum2">
                <input type="text" data-product_id="126" class="product_quantity" disabled="" value="1">
            </div>
            <div class="plus2"></div>
        </div>
    </div>

    <div class="price cart-button quantity_max" data-product_id="126" data-warehouse="1">
        <span class="wh_label">W1 - IN STOCK</span> <span class="price_label">$39.00</span>
    </div>

    <div class="price cart-button quantity_max" data-product_id="126" data-warehouse="2">
        <span class="wh_label">W2 - IN STOCK</span> <span class="price_label">$39.00</span>
    </div>

    <div class="price cart-button quantity_max" data-product_id="126" data-warehouse="3">
        <span class="wh_label">W3 - IN STOCK</span> <span class="price_label">$45.00</span>
    </div>
</div>
</div>
<div class="box2-in-item">
<a href="https://basicstero.ws/oral-steroids/stanos-10">
    <div class="box2-img">
        <img src="/uploads/products/img_product_127_400_0_0.jpeg" alt="">
    </div>
</a>
<div class="wrap1">
    <a href="https://basicstero.ws/oral-steroids/stanos-10">
        <div class="title1">Stanos</div>
    </a>
    <div class="title2">
        Stanozolol
    </div>

    <div class="cart-item1 aligner">
        <div class="cart">
            <div class="minus2"></div>
            <div class="sum2">
                <input type="text" data-product_id="127" class="product_quantity" disabled="" value="1">
            </div>
            <div class="plus2"></div>
        </div>
    </div>

    <div class="price cart-button quantity_max" data-product_id="127" data-warehouse="1">
        <span class="wh_label">W1 - IN STOCK</span> <span class="price_label">$45.00</span>
    </div>

    <div class="price cart-button quantity_max" data-product_id="127" data-warehouse="2">
        <span class="wh_label">W2 - IN STOCK</span> <span class="price_label">$45.00</span>
    </div>

    <div class="price cart-button quantity_max" data-product_id="127" data-warehouse="3">
        <span class="wh_label">W3 - IN STOCK</span> <span class="price_label">$55.00</span>
    </div>
</div>
</div>
<div class="box2-in-item">
<a href="https://basicstero.ws/oral-steroids/turinabolos-10">
    <div class="box2-img">
        <img src="/uploads/products/img_product_128_400_0_0.jpeg" alt="">
    </div>
</a>
<div class="wrap1">
    <a href="https://basicstero.ws/oral-steroids/turinabolos-10">
        <div class="title1">Turinabolos</div>
    </a>
    <div class="title2">
        Chlorodehydromethyteststerone
    </div>

    <div class="cart-item1 aligner">
        <div class="cart">
            <div class="minus2"></div>
            <div class="sum2">
                <input type="text" data-product_id="128" class="product_quantity" disabled="" value="1">
            </div>
            <div class="plus2"></div>
        </div>
    </div>

    <div class="price cart-button quantity_max" data-product_id="128" data-warehouse="1">
        <span class="wh_label">W1 - IN STOCK</span> <span class="price_label">$54.00</span>
    </div>

    <div class="price cart-button quantity_max" data-product_id="128" data-warehouse="2">
        <span class="wh_label">W2 - IN STOCK</span> <span class="price_label">$54.00</span>
    </div>

    <div class="price cart-button quantity_max" data-product_id="128" data-warehouse="3">
        <span class="wh_label">W3 - IN STOCK</span> <span class="price_label">$66.00</span>
    </div>
</div>
</div>
<div class="box2-in-item">
<a href="https://basicstero.ws/oral-steroids/oxandrolonos-10">
    <div class="box2-img">
        <img src="/uploads/products/img_product_129_400_0_0.jpeg" alt="">
    </div>
</a>
<div class="wrap1">
    <a href="https://basicstero.ws/oral-steroids/oxandrolonos-10">
        <div class="title1">Oxandrolonos</div>
    </a>
    <div class="title2">
        Oxandrolone
    </div>

    <div class="cart-item1 aligner">
        <div class="cart">
            <div class="minus2"></div>
            <div class="sum2">
                <input type="text" data-product_id="129" class="product_quantity" disabled="" value="1">
            </div>
            <div class="plus2"></div>
        </div>
    </div>

    <div class="price cart-button quantity_max" data-product_id="129" data-warehouse="1">
        <span class="wh_label">W1 - IN STOCK</span> <span class="price_label">$65.00</span>
    </div>

    <div class="price cart-button quantity_max" data-product_id="129" data-warehouse="2">
        <span class="wh_label">W2 - IN STOCK</span> <span class="price_label">$65.00</span>
    </div>

    <div class="price cart-button quantity_none" data-product_id="129" data-warehouse="3">
        <span class="wh_label">W3 - OUT OF STOCK</span> <span class="price_label">$100.00</span>
    </div>
</div>
</div>
<div class="box2-in-item">
<a href="https://basicstero.ws/oral-steroids/provironos-50">
    <div class="box2-img">
        <img src="/uploads/products/img_product_133_400_0_0.jpeg" alt="">
    </div>
</a>
<div class="wrap1">
    <a href="https://basicstero.ws/oral-steroids/provironos-50">
        <div class="title1">Provironos (price for 1 blister, 50 pills)</div>
    </a>
    <div class="title2">
        Mesterolone
    </div>

    <div class="cart-item1 aligner">
        <div class="cart">
            <div class="minus2"></div>
            <div class="sum2">
                <input type="text" data-product_id="133" class="product_quantity" disabled="" value="1">
            </div>
            <div class="plus2"></div>
        </div>
    </div>

    <div class="price cart-button quantity_max" data-product_id="133" data-warehouse="1">
        <span class="wh_label">W1 - IN STOCK</span> <span class="price_label">$47.00</span>
    </div>

    <div class="price cart-button quantity_none" data-product_id="133" data-warehouse="2">
        <span class="wh_label">W2 - OUT OF STOCK</span> <span class="price_label">$47.00</span>
    </div>

    <div class="price cart-button quantity_max" data-product_id="133" data-warehouse="3">
        <span class="wh_label">W3 - IN STOCK</span> <span class="price_label">$55.00</span>
    </div>
</div>
</div>
<div class="box2-in-item">
<a href="https://basicstero.ws/oral-steroids">
    <div class="box2-img">
        <img src="/uploads/products/img_product_183_400_0_0.jpeg" alt="">
    </div>
</a>
<div class="wrap1">
    <a href="https://basicstero.ws/oral-steroids">
        <div class="title1">OXYMETOS</div>
    </a>
    <div class="title2">
        Oxymetholone
    </div>

    <div class="cart-item1 aligner">
        <div class="cart">
            <div class="minus2"></div>
            <div class="sum2">
                <input type="text" data-product_id="183" class="product_quantity" disabled="" value="1">
            </div>
            <div class="plus2"></div>
        </div>
    </div>

    <div class="price cart-button quantity_max" data-product_id="183" data-warehouse="1">
        <span class="wh_label">W1 - IN STOCK</span> <span class="price_label">$60.00</span>
    </div>

    <div class="price cart-button quantity_max" data-product_id="183" data-warehouse="2">
        <span class="wh_label">W2 - IN STOCK</span> <span class="price_label">$60.00</span>
    </div>

    <div class="price cart-button quantity_max" data-product_id="183" data-warehouse="3">
        <span class="wh_label">W3 - IN STOCK</span> <span class="price_label">$100.00</span>
    </div>
</div>
</div>
<div class="box2-in-item">
<a href="https://basicstero.ws/oral-steroids/halotestos-10">
    <div class="box2-img">
        <img src="/uploads/products/img_product_134_400_0_0.jpeg" alt="">
    </div>
</a>
<div class="wrap1">
    <a href="https://basicstero.ws/oral-steroids/halotestos-10">
        <div class="title1">Halotestos (price for 1 blister, 50 pills)</div>
    </a>
    <div class="title2">
        Fluoxymesterone
    </div>

    <div class="cart-item1 aligner">
        <div class="cart">
            <div class="minus2"></div>
            <div class="sum2">
                <input type="text" data-product_id="134" class="product_quantity" disabled="" value="1">
            </div>
            <div class="plus2"></div>
        </div>
    </div>

    <div class="price cart-button quantity_max" data-product_id="134" data-warehouse="1">
        <span class="wh_label">W1 - IN STOCK</span> <span class="price_label">$99.00</span>
    </div>

    <div class="price cart-button quantity_max" data-product_id="134" data-warehouse="2">
        <span class="wh_label">W2 - IN STOCK</span> <span class="price_label">$99.00</span>
    </div>

    <div class="price cart-button quantity_avg" data-product_id="134" data-warehouse="3">
        <span class="wh_label">W3 - RUNNING LOW</span> <span class="price_label">$120.00</span>
    </div>
</div>
</div>
<div class="box2-in-item">
<a href="https://basicstero.ws/pct/anastrazolos-1">
    <div class="box2-img">
        <img src="/uploads/products/img_product_130_400_0_0.jpeg" alt="">
    </div>
</a>
<div class="wrap1">
    <a href="https://basicstero.ws/pct/anastrazolos-1">
        <div class="title1">Anastrazolos (price for 1 blister, 50 pills)</div>
    </a>
    <div class="title2">
        Anastrozole
    </div>

    <div class="cart-item1 aligner">
        <div class="cart">
            <div class="minus2"></div>
            <div class="sum2">
                <input type="text" data-product_id="130" class="product_quantity" disabled="" value="1">
            </div>
            <div class="plus2"></div>
        </div>
    </div>

    <div class="price cart-button quantity_avg" data-product_id="130" data-warehouse="1">
        <span class="wh_label">W1 - RUNNING LOW</span> <span class="price_label">$35.00</span>
    </div>

    <div class="price cart-button quantity_avg" data-product_id="130" data-warehouse="2">
        <span class="wh_label">W2 - RUNNING LOW</span> <span class="price_label">$35.00</span>
    </div>

    <div class="price cart-button quantity_max" data-product_id="130" data-warehouse="3">
        <span class="wh_label">W3 - IN STOCK</span> <span class="price_label">$90.00</span>
    </div>
</div>
</div>
<div class="box2-in-item">
<a href="https://basicstero.ws/fat-loss/sibutros-15">
    <div class="box2-img">
        <img src="/uploads/products/img_product_131_400_0_0.jpeg" alt="">
    </div>
</a>
<div class="wrap1">
    <a href="https://basicstero.ws/fat-loss/sibutros-15">
        <div class="title1">Sibutros</div>
    </a>
    <div class="title2">
        Sibutramine
    </div>

    <div class="cart-item1 aligner">
        <div class="cart">
            <div class="minus2"></div>
            <div class="sum2">
                <input type="text" data-product_id="131" class="product_quantity" disabled="" value="1">
            </div>
            <div class="plus2"></div>
        </div>
    </div>

    <div class="price cart-button quantity_none" data-product_id="131" data-warehouse="1">
        <span class="wh_label">W1 - OUT OF STOCK</span> <span class="price_label">$75.00</span>
    </div>

    <div class="price cart-button quantity_none" data-product_id="131" data-warehouse="2">
        <span class="wh_label">W2 - OUT OF STOCK</span> <span class="price_label">$75.00</span>
    </div>

    <div class="price cart-button quantity_none" data-product_id="131" data-warehouse="3">
        <span class="wh_label">W3 - OUT OF STOCK</span> <span class="price_label">$80.00</span>
    </div>
</div>
</div>
<div class="box2-in-item">
<a href="https://basicstero.ws/pct/ovigil-us">
    <div class="box2-img">
        <img src="/uploads/products_us/img_product_174_400_0_0.jpeg" alt="">
    </div>
</a>
<div class="wrap1">
    <a href="https://basicstero.ws/pct/ovigil-us">
        <div class="title1">Pregnyl 5000</div>
    </a>
    <div class="title2">
        Human Chorionic Gonadotropin
    </div>

    <div class="cart-item1 aligner">
        <div class="cart">
            <div class="minus2"></div>
            <div class="sum2">
                <input type="text" data-product_id="200174" class="product_quantity" disabled="" value="1">
            </div>
            <div class="plus2"></div>
        </div>
    </div>

    <div class="price cart-button quantity_none" data-product_id="200174" data-warehouse="1">
        <span class="wh_label">W1 - OUT OF STOCK</span> <span class="price_label">$40.00</span>
    </div>

    <div class="price cart-button quantity_none" data-product_id="200174" data-warehouse="2">
        <span class="wh_label">W2 - OUT OF STOCK</span> <span class="price_label">$0.00</span>
    </div>

    <div class="price cart-button quantity_none" data-product_id="200174" data-warehouse="3">
        <span class="wh_label">W3 - OUT OF STOCK</span> <span class="price_label">$40.00</span>
    </div>
</div>
</div>
<div class="box2-in-item">
<a href="https://basicstero.ws/fat-loss">
    <div class="box2-img">
        <img src="/uploads/products/img_product_184_400_0_0.jpeg" alt="">
    </div>
</a>
<div class="wrap1">
    <a href="https://basicstero.ws/fat-loss">
        <div class="title1">Tiros  (price for 1 blister, 50 pills)</div>
    </a>
    <div class="title2">
        Triiodothyronine
    </div>

    <div class="cart-item1 aligner">
        <div class="cart">
            <div class="minus2"></div>
            <div class="sum2">
                <input type="text" data-product_id="184" class="product_quantity" disabled="" value="1">
            </div>
            <div class="plus2"></div>
        </div>
    </div>

    <div class="price cart-button quantity_max" data-product_id="184" data-warehouse="1">
        <span class="wh_label">W1 - IN STOCK</span> <span class="price_label">$20.00</span>
    </div>

    <div class="price cart-button quantity_max" data-product_id="184" data-warehouse="2">
        <span class="wh_label">W2 - IN STOCK</span> <span class="price_label">$20.00</span>
    </div>

    <div class="price cart-button quantity_max" data-product_id="184" data-warehouse="3">
        <span class="wh_label">W3 - IN STOCK</span> <span class="price_label">$59.00</span>
    </div>
</div>
</div>
<div class="box2-in-item">
<a href="https://basicstero.ws/pct">
    <div class="box2-img">
        <img src="/uploads/products/img_product_185_400_0_0.jpeg" alt="">
    </div>
</a>
<div class="wrap1">
    <a href="https://basicstero.ws/pct">
        <div class="title1">Roas (price for 1 blister, 50 pills)</div>
    </a>
    <div class="title2">
        Isotretinoin
    </div>

    <div class="cart-item1 aligner">
        <div class="cart">
            <div class="minus2"></div>
            <div class="sum2">
                <input type="text" data-product_id="185" class="product_quantity" disabled="" value="1">
            </div>
            <div class="plus2"></div>
        </div>
    </div>

    <div class="price cart-button quantity_max" data-product_id="185" data-warehouse="1">
        <span class="wh_label">W1 - IN STOCK</span> <span class="price_label">$50.00</span>
    </div>

    <div class="price cart-button quantity_max" data-product_id="185" data-warehouse="2">
        <span class="wh_label">W2 - IN STOCK</span> <span class="price_label">$50.00</span>
    </div>

    <div class="price cart-button quantity_max" data-product_id="185" data-warehouse="3">
        <span class="wh_label">W3 - IN STOCK</span> <span class="price_label">$80.00</span>
    </div>
</div>
</div>
<div class="box2-in-item">
<a href="https://basicstero.ws/pct">
    <div class="box2-img">
        <img src="/uploads/products/img_product_214_400_0_0." alt="">
    </div>
</a>
<div class="wrap1">
    <a href="https://basicstero.ws/pct">
        <div class="title1">Farestos (price for 1 blister, 50 pills)</div>
    </a>
    <div class="title2">
        toremifene citrate
    </div>

    <div class="cart-item1 aligner">
        <div class="cart">
            <div class="minus2"></div>
            <div class="sum2">
                <input type="text" data-product_id="214" class="product_quantity" disabled="" value="1">
            </div>
            <div class="plus2"></div>
        </div>
    </div>

    <div class="price cart-button quantity_avg" data-product_id="214" data-warehouse="1">
        <span class="wh_label">W1 - RUNNING LOW</span> <span class="price_label">$43.00</span>
    </div>

    <div class="price cart-button quantity_max" data-product_id="214" data-warehouse="2">
        <span class="wh_label">W2 - IN STOCK</span> <span class="price_label">$43.00</span>
    </div>

    <div class="price cart-button quantity_max" data-product_id="214" data-warehouse="3">
        <span class="wh_label">W3 - IN STOCK</span> <span class="price_label">$90.00</span>
    </div>
</div>
</div>
<div class="box2-in-item">
<a href="https://basicstero.ws/pct">
    <div class="box2-img">
        <img src="/uploads/products/img_product_215_400_0_0.png" alt="">
    </div>
</a>
<div class="wrap1">
    <a href="https://basicstero.ws/pct">
        <div class="title1">Clomos (price for 1 blister, 50 pills)</div>
    </a>
    <div class="title2">
        Clomiphene citrate
    </div>

    <div class="cart-item1 aligner">
        <div class="cart">
            <div class="minus2"></div>
            <div class="sum2">
                <input type="text" data-product_id="215" class="product_quantity" disabled="" value="1">
            </div>
            <div class="plus2"></div>
        </div>
    </div>

    <div class="price cart-button quantity_max" data-product_id="215" data-warehouse="1">
        <span class="wh_label">W1 - IN STOCK</span> <span class="price_label">$25.00</span>
    </div>

    <div class="price cart-button quantity_none" data-product_id="215" data-warehouse="2">
        <span class="wh_label">W2 - OUT OF STOCK</span> <span class="price_label">$25.00</span>
    </div>

    <div class="price cart-button quantity_none" data-product_id="215" data-warehouse="3">
        <span class="wh_label">W3 - OUT OF STOCK</span> <span class="price_label">$60.00</span>
    </div>
</div>
</div>
<div class="box2-in-item">
<a href="https://basicstero.ws/fat-loss">
    <div class="box2-img">
        <img src="/uploads/products/img_product_216_400_0_0.png" alt="">
    </div>
</a>
<div class="wrap1">
    <a href="https://basicstero.ws/fat-loss">
        <div class="title1">Meltos (price for 1 blister, 50 pills)</div>
    </a>
    <div class="title2">
        Clenbuterol
    </div>

    <div class="cart-item1 aligner">
        <div class="cart">
            <div class="minus2"></div>
            <div class="sum2">
                <input type="text" data-product_id="216" class="product_quantity" disabled="" value="1">
            </div>
            <div class="plus2"></div>
        </div>
    </div>

    <div class="price cart-button quantity_max" data-product_id="216" data-warehouse="1">
        <span class="wh_label">W1 - IN STOCK</span> <span class="price_label">$13.00</span>
    </div>

    <div class="price cart-button quantity_max" data-product_id="216" data-warehouse="2">
        <span class="wh_label">W2 - IN STOCK</span> <span class="price_label">$13.00</span>
    </div>

    <div class="price cart-button quantity_max" data-product_id="216" data-warehouse="3">
        <span class="wh_label">W3 - IN STOCK</span> <span class="price_label">$40.00</span>
    </div>
</div>
</div>
<div class="box2-in-item">
<a href="https://basicstero.ws/pct">
    <div class="box2-img">
        <img src="/uploads/products/img_product_217_400_0_0.png" alt="">
    </div>
</a>
<div class="wrap1">
    <a href="https://basicstero.ws/pct">
        <div class="title1">Exos (price for 1 blister, 50 pills)</div>
    </a>
    <div class="title2">
        Exemestane
    </div>

    <div class="cart-item1 aligner">
        <div class="cart">
            <div class="minus2"></div>
            <div class="sum2">
                <input type="text" data-product_id="217" class="product_quantity" disabled="" value="1">
            </div>
            <div class="plus2"></div>
        </div>
    </div>

    <div class="price cart-button quantity_avg" data-product_id="217" data-warehouse="1">
        <span class="wh_label">W1 - RUNNING LOW</span> <span class="price_label">$75.00</span>
    </div>

    <div class="price cart-button quantity_max" data-product_id="217" data-warehouse="2">
        <span class="wh_label">W2 - IN STOCK</span> <span class="price_label">$75.00</span>
    </div>

    <div class="price cart-button quantity_max" data-product_id="217" data-warehouse="3">
        <span class="wh_label">W3 - IN STOCK</span> <span class="price_label">$110.00</span>
    </div>
</div>
</div>
<div class="box2-in-item">
<a href="https://basicstero.ws/pct">
    <div class="box2-img">
        <img src="/uploads/products/img_product_218_400_0_0.png" alt="">
    </div>
</a>
<div class="wrap1">
    <a href="https://basicstero.ws/pct">
        <div class="title1">Letros (price for 1 blister, 50 pills)</div>
    </a>
    <div class="title2">
        Letrozol
    </div>

    <div class="cart-item1 aligner">
        <div class="cart">
            <div class="minus2"></div>
            <div class="sum2">
                <input type="text" data-product_id="218" class="product_quantity" disabled="" value="1">
            </div>
            <div class="plus2"></div>
        </div>
    </div>

    <div class="price cart-button quantity_max" data-product_id="218" data-warehouse="1">
        <span class="wh_label">W1 - IN STOCK</span> <span class="price_label">$45.00</span>
    </div>

    <div class="price cart-button quantity_max" data-product_id="218" data-warehouse="2">
        <span class="wh_label">W2 - IN STOCK</span> <span class="price_label">$45.00</span>
    </div>

    <div class="price cart-button quantity_max" data-product_id="218" data-warehouse="3">
        <span class="wh_label">W3 - IN STOCK</span> <span class="price_label">$95.00</span>
    </div>
</div>
</div>
<div class="box2-in-item">
<a href="https://basicstero.ws/pct">
    <div class="box2-img">
        <img src="/uploads/products/img_product_219_400_0_0.png" alt="">
    </div>
</a>
<div class="wrap1">
    <a href="https://basicstero.ws/pct">
        <div class="title1">Caberos</div>
    </a>
    <div class="title2">
        Cabergoline
    </div>

    <div class="cart-item1 aligner">
        <div class="cart">
            <div class="minus2"></div>
            <div class="sum2">
                <input type="text" data-product_id="219" class="product_quantity" disabled="" value="1">
            </div>
            <div class="plus2"></div>
        </div>
    </div>

    <div class="price cart-button quantity_none" data-product_id="219" data-warehouse="1">
        <span class="wh_label">W1 - OUT OF STOCK</span> <span class="price_label">$1.00</span>
    </div>

    <div class="price cart-button quantity_none" data-product_id="219" data-warehouse="2">
        <span class="wh_label">W2 - OUT OF STOCK</span> <span class="price_label">$1.00</span>
    </div>

    <div class="price cart-button quantity_none" data-product_id="219" data-warehouse="3">
        <span class="wh_label">W3 - OUT OF STOCK</span> <span class="price_label">$1.00</span>
    </div>
</div>
</div>
<div class="box2-in-item">
<a href="https://basicstero.ws/pct">
    <div class="box2-img">
        <img src="/uploads/products/img_product_223_400_0_0.png" alt="">
    </div>
</a>
<div class="wrap1">
    <a href="https://basicstero.ws/pct">
        <div class="title1">TADOS (price for 1 blister, 50 pills)</div>
    </a>
    <div class="title2">
        Tadalafil
    </div>

    <div class="cart-item1 aligner">
        <div class="cart">
            <div class="minus2"></div>
            <div class="sum2">
                <input type="text" data-product_id="223" class="product_quantity" disabled="" value="1">
            </div>
            <div class="plus2"></div>
        </div>
    </div>

    <div class="price cart-button quantity_max" data-product_id="223" data-warehouse="1">
        <span class="wh_label">W1 - IN STOCK</span> <span class="price_label">$150.00</span>
    </div>

    <div class="price cart-button quantity_max" data-product_id="223" data-warehouse="2">
        <span class="wh_label">W2 - IN STOCK</span> <span class="price_label">$150.00</span>
    </div>

    <div class="price cart-button quantity_max" data-product_id="223" data-warehouse="3">
        <span class="wh_label">W3 - IN STOCK</span> <span class="price_label">$190.00</span>
    </div>
</div>
</div>
<div class="box2-in-item">
<a href="https://basicstero.ws/fat-loss">
    <div class="box2-img">
        <img src="/uploads/products/img_product_225_400_0_0.jpeg" alt="">
    </div>
</a>
<div class="wrap1">
    <a href="https://basicstero.ws/fat-loss">
        <div class="title1">Clenbuterol Balkan</div>
    </a>
    <div class="title2">
        Clenbuterol
    </div>

    <div class="cart-item1 aligner">
        <div class="cart">
            <div class="minus2"></div>
            <div class="sum2">
                <input type="text" data-product_id="225" class="product_quantity" disabled="" value="1">
            </div>
            <div class="plus2"></div>
        </div>
    </div>

    <div class="price cart-button quantity_none" data-product_id="225" data-warehouse="1">
        <span class="wh_label">W1 - OUT OF STOCK</span> <span class="price_label">$14.00</span>
    </div>

    <div class="price cart-button quantity_none" data-product_id="225" data-warehouse="2">
        <span class="wh_label">W2 - OUT OF STOCK</span> <span class="price_label">$14.00</span>
    </div>

    <div class="price cart-button quantity_none" data-product_id="225" data-warehouse="3">
        <span class="wh_label">W3 - OUT OF STOCK</span> <span class="price_label">$14.00</span>
    </div>
</div>
</div>
<div class="box2-in-item">
<a href="https://basicstero.ws/fat-loss">
    <div class="box2-img">
        <img src="/uploads/products/img_product_226_400_0_0.jpeg" alt="">
    </div>
</a>
<div class="wrap1">
    <a href="https://basicstero.ws/fat-loss">
        <div class="title1">Citomed Balkan</div>
    </a>
    <div class="title2">
        Triiodothyronine
    </div>

    <div class="cart-item1 aligner">
        <div class="cart">
            <div class="minus2"></div>
            <div class="sum2">
                <input type="text" data-product_id="226" class="product_quantity" disabled="" value="1">
            </div>
            <div class="plus2"></div>
        </div>
    </div>

    <div class="price cart-button quantity_none" data-product_id="226" data-warehouse="1">
        <span class="wh_label">W1 - OUT OF STOCK</span> <span class="price_label">$22.00</span>
    </div>

    <div class="price cart-button quantity_none" data-product_id="226" data-warehouse="2">
        <span class="wh_label">W2 - OUT OF STOCK</span> <span class="price_label">$22.00</span>
    </div>

    <div class="price cart-button quantity_none" data-product_id="226" data-warehouse="3">
        <span class="wh_label">W3 - OUT OF STOCK</span> <span class="price_label">$22.00</span>
    </div>
</div>
</div>
<div class="box2-in-item">
<a href="https://basicstero.ws/pct">
    <div class="box2-img">
        <img src="/uploads/products/img_product_227_400_0_0.jpeg" alt="">
    </div>
</a>
<div class="wrap1">
    <a href="https://basicstero.ws/pct">
        <div class="title1">Tamoximed Balkan 20 mg</div>
    </a>
    <div class="title2">
        tamoxifen
    </div>

    <div class="cart-item1 aligner">
        <div class="cart">
            <div class="minus2"></div>
            <div class="sum2">
                <input type="text" data-product_id="227" class="product_quantity" disabled="" value="1">
            </div>
            <div class="plus2"></div>
        </div>
    </div>

    <div class="price cart-button quantity_none" data-product_id="227" data-warehouse="1">
        <span class="wh_label">W1 - OUT OF STOCK</span> <span class="price_label">$35.00</span>
    </div>

    <div class="price cart-button quantity_none" data-product_id="227" data-warehouse="2">
        <span class="wh_label">W2 - OUT OF STOCK</span> <span class="price_label">$35.00</span>
    </div>

    <div class="price cart-button quantity_none" data-product_id="227" data-warehouse="3">
        <span class="wh_label">W3 - OUT OF STOCK</span> <span class="price_label">$35.00</span>
    </div>
</div>
</div>
<div class="box2-in-item">
<a href="https://basicstero.ws/pct">
    <div class="box2-img">
        <img src="/uploads/products/img_product_228_400_0_0.jpeg" alt="">
    </div>
</a>
<div class="wrap1">
    <a href="https://basicstero.ws/pct">
        <div class="title1">Tamoximed Balkan 10 mg</div>
    </a>
    <div class="title2">
        tamoxifen
    </div>

    <div class="cart-item1 aligner">
        <div class="cart">
            <div class="minus2"></div>
            <div class="sum2">
                <input type="text" data-product_id="228" class="product_quantity" disabled="" value="1">
            </div>
            <div class="plus2"></div>
        </div>
    </div>

    <div class="price cart-button quantity_none" data-product_id="228" data-warehouse="1">
        <span class="wh_label">W1 - OUT OF STOCK</span> <span class="price_label">$23.00</span>
    </div>

    <div class="price cart-button quantity_none" data-product_id="228" data-warehouse="2">
        <span class="wh_label">W2 - OUT OF STOCK</span> <span class="price_label">$23.00</span>
    </div>

    <div class="price cart-button quantity_none" data-product_id="228" data-warehouse="3">
        <span class="wh_label">W3 - OUT OF STOCK</span> <span class="price_label">$23.00</span>
    </div>
</div>
</div>
<div class="box2-in-item">
<a href="https://basicstero.ws/pct">
    <div class="box2-img">
        <img src="/uploads/products/img_product_229_400_0_0.jpeg" alt="">
    </div>
</a>
<div class="wrap1">
    <a href="https://basicstero.ws/pct">
        <div class="title1">SP Labs Gonadotropin 5000 IU, 1 vial</div>
    </a>
    <div class="title2">
        Human Chorionic Gonadotropin
    </div>

    <div class="cart-item1 aligner">
        <div class="cart">
            <div class="minus2"></div>
            <div class="sum2">
                <input type="text" data-product_id="229" class="product_quantity" disabled="" value="1">
            </div>
            <div class="plus2"></div>
        </div>
    </div>

    <div class="price cart-button quantity_none" data-product_id="229" data-warehouse="1">
        <span class="wh_label">W1 - OUT OF STOCK</span> <span class="price_label">$35.00</span>
    </div>

    <div class="price cart-button quantity_none" data-product_id="229" data-warehouse="2">
        <span class="wh_label">W2 - OUT OF STOCK</span> <span class="price_label">$35.00</span>
    </div>

    <div class="price cart-button quantity_none" data-product_id="229" data-warehouse="3">
        <span class="wh_label">W3 - OUT OF STOCK</span> <span class="price_label">$35.00</span>
    </div>
</div>
</div>
</div>
</div>

<div class="show-more-wrap" id="main_pagination">
    <ul class="pagination" role="navigation">
    
                <li class="page-item disabled" aria-disabled="true" aria-label="« Previous">
            <span class="page-link" aria-hidden="true">&lsaquo;</span>
        </li>
    
    
                
        
        
                                                                    <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                                                                            <li class="page-item"><a class="page-link" href="https://basicstero.ws/oralsteroids?page=2">2</a></li>
                                                    
    
                <li class="page-item">
            <a class="page-link" href="https://basicstero.ws/oralsteroids?page=2" rel="next" aria-label="Next »">&rsaquo;</a>
        </li>
        </ul>

</div>

@endsection