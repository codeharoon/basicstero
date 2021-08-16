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
    <div class="title6">INJECTABLE LINE</div>
    <div class="wrap2">
                        <a href="/injectableline/testosterones">
                <div class="box-item4"
                     data-id="1" data-url="testosterones">Testosterones</div>
            </a>
                        <a href="/injectableline/nandrolones">
                <div class="box-item4"
                     data-id="3" data-url="nandrolones">Nandrolones</div>
            </a>
                        <a href="/injectableline/boldenones">
                <div class="box-item4"
                     data-id="4" data-url="boldenones">Boldenones</div>
            </a>
                        <a href="/injectableline/trenbolone">
                <div class="box-item4"
                     data-id="5" data-url="trenbolone">Trenbolones</div>
            </a>
                        <a href="/injectableline/stanozolol">
                <div class="box-item4"
                     data-id="6" data-url="stanozolol">Stanozolol</div>
            </a>
                        <a href="/injectableline/primobolan">
                <div class="box-item4"
                     data-id="7" data-url="primobolan">Primobolanes</div>
            </a>
                        <a href="/injectableline/masteron">
                <div class="box-item4"
                     data-id="8" data-url="masteron">Masterones</div>
            </a>
                        <a href="/injectableline/pharma-mix">
                <div class="box-item4"
                     data-id="9" data-url="pharma-mix">Mixes Special Line</div>
            </a>
                        <a href="/injectableline/methandienone">
                <div class="box-item4"
                     data-id="10" data-url="methandienone">Methandienone inj.</div>
            </a>
                        <a href="/injectableline/oxymetholone">
                <div class="box-item4"
                     data-id="24" data-url="oxymetholone">Oxymetholone</div>
            </a>
                        <a href="/injectableline/gw1516">
                <div class="box-item4"
                     data-id="26" data-url="gw1516">GW1516</div>
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
<a href="https://basicstero.ws/testosterones/pharmatest-e-300">
    <div class="box2-img">
        <img src="/uploads/products/img_product_100_400_0_0.jpeg" alt="">
    </div>
</a>
<div class="wrap1">
    <a href="https://basicstero.ws/testosterones/pharmatest-e-300">
        <div class="title1">PHARMATEST E 300</div>
    </a>
    <div class="title2">
        Testosterone Enanthate
    </div>

    <div class="cart-item1 aligner">
        <div class="cart">
            <div class="minus2"></div>
            <div class="sum2">
                <input type="text" data-product_id="100" class="product_quantity" disabled="" value="1">
            </div>
            <div class="plus2"></div>
        </div>
    </div>

    <div class="price cart-button quantity_max" data-product_id="100" data-warehouse="1">
        <span class="wh_label">W1 - IN STOCK</span> <span class="price_label">$45.00</span>
    </div>

    <div class="price cart-button quantity_avg" data-product_id="100" data-warehouse="2">
        <span class="wh_label">W2 - RUNNING LOW</span> <span class="price_label">$45.00</span>
    </div>

    <div class="price cart-button quantity_max" data-product_id="100" data-warehouse="3">
        <span class="wh_label">W3 - IN STOCK</span> <span class="price_label">$78.00</span>
    </div>
</div>
</div>
<div class="box2-in-item">
<a href="https://basicstero.ws/testosterones">
    <div class="box2-img">
        <img src="/uploads/products/img_product_177_400_0_0.png" alt="">
    </div>
</a>
<div class="wrap1">
    <a href="https://basicstero.ws/testosterones">
        <div class="title1">PHARMATEST E 250 Ampules</div>
    </a>
    <div class="title2">
        Testosterone Enanthate
    </div>

    <div class="cart-item1 aligner">
        <div class="cart">
            <div class="minus2"></div>
            <div class="sum2">
                <input type="text" data-product_id="177" class="product_quantity" disabled="" value="1">
            </div>
            <div class="plus2"></div>
        </div>
    </div>

    <div class="price cart-button quantity_none" data-product_id="177" data-warehouse="1">
        <span class="wh_label">W1 - OUT OF STOCK</span> <span class="price_label">$44.00</span>
    </div>

    <div class="price cart-button quantity_max" data-product_id="177" data-warehouse="2">
        <span class="wh_label">W2 - IN STOCK</span> <span class="price_label">$44.00</span>
    </div>

    <div class="price cart-button quantity_none" data-product_id="177" data-warehouse="3">
        <span class="wh_label">W3 - OUT OF STOCK</span> <span class="price_label">$80.00</span>
    </div>
</div>
</div>
<div class="box2-in-item">
<a href="https://basicstero.ws/testosterones/pharmatest-e-500">
    <div class="box2-img">
        <img src="/uploads/products/img_product_101_400_0_0.jpeg" alt="">
    </div>
</a>
<div class="wrap1">
    <a href="https://basicstero.ws/testosterones/pharmatest-e-500">
        <div class="title1">PHARMATEST E 500</div>
    </a>
    <div class="title2">
        Testosterone Enanthate
    </div>

    <div class="cart-item1 aligner">
        <div class="cart">
            <div class="minus2"></div>
            <div class="sum2">
                <input type="text" data-product_id="101" class="product_quantity" disabled="" value="1">
            </div>
            <div class="plus2"></div>
        </div>
    </div>

    <div class="price cart-button quantity_none" data-product_id="101" data-warehouse="1">
        <span class="wh_label">W1 - OUT OF STOCK</span> <span class="price_label">$75.00</span>
    </div>

    <div class="price cart-button quantity_max" data-product_id="101" data-warehouse="2">
        <span class="wh_label">W2 - IN STOCK</span> <span class="price_label">$75.00</span>
    </div>

    <div class="price cart-button quantity_max" data-product_id="101" data-warehouse="3">
        <span class="wh_label">W3 - IN STOCK</span> <span class="price_label">$105.00</span>
    </div>
</div>
</div>
<div class="box2-in-item">
<a href="https://basicstero.ws/testosterones/pharmatest-c-250">
    <div class="box2-img">
        <img src="/uploads/products/img_product_102_400_0_0.jpeg" alt="">
    </div>
</a>
<div class="wrap1">
    <a href="https://basicstero.ws/testosterones/pharmatest-c-250">
        <div class="title1">PHARMATEST C 250</div>
    </a>
    <div class="title2">
        Testosterone Cypionate
    </div>

    <div class="cart-item1 aligner">
        <div class="cart">
            <div class="minus2"></div>
            <div class="sum2">
                <input type="text" data-product_id="102" class="product_quantity" disabled="" value="1">
            </div>
            <div class="plus2"></div>
        </div>
    </div>

    <div class="price cart-button quantity_max" data-product_id="102" data-warehouse="1">
        <span class="wh_label">W1 - IN STOCK</span> <span class="price_label">$45.00</span>
    </div>

    <div class="price cart-button quantity_max" data-product_id="102" data-warehouse="2">
        <span class="wh_label">W2 - IN STOCK</span> <span class="price_label">$45.00</span>
    </div>

    <div class="price cart-button quantity_max" data-product_id="102" data-warehouse="3">
        <span class="wh_label">W3 - IN STOCK</span> <span class="price_label">$78.00</span>
    </div>
</div>
</div>
<div class="box2-in-item">
<a href="https://basicstero.ws/testosterones">
    <div class="box2-img">
        <img src="/uploads/products/img_product_178_400_0_0.png" alt="">
    </div>
</a>
<div class="wrap1">
    <a href="https://basicstero.ws/testosterones">
        <div class="title1">PHARMATEST C 200 Ampules</div>
    </a>
    <div class="title2">
        Testosterone Cypionate
    </div>

    <div class="cart-item1 aligner">
        <div class="cart">
            <div class="minus2"></div>
            <div class="sum2">
                <input type="text" data-product_id="178" class="product_quantity" disabled="" value="1">
            </div>
            <div class="plus2"></div>
        </div>
    </div>

    <div class="price cart-button quantity_max" data-product_id="178" data-warehouse="1">
        <span class="wh_label">W1 - IN STOCK</span> <span class="price_label">$44.00</span>
    </div>

    <div class="price cart-button quantity_max" data-product_id="178" data-warehouse="2">
        <span class="wh_label">W2 - IN STOCK</span> <span class="price_label">$44.00</span>
    </div>

    <div class="price cart-button quantity_none" data-product_id="178" data-warehouse="3">
        <span class="wh_label">W3 - OUT OF STOCK</span> <span class="price_label">$80.00</span>
    </div>
</div>
</div>
<div class="box2-in-item">
<a href="https://basicstero.ws/testosterones/pharmatest-p-100">
    <div class="box2-img">
        <img src="/uploads/products/img_product_103_400_0_0.jpeg" alt="">
    </div>
</a>
<div class="wrap1">
    <a href="https://basicstero.ws/testosterones/pharmatest-p-100">
        <div class="title1">PHARMATEST P 100</div>
    </a>
    <div class="title2">
        Testosterone Propionate
    </div>

    <div class="cart-item1 aligner">
        <div class="cart">
            <div class="minus2"></div>
            <div class="sum2">
                <input type="text" data-product_id="103" class="product_quantity" disabled="" value="1">
            </div>
            <div class="plus2"></div>
        </div>
    </div>

    <div class="price cart-button quantity_max" data-product_id="103" data-warehouse="1">
        <span class="wh_label">W1 - IN STOCK</span> <span class="price_label">$35.00</span>
    </div>

    <div class="price cart-button quantity_max" data-product_id="103" data-warehouse="2">
        <span class="wh_label">W2 - IN STOCK</span> <span class="price_label">$35.00</span>
    </div>

    <div class="price cart-button quantity_max" data-product_id="103" data-warehouse="3">
        <span class="wh_label">W3 - IN STOCK</span> <span class="price_label">$58.00</span>
    </div>
</div>
</div>
<div class="box2-in-item">
<a href="https://basicstero.ws/testosterones">
    <div class="box2-img">
        <img src="/uploads/products/img_product_220_400_0_0.jpeg" alt="">
    </div>
</a>
<div class="wrap1">
    <a href="https://basicstero.ws/testosterones">
        <div class="title1">PHARMATEST P50</div>
    </a>
    <div class="title2">
        Testosterone Propionate
    </div>

    <div class="cart-item1 aligner">
        <div class="cart">
            <div class="minus2"></div>
            <div class="sum2">
                <input type="text" data-product_id="220" class="product_quantity" disabled="" value="1">
            </div>
            <div class="plus2"></div>
        </div>
    </div>

    <div class="price cart-button quantity_max" data-product_id="220" data-warehouse="1">
        <span class="wh_label">W1 - IN STOCK</span> <span class="price_label">$25.00</span>
    </div>

    <div class="price cart-button quantity_max" data-product_id="220" data-warehouse="2">
        <span class="wh_label">W2 - IN STOCK</span> <span class="price_label">$25.00</span>
    </div>

    <div class="price cart-button quantity_none" data-product_id="220" data-warehouse="3">
        <span class="wh_label">W3 - OUT OF STOCK</span> <span class="price_label">$35.00</span>
    </div>
</div>
</div>
<div class="box2-in-item">
<a href="https://basicstero.ws/testosterones">
    <div class="box2-img">
        <img src="/uploads/products/img_product_179_400_0_0.png" alt="">
    </div>
</a>
<div class="wrap1">
    <a href="https://basicstero.ws/testosterones">
        <div class="title1">PHARMATEST P 100 Ampules</div>
    </a>
    <div class="title2">
        Testosterone Propionate
    </div>

    <div class="cart-item1 aligner">
        <div class="cart">
            <div class="minus2"></div>
            <div class="sum2">
                <input type="text" data-product_id="179" class="product_quantity" disabled="" value="1">
            </div>
            <div class="plus2"></div>
        </div>
    </div>

    <div class="price cart-button quantity_max" data-product_id="179" data-warehouse="1">
        <span class="wh_label">W1 - IN STOCK</span> <span class="price_label">$35.00</span>
    </div>

    <div class="price cart-button quantity_max" data-product_id="179" data-warehouse="2">
        <span class="wh_label">W2 - IN STOCK</span> <span class="price_label">$35.00</span>
    </div>

    <div class="price cart-button quantity_none" data-product_id="179" data-warehouse="3">
        <span class="wh_label">W3 - OUT OF STOCK</span> <span class="price_label">$63.00</span>
    </div>
</div>
</div>
<div class="box2-in-item">
<a href="https://basicstero.ws/testosterones/pharmatest-ph-100">
    <div class="box2-img">
        <img src="/uploads/products/img_product_104_400_0_0.jpeg" alt="">
    </div>
</a>
<div class="wrap1">
    <a href="https://basicstero.ws/testosterones/pharmatest-ph-100">
        <div class="title1">PHARMATEST PH 100</div>
    </a>
    <div class="title2">
        Testosterone Phenylpropionate
    </div>

    <div class="cart-item1 aligner">
        <div class="cart">
            <div class="minus2"></div>
            <div class="sum2">
                <input type="text" data-product_id="104" class="product_quantity" disabled="" value="1">
            </div>
            <div class="plus2"></div>
        </div>
    </div>

    <div class="price cart-button quantity_max" data-product_id="104" data-warehouse="1">
        <span class="wh_label">W1 - IN STOCK</span> <span class="price_label">$35.00</span>
    </div>

    <div class="price cart-button quantity_max" data-product_id="104" data-warehouse="2">
        <span class="wh_label">W2 - IN STOCK</span> <span class="price_label">$35.00</span>
    </div>

    <div class="price cart-button quantity_max" data-product_id="104" data-warehouse="3">
        <span class="wh_label">W3 - IN STOCK</span> <span class="price_label">$58.00</span>
    </div>
</div>
</div>
<div class="box2-in-item">
<a href="https://basicstero.ws/testosterones">
    <div class="box2-img">
        <img src="/uploads/products/img_product_191_400_0_0.png" alt="">
    </div>
</a>
<div class="wrap1">
    <a href="https://basicstero.ws/testosterones">
        <div class="title1">PHARMATEST PH 100 Ampules</div>
    </a>
    <div class="title2">
        Testosterone Phenylpropionate
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

    <div class="price cart-button quantity_max" data-product_id="191" data-warehouse="1">
        <span class="wh_label">W1 - IN STOCK</span> <span class="price_label">$35.00</span>
    </div>

    <div class="price cart-button quantity_max" data-product_id="191" data-warehouse="2">
        <span class="wh_label">W2 - IN STOCK</span> <span class="price_label">$35.00</span>
    </div>

    <div class="price cart-button quantity_avg" data-product_id="191" data-warehouse="3">
        <span class="wh_label">W3 - RUNNING LOW</span> <span class="price_label">$63.00</span>
    </div>
</div>
</div>
<div class="box2-in-item">
<a href="https://basicstero.ws/testosterones/pharmasust-300">
    <div class="box2-img">
        <img src="/uploads/products/img_product_105_400_0_0.jpeg" alt="">
    </div>
</a>
<div class="wrap1">
    <a href="https://basicstero.ws/testosterones/pharmasust-300">
        <div class="title1">PHARMASUST 300</div>
    </a>
    <div class="title2">
        Blend of 4 Testosterone esters
    </div>

    <div class="cart-item1 aligner">
        <div class="cart">
            <div class="minus2"></div>
            <div class="sum2">
                <input type="text" data-product_id="105" class="product_quantity" disabled="" value="1">
            </div>
            <div class="plus2"></div>
        </div>
    </div>

    <div class="price cart-button quantity_avg" data-product_id="105" data-warehouse="1">
        <span class="wh_label">W1 - RUNNING LOW</span> <span class="price_label">$45.00</span>
    </div>

    <div class="price cart-button quantity_max" data-product_id="105" data-warehouse="2">
        <span class="wh_label">W2 - IN STOCK</span> <span class="price_label">$45.00</span>
    </div>

    <div class="price cart-button quantity_max" data-product_id="105" data-warehouse="3">
        <span class="wh_label">W3 - IN STOCK</span> <span class="price_label">$78.00</span>
    </div>
</div>
</div>
<div class="box2-in-item">
<a href="https://basicstero.ws/testosterones">
    <div class="box2-img">
        <img src="/uploads/products/img_product_187_400_0_0.png" alt="">
    </div>
</a>
<div class="wrap1">
    <a href="https://basicstero.ws/testosterones">
        <div class="title1">PHARMASUST 250 Ampules</div>
    </a>
    <div class="title2">
        Blend of 4 Testosterones
    </div>

    <div class="cart-item1 aligner">
        <div class="cart">
            <div class="minus2"></div>
            <div class="sum2">
                <input type="text" data-product_id="187" class="product_quantity" disabled="" value="1">
            </div>
            <div class="plus2"></div>
        </div>
    </div>

    <div class="price cart-button quantity_none" data-product_id="187" data-warehouse="1">
        <span class="wh_label">W1 - OUT OF STOCK</span> <span class="price_label">$44.00</span>
    </div>

    <div class="price cart-button quantity_max" data-product_id="187" data-warehouse="2">
        <span class="wh_label">W2 - IN STOCK</span> <span class="price_label">$44.00</span>
    </div>

    <div class="price cart-button quantity_none" data-product_id="187" data-warehouse="3">
        <span class="wh_label">W3 - OUT OF STOCK</span> <span class="price_label">$80.00</span>
    </div>
</div>
</div>
<div class="box2-in-item">
<a href="https://basicstero.ws/testosterones/pharmasust-500">
    <div class="box2-img">
        <img src="/uploads/products/img_product_106_400_0_0.jpeg" alt="">
    </div>
</a>
<div class="wrap1">
    <a href="https://basicstero.ws/testosterones/pharmasust-500">
        <div class="title1">PHARMASUST 500</div>
    </a>
    <div class="title2">
        Blend of Testosterones
    </div>

    <div class="cart-item1 aligner">
        <div class="cart">
            <div class="minus2"></div>
            <div class="sum2">
                <input type="text" data-product_id="106" class="product_quantity" disabled="" value="1">
            </div>
            <div class="plus2"></div>
        </div>
    </div>

    <div class="price cart-button quantity_avg" data-product_id="106" data-warehouse="1">
        <span class="wh_label">W1 - RUNNING LOW</span> <span class="price_label">$75.00</span>
    </div>

    <div class="price cart-button quantity_max" data-product_id="106" data-warehouse="2">
        <span class="wh_label">W2 - IN STOCK</span> <span class="price_label">$75.00</span>
    </div>

    <div class="price cart-button quantity_max" data-product_id="106" data-warehouse="3">
        <span class="wh_label">W3 - IN STOCK</span> <span class="price_label">$105.00</span>
    </div>
</div>
</div>
<div class="box2-in-item">
<a href="https://basicstero.ws/testosterones/pharmatest-100">
    <div class="box2-img">
        <img src="/uploads/products/img_product_107_400_0_0.jpeg" alt="">
    </div>
</a>
<div class="wrap1">
    <a href="https://basicstero.ws/testosterones/pharmatest-100">
        <div class="title1">PHARMATEST 100</div>
    </a>
    <div class="title2">
        Testosterone Base
    </div>

    <div class="cart-item1 aligner">
        <div class="cart">
            <div class="minus2"></div>
            <div class="sum2">
                <input type="text" data-product_id="107" class="product_quantity" disabled="" value="1">
            </div>
            <div class="plus2"></div>
        </div>
    </div>

    <div class="price cart-button quantity_max" data-product_id="107" data-warehouse="1">
        <span class="wh_label">W1 - IN STOCK</span> <span class="price_label">$33.00</span>
    </div>

    <div class="price cart-button quantity_max" data-product_id="107" data-warehouse="2">
        <span class="wh_label">W2 - IN STOCK</span> <span class="price_label">$33.00</span>
    </div>

    <div class="price cart-button quantity_max" data-product_id="107" data-warehouse="3">
        <span class="wh_label">W3 - IN STOCK</span> <span class="price_label">$65.00</span>
    </div>
</div>
</div>
<div class="box2-in-item">
<a href="https://basicstero.ws/testosterones">
    <div class="box2-img">
        <img src="/uploads/products/img_product_189_400_0_0.png" alt="">
    </div>
</a>
<div class="wrap1">
    <a href="https://basicstero.ws/testosterones">
        <div class="title1">PHARMATEST 100 Ampules</div>
    </a>
    <div class="title2">
        Testosterone Base
    </div>

    <div class="cart-item1 aligner">
        <div class="cart">
            <div class="minus2"></div>
            <div class="sum2">
                <input type="text" data-product_id="189" class="product_quantity" disabled="" value="1">
            </div>
            <div class="plus2"></div>
        </div>
    </div>

    <div class="price cart-button quantity_max" data-product_id="189" data-warehouse="1">
        <span class="wh_label">W1 - IN STOCK</span> <span class="price_label">$33.00</span>
    </div>

    <div class="price cart-button quantity_max" data-product_id="189" data-warehouse="2">
        <span class="wh_label">W2 - IN STOCK</span> <span class="price_label">$33.00</span>
    </div>

    <div class="price cart-button quantity_none" data-product_id="189" data-warehouse="3">
        <span class="wh_label">W3 - OUT OF STOCK</span> <span class="price_label">$70.00</span>
    </div>
</div>
</div>
<div class="box2-in-item">
<a href="https://basicstero.ws/testosterones/pharmatest-100-oil-base">
    <div class="box2-img">
        <img src="/uploads/products/img_product_143_400_0_0.jpeg" alt="">
    </div>
</a>
<div class="wrap1">
    <a href="https://basicstero.ws/testosterones/pharmatest-100-oil-base">
        <div class="title1">PHARMATEST 100 OIL BASE</div>
    </a>
    <div class="title2">
        Testosterone Base
    </div>

    <div class="cart-item1 aligner">
        <div class="cart">
            <div class="minus2"></div>
            <div class="sum2">
                <input type="text" data-product_id="143" class="product_quantity" disabled="" value="1">
            </div>
            <div class="plus2"></div>
        </div>
    </div>

    <div class="price cart-button quantity_none" data-product_id="143" data-warehouse="1">
        <span class="wh_label">W1 - OUT OF STOCK</span> <span class="price_label">$33.00</span>
    </div>

    <div class="price cart-button quantity_max" data-product_id="143" data-warehouse="2">
        <span class="wh_label">W2 - IN STOCK</span> <span class="price_label">$33.00</span>
    </div>

    <div class="price cart-button quantity_max" data-product_id="143" data-warehouse="3">
        <span class="wh_label">W3 - IN STOCK</span> <span class="price_label">$58.00</span>
    </div>
</div>
</div>
<div class="box2-in-item">
<a href="https://basicstero.ws/testosterones">
    <div class="box2-img">
        <img src="/uploads/products/img_product_190_400_0_0.png" alt="">
    </div>
</a>
<div class="wrap1">
    <a href="https://basicstero.ws/testosterones">
        <div class="title1">PHARMATEST 100 oil base Ampules</div>
    </a>
    <div class="title2">
        Testosterone Base
    </div>

    <div class="cart-item1 aligner">
        <div class="cart">
            <div class="minus2"></div>
            <div class="sum2">
                <input type="text" data-product_id="190" class="product_quantity" disabled="" value="1">
            </div>
            <div class="plus2"></div>
        </div>
    </div>

    <div class="price cart-button quantity_max" data-product_id="190" data-warehouse="1">
        <span class="wh_label">W1 - IN STOCK</span> <span class="price_label">$33.00</span>
    </div>

    <div class="price cart-button quantity_max" data-product_id="190" data-warehouse="2">
        <span class="wh_label">W2 - IN STOCK</span> <span class="price_label">$33.00</span>
    </div>

    <div class="price cart-button quantity_none" data-product_id="190" data-warehouse="3">
        <span class="wh_label">W3 - OUT OF STOCK</span> <span class="price_label">$63.00</span>
    </div>
</div>
</div>
<div class="box2-in-item">
<a href="https://basicstero.ws/nandrolones/pharmanan-d-300">
    <div class="box2-img">
        <img src="/uploads/products/img_product_108_400_0_0.jpeg" alt="">
    </div>
</a>
<div class="wrap1">
    <a href="https://basicstero.ws/nandrolones/pharmanan-d-300">
        <div class="title1">PHARMANAN D 300</div>
    </a>
    <div class="title2">
        Nandrolone Decanoate
    </div>

    <div class="cart-item1 aligner">
        <div class="cart">
            <div class="minus2"></div>
            <div class="sum2">
                <input type="text" data-product_id="108" class="product_quantity" disabled="" value="1">
            </div>
            <div class="plus2"></div>
        </div>
    </div>

    <div class="price cart-button quantity_max" data-product_id="108" data-warehouse="1">
        <span class="wh_label">W1 - IN STOCK</span> <span class="price_label">$59.00</span>
    </div>

    <div class="price cart-button quantity_max" data-product_id="108" data-warehouse="2">
        <span class="wh_label">W2 - IN STOCK</span> <span class="price_label">$59.00</span>
    </div>

    <div class="price cart-button quantity_max" data-product_id="108" data-warehouse="3">
        <span class="wh_label">W3 - IN STOCK</span> <span class="price_label">$78.00</span>
    </div>
</div>
</div>
<div class="box2-in-item">
<a href="https://basicstero.ws/nandrolones">
    <div class="box2-img">
        <img src="/uploads/products/img_product_180_400_0_0.png" alt="">
    </div>
</a>
<div class="wrap1">
    <a href="https://basicstero.ws/nandrolones">
        <div class="title1">PHARMANAN D 300 Ampules</div>
    </a>
    <div class="title2">
        Nandrolone Decanoate
    </div>

    <div class="cart-item1 aligner">
        <div class="cart">
            <div class="minus2"></div>
            <div class="sum2">
                <input type="text" data-product_id="180" class="product_quantity" disabled="" value="1">
            </div>
            <div class="plus2"></div>
        </div>
    </div>

    <div class="price cart-button quantity_max" data-product_id="180" data-warehouse="1">
        <span class="wh_label">W1 - IN STOCK</span> <span class="price_label">$59.00</span>
    </div>

    <div class="price cart-button quantity_max" data-product_id="180" data-warehouse="2">
        <span class="wh_label">W2 - IN STOCK</span> <span class="price_label">$59.00</span>
    </div>

    <div class="price cart-button quantity_none" data-product_id="180" data-warehouse="3">
        <span class="wh_label">W3 - OUT OF STOCK</span> <span class="price_label">$83.00</span>
    </div>
</div>
</div>
<div class="box2-in-item">
<a href="https://basicstero.ws/nandrolones/pharmanan-d-600">
    <div class="box2-img">
        <img src="/uploads/products/img_product_109_400_0_0.jpeg" alt="">
    </div>
</a>
<div class="wrap1">
    <a href="https://basicstero.ws/nandrolones/pharmanan-d-600">
        <div class="title1">PHARMANAN D 600</div>
    </a>
    <div class="title2">
        Nandrolone Decanoate
    </div>

    <div class="cart-item1 aligner">
        <div class="cart">
            <div class="minus2"></div>
            <div class="sum2">
                <input type="text" data-product_id="109" class="product_quantity" disabled="" value="1">
            </div>
            <div class="plus2"></div>
        </div>
    </div>

    <div class="price cart-button quantity_max" data-product_id="109" data-warehouse="1">
        <span class="wh_label">W1 - IN STOCK</span> <span class="price_label">$95.00</span>
    </div>

    <div class="price cart-button quantity_max" data-product_id="109" data-warehouse="2">
        <span class="wh_label">W2 - IN STOCK</span> <span class="price_label">$95.00</span>
    </div>

    <div class="price cart-button quantity_max" data-product_id="109" data-warehouse="3">
        <span class="wh_label">W3 - IN STOCK</span> <span class="price_label">$110.00</span>
    </div>
</div>
</div>
<div class="box2-in-item">
<a href="https://basicstero.ws/nandrolones/pharmanan-p-100">
    <div class="box2-img">
        <img src="/uploads/products/img_product_110_400_0_0.jpeg" alt="">
    </div>
</a>
<div class="wrap1">
    <a href="https://basicstero.ws/nandrolones/pharmanan-p-100">
        <div class="title1">PHARMANAN PH 100</div>
    </a>
    <div class="title2">
        Nandrolone Phenylpropionate
    </div>

    <div class="cart-item1 aligner">
        <div class="cart">
            <div class="minus2"></div>
            <div class="sum2">
                <input type="text" data-product_id="110" class="product_quantity" disabled="" value="1">
            </div>
            <div class="plus2"></div>
        </div>
    </div>

    <div class="price cart-button quantity_max" data-product_id="110" data-warehouse="1">
        <span class="wh_label">W1 - IN STOCK</span> <span class="price_label">$39.00</span>
    </div>

    <div class="price cart-button quantity_max" data-product_id="110" data-warehouse="2">
        <span class="wh_label">W2 - IN STOCK</span> <span class="price_label">$39.00</span>
    </div>

    <div class="price cart-button quantity_max" data-product_id="110" data-warehouse="3">
        <span class="wh_label">W3 - IN STOCK</span> <span class="price_label">$58.00</span>
    </div>
</div>
</div>
<div class="box2-in-item">
<a href="https://basicstero.ws/nandrolones">
    <div class="box2-img">
        <img src="/uploads/products/img_product_192_400_0_0.png" alt="">
    </div>
</a>
<div class="wrap1">
    <a href="https://basicstero.ws/nandrolones">
        <div class="title1">PHARMANAN PH 100 Ampules</div>
    </a>
    <div class="title2">
        Nandrolone Phenylpropionate
    </div>

    <div class="cart-item1 aligner">
        <div class="cart">
            <div class="minus2"></div>
            <div class="sum2">
                <input type="text" data-product_id="192" class="product_quantity" disabled="" value="1">
            </div>
            <div class="plus2"></div>
        </div>
    </div>

    <div class="price cart-button quantity_avg" data-product_id="192" data-warehouse="1">
        <span class="wh_label">W1 - RUNNING LOW</span> <span class="price_label">$39.00</span>
    </div>

    <div class="price cart-button quantity_max" data-product_id="192" data-warehouse="2">
        <span class="wh_label">W2 - IN STOCK</span> <span class="price_label">$39.00</span>
    </div>

    <div class="price cart-button quantity_avg" data-product_id="192" data-warehouse="3">
        <span class="wh_label">W3 - RUNNING LOW</span> <span class="price_label">$63.00</span>
    </div>
</div>
</div>
<div class="box2-in-item">
<a href="https://basicstero.ws/nandrolones/pharmanolt-300">
    <div class="box2-img">
        <img src="/uploads/products/img_product_111_400_0_0.jpeg" alt="">
    </div>
</a>
<div class="wrap1">
    <a href="https://basicstero.ws/nandrolones/pharmanolt-300">
        <div class="title1">PHARMANOLT 300</div>
    </a>
    <div class="title2">
        Blend of Nandrolones
    </div>

    <div class="cart-item1 aligner">
        <div class="cart">
            <div class="minus2"></div>
            <div class="sum2">
                <input type="text" data-product_id="111" class="product_quantity" disabled="" value="1">
            </div>
            <div class="plus2"></div>
        </div>
    </div>

    <div class="price cart-button quantity_max" data-product_id="111" data-warehouse="1">
        <span class="wh_label">W1 - IN STOCK</span> <span class="price_label">$39.00</span>
    </div>

    <div class="price cart-button quantity_max" data-product_id="111" data-warehouse="2">
        <span class="wh_label">W2 - IN STOCK</span> <span class="price_label">$39.00</span>
    </div>

    <div class="price cart-button quantity_max" data-product_id="111" data-warehouse="3">
        <span class="wh_label">W3 - IN STOCK</span> <span class="price_label">$76.00</span>
    </div>
</div>
</div>
<div class="box2-in-item">
<a href="https://basicstero.ws/nandrolones">
    <div class="box2-img">
        <img src="/uploads/products/img_product_194_400_0_0.png" alt="">
    </div>
</a>
<div class="wrap1">
    <a href="https://basicstero.ws/nandrolones">
        <div class="title1">PHARMANOLT 300 Ampules</div>
    </a>
    <div class="title2">
        Blend of Nandrolones
    </div>

    <div class="cart-item1 aligner">
        <div class="cart">
            <div class="minus2"></div>
            <div class="sum2">
                <input type="text" data-product_id="194" class="product_quantity" disabled="" value="1">
            </div>
            <div class="plus2"></div>
        </div>
    </div>

    <div class="price cart-button quantity_none" data-product_id="194" data-warehouse="1">
        <span class="wh_label">W1 - OUT OF STOCK</span> <span class="price_label">$39.00</span>
    </div>

    <div class="price cart-button quantity_max" data-product_id="194" data-warehouse="2">
        <span class="wh_label">W2 - IN STOCK</span> <span class="price_label">$39.00</span>
    </div>

    <div class="price cart-button quantity_none" data-product_id="194" data-warehouse="3">
        <span class="wh_label">W3 - OUT OF STOCK</span> <span class="price_label">$90.00</span>
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
                                                                            <li class="page-item"><a class="page-link" href="https://basicstero.ws/injectableline?page=2">2</a></li>
                                                                            <li class="page-item"><a class="page-link" href="https://basicstero.ws/injectableline?page=3">3</a></li>
                                                    
    
                <li class="page-item">
            <a class="page-link" href="https://basicstero.ws/injectableline?page=2" rel="next" aria-label="Next »">&rsaquo;</a>
        </li>
        </ul>

</div>

@endsection