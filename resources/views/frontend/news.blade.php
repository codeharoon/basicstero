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
            
<div class="section1 border1">
    <div class="wrap5">
        <div class="title6">News</div>
        <div class="box13">
                                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">14.07.2021</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            <p>Warehouse 1 was partly restocked!</p>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">05.07.2021</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            <p>Dear customers,</p>
<p>first of all we would liek to inform you that we changed our site design, but we are still the only direct Pharmacom Labs store! We are Pharmacom Labs!</p>
<p>New site has one common account for all warehouses. It is much more user-friendly now. If you can not log in please use the reset link on the login page.</p>
<p>Also, we still have some bugs to be fixed with the new design. Right now email confirmations and emails with order status changes are not functioning. We fix it soon. In the meantime you can always check status on site and find your tracking number in your order details in your account.</p>
<p>The most pleasant part:&nbsp;</p>
<p data-xf-p="1">SUMMER PROMO IS LAUNCHED!</p>
<p data-xf-p="1">Warehouse 2 only! It will be running till 1st of August!</p>
<p data-xf-p="1">Pay with cryptocurrency and get free bonuses as follows:</p>
<p data-xf-p="1"><strong>$50 USD bonus for orders over $100</strong></p>
<p data-xf-p="1"><strong>$100 bonus for orders over $200</strong></p>
<p data-xf-p="1"><strong>$200 bonus for orders over $300</strong></p>
<p data-xf-p="1"><strong>$400 bonus for orders over $500</strong></p>
<p data-xf-p="1"><strong>$700 bonus for orders over $700</strong></p>
<p data-xf-p="1">Bonuses are picked during the ordering process and shipped together with the main order. No promo code is needed. In case of seizures only paid items are reshipped. If you need discreet shipping please leave a comment to your order. This functionality was not implemented yet.</p>
<p data-xf-p="1">Ordering page: <a href="../price">https://basicstero.ws/price</a></p>
<p data-xf-p="1">Enjoy!</p>
<p>&nbsp;</p>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">11.06.2021</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            <p>Dear customers</p>
<p>we updated our site. The new design should be more user-friendly. We merged all 3 warehouses under one single account. If you had accounts with different passwords (US domestic and international), please use username and password for your international account. All discounts for constant customers were preserved. &nbsp;IF you can not log in, please reset your password using this link: <a href="../restore">https://basicstero.ws/restore</a></p>
<p>If you encounter any issues and can not complete your order please report using our contacts page: <a href="../contact">https://basicstero.ws/contact</a></p>
<p>best regards,</p>
<p>Basicstero crew</p>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">08.06.2021</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            <p>Hi there,</p><p>our site was under a severe DDOS-attack. Due to
this it was not available within last days. We are doing our best to 
get it back to operate normally. We are really sorry for 
inconvenience.We are processing all pending orders and replying to 
emails now. Please be patient.<br></p><br>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">28.05.2021</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            Pharmatropin is back in stock!<br>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">17.05.2021</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            Our email is working. Our store is running in regular mode.<br>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">30.04.2021</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            <p>Hi there,</p><p>our email is temporarily not working. We do not receive messages and can not reply. We are very sorry for inconvenience. We fix it as soon as possible. We will announce once email is working again.<br></p>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">20.04.2021</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            <p>Hi all,</p><p>we were under a DDOS attack and our site was not working properly for a while.&nbsp;</p><p>It is running fine now and we are operational. All orders will be processed in time.</p><p>Sorry for inconvenience. All pending emails will be replied shortly within a day.<br></p><p>We are still running up to 25% discounts for all orders paid by cryptocurrency:</p><p><br></p><p>5% for orders over $100<br>10% for orders over $200<br>15% for orders over $350<br>20% for orders over $450<br>25% for orders over $600</p><p>Discounts are applied automatically. No codes needed.</p><p>with best wishes,</p><p>basicstero crew<br></p><br>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">01.04.2021</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            <p>Hi there,</p><p>currently we receive many questions and complains 
regarding not moving packs shipped by the new shipping way from 
warehouse 2. Some packs did not update since February 28th and even 
disappeared. <br></p><p>USPS said one of their branch have lock-downed&nbsp; 
due to covid. This was exactly the branch our packages were going 
through. Packs are not lost. We are working on taking packs out from 
there and rerouting though another way. It may take 7-10 days. <br></p><p>Packs shipped later after 28th of February should not have this issue. They are routed though other ways.</p><p>Sorry for inconvenience, but we could not foresee it. it is&nbsp; force majeure.</p><p>In the worst case, even if some packs get lost, we reship them. No worries.</p><br><br><br>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">29.03.2021</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            Dear customers,if you are ordering to the USA, you need to select warehouse 2. Warehouse 1 can not ship to the USA&nbsp; right now due to coronavirus and the&nbsp; USA are not in the list of destination countries for warehouse 1.<br><br>Also, we remind that we are having great&nbsp; discounts for orders paid by cryptocurrency for international warehouse:<br>5% for orders over $100<br>10% for orders over $200<br>15% for orders over $350<br>20% for orders over $450<br>25% for orders over $600<br><br><p>Finally, we are shipping to the USA by a new way, which has really close to 0 seizures.</p><p><br></p><p>Have a nice day you all!</p><p>basicstero crew<br></p><br><br>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">31.01.2021</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            <p>Dear customers</p><p><br></p><p>Starting from now all orders placed from warehouse 2 will be shipped only after Chinese new year is over in the 2nd half of February.</p><p><br></p><p><br></p>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">14.01.2021</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            Dear customers, some news for today.<br><br>1. We implemented a new range of discounts for orders paid by cryptocurrency for international warehouse 2. Now, if you pay by any cryptocurrency, you get the following discounts: <br>5% for orders over $100<br>10% for orders over $200<br>15% for orders over $350<br>20% for orders over $450<br>25% for orders over $600<br><br>2. Within a few days we start accepting Monero as payment option.<br><br>3. It looks like starting from January, 1st there are issues with shipping orders to UK. Due to Brexit UK custom require VAT for parcels shipped from outside of UK. We tried to ship, but postal service just refuses to accept parcels without VAT of a recipient provided. So, we will have to add an extra field into our ordering form for UK customers. If you do not idicate your VAT we will not be able shipping. Many customers have already complained they don`t have VAT and so on...We really can`t do anything. It is required for shipping to UK now.<br><br>4. This is important. We warn you in advance that due to chinese new year (February 11 – 17 in 2021) we will not be able shipping orders from warehouse 2 probably since the very beginning of February until possibly end of February (based on experience of previous years, although officially holidays take place only 7 days). All orders collected within this time frame will be shipped at fist possibility.<br><br>5. We are going to add testosterone undecanoate vials into our product range. Expect it soon!<br><br>This was all info for now. <br><br>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">24.12.2020</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            CHRISTMAS PROMO LAUNCHED!<br><br>Hi there,<br>as per numerous requests we are launching our 700/700 promo for international warehouse 2! It will be running till January,1st,2021!<br><br>Pay with cryptocurrency and get free bonuses as follows:<br><br>If you order from warehouse 1, you will get the following free bonuses:<br>$50 USD bonus for orders over $ 200<br>$100 USD bonus for orders over $300<br><br>If your order is shipped from warehouse 2, you get the following free bonus:<br>$50 USD bonus for orders over $100<br>$100 bonus for orders over $200<br>$200 bonus for orders over $300<br>$400 bonus for orders over $500<br>$700 bonus for orders over $700<br><br><br>Bonuses are picked during the ordering process and shipped together with the main order. No promo code is needed. In case of seizures (for international warehouse) only paid items are reshipped. Discreet shipping is available. <br><br><br><p>Merry Christmas and Happy New Year to all of you folks!</p><p><br></p><br><br>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">26.11.2020</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            Hi there,<br><br>We launched BLACKFRIDAY PROMO. It will be running for 5 days till the end of October!<br><br>Pay with cryptocurrency and get free bonuses as follows:<br><br>If you order from warehouse 1, you will get the following free bonuses:<br>$50 USD bonus for orders over $ 200<br>$100 USD bonus for orders over $300<br><br>If your order is shipped from warehouse 2, you get the following free bonus:<br>$50 USD bonus for orders over $100<br>$100 bonus for orders over $200<br>$200 bonus for orders over $300<br>$400 bonus for orders over $500<br>$700 bonus for orders over $700<br><br><b>First time ever tomorrow we are launching promotion for our US domestic warehouse for 3 days!</b><br>Pay with cryptocurrency and get free bonuses as follows:<br>$100 bonus for orders over $300<br>$200 bonus for orders over $500<br>$300 bonus for orders over $700<br><br>Bonuses are picked during the ordering process and shipped together with the main order. No promo code is needed. In case of seizures (for international warehouse) only paid items are reshipped. Pharmatropin is not participating in this promotion.<br><br><br><br><br>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">13.11.2020</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            <p>Hi there,</p><p>Halloween promo finished just recently, however we are constantly receiving requests and questions, when is a next promo. Well, we heard you and launching it right now till the end of the year at least. Conditions are all the same:</p><p>1) Only for orders paid with cryptocurrency.<br>2) Only for international warehouses<br>3) Free bonuses are offered automatically only for orders paid by cryptocurrency.<br></p><p>Total bonus list for both warehouses looks like this now: <br>If you order from<b> warehouse 1</b>, you will get the following free bonuses:<br><b>$50 USD bonus for orders over $ 200</b><br><b>$100 USD bonus for orders over $300</b></p><br>If your order is shipped from <b>warehouse 2</b>, you get the following free bonus:<br><b>$50 USD bonus for orders over $100</b><br><b>$100 bonus for orders over $200</b><br><b>$200 bonus for orders over $300</b><br><p></p><p>Bonuses
are picked during the ordering process and shipped together with the 
main order. No promo code is needed. <b>In case of seizures only paid items
are reshipped</b>. Pharmatropin is not participating in this promotion.<br></p><br><br>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">30.10.2020</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            <p>HALLOWEEN PROMO LAUNCHED!</p><p>If your order  from <b>warehouse 2</b> and pay by cryptocurrency you get the following free bonus:<br>
<br>
<b>$50 USD bonus for orders over $100<br>
$100 bonus for orders over $200<br>
$200 bonus for orders over $300<br>
$400 bonus for orders over $500<br>
$700 bonus for orders over $700</b><br>
<br>
Bonuses are picked during the ordering process and shipped together with
the main order. No promo code is needed. In case of seizures only paid
items are reshipped. Pharmatropin is not participating in this  
promotion.<br></p>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">27.10.2020</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            <p>Dear customers,</p><p><br></p><p> for the coming Halloween we are launching our largest promotion for 1 day only on October,31st (GMT +1 time zone).</p>
If your order  from <b>warehouse 2</b> and pay by cryptocurrency you get the following free bonus:<br>
<br>
<b>$50 USD bonus for orders over $100<br>
$100 bonus for orders over $200<br>
$200 bonus for orders over $300<br>
$400 bonus for orders over $500<br>
$700 bonus for orders over $700</b><br>
<br>
Bonuses are picked during the ordering process and shipped together with
the main order. No promo code is needed. In case of seizures only paid
items are reshipped. Pharmatropin is not participating in this  
promotion.<br>
<br>
Our price list for international warehouses is here:<br>
<a href="https://int.basicstero.ws/products/show" target="_blank" rel="">https://int.basicstero.ws/products/show</a><br>
<br>
<br>
Promo is running  for orders paid by bitcoin or other cryptocurrency only!<br>
Don`t know how and where to buy bitcoin? Check our tutorial:<br>
<a href="https://int.basicstero.ws/index/bitcoin" target="_blank" rel="">https://int.basicstero.ws/index/bitcoin</a><br>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">05.08.2020</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            <p>After numerous requests from customers we changed ordering logic&nbsp;for&nbsp;our&nbsp;international section.</p><p>Now you can chose what warehouse to order from.</p><p><a href="https://int.basicstero.ws/products/show" target="" rel="">https://int.basicstero.ws/products/show</a><br> </p><br><p>It can be whether warehouse 1 or warehouse 2. Please note all products within one single order should be picked up from one and the same warehouse.&nbsp; <br></p><p>Right now warehouse 1 can ship without delays within EU only. If you are outside of EU please select products from warehouse 2.<br></p>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">17.06.2020</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            <p></p>We have checked tracking numbers for the very first packages we shipped 
from W2. both to the USA and to other countries all over the world. <br><p>Packages to Europe arrive just great. <br></p><p>Packages to the USA arriving right now. First customers have received their orders from February.</p><p>Yes, shipping takes up to 17-25 days, but it was always like this for W2. <br></p><p>W1 can ship still within EU only. It could be that shipping to the USA and other countries becomes available in July only. <br></p><p>Shipping
to Taiwan from W2&nbsp; still not available yet. Korea had lots of returns. 
We will have to use another way, looking for solution. The regular way 
we used earlier is not available yet.</p><p>The 
only major pending issue touches US customers who placed orders from W1 
starting since the 2nd half of March. Those orders can not be shipped 
from W1 and as said earlier, it may take up to July. If you wish, we can
move your order to W2 and ship asap from W2. We will work with such 
customers individually. Contact form is available on our site 
basicstero.ws</p><p>Everything else seems 
normalizing. Please have patience. You all get your orders soon. And 
don`t forget to film the unpacking process as per ordering conditions. 
It is a mandatory condition to claim broken or missing items. We were 
really stressed these months and could do some human mistakes, although 
we always&nbsp; pay full attention to this.</p><p>W2 is working well now and orders can be placed. Our promotions for cryptocurrency still running!<br></p><p></p><br>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">04.06.2020</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            <p>Unfortunately we temporarily do not have&nbsp; possibility to accept 
Western Union and MoneyGram transfers at all. We are not sure, how long 
it takes before we start accepting these payment methods. For now we 
accept cryptocurrency only. Bitcoin is extremely easy and user-friendly.
Please check out bitcoin tutorial here:</p><p><a href="https://us.basicstero.ws/index/bitcoin" target="" rel="">https://us.basicstero.ws/index/bitcoin</a><br></p><br><br><br><br>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">26.05.2020</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            Update. Our agent just informed us shipping to the USA from W2 became 
available. We will not send all the packages for once. We split in 
parts. Shipping of all the orders collected for last months may take up 
to a 10 days probably + time on the way. No need to ask for tracking 
numbers. We upload them soon and you get emails and can also see it in 
your account on site in order details.<br>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">18.05.2020</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            <p>We have just uploaded 500+ tracking numbers for orders placed by customers all over the world except thew USA, Italy and Taiwan. There are still delays with shipping to these countries from warehouse 2. We are checking situation daily and ship all as soon as possible. Situation should get better within days.</p><p>Tracking number were uploaded both to our site into order details and our system also sent email notifications. Don`t forget checking your spam folders.</p><p>Once we have more news, we announce all.&nbsp;</p><p>Thank you for patience.<br></p>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">15.05.2020</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            <p>Tracking numbers for very first pending orders from the end of January from W2 have been finally uploaded. It may still take some time before they start moving. Please have patience. We can not speed them up.</p><p>Tracking numbers towards the USA have a larger delay compared against orders to other countries. Please also have patience. We understand it will make you upset , but we tell all as is, which is definitely better than just to say you get tracking number soon.</p><p><br></p><p>Tracking numbers for all other orders will be uploaded within coming days. No need to send emails to us daily and ask for tracking number, it will not help at all. Tracking numbers are available on site in your order details once uploaded.You will get also an e-mail notification. Do not forget to check your spam folder.<br></p><br>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">04.05.2020</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            <p>An update regarding warehouse 2.</p><p>As you can remember, parcels at W2 are packed in China first. We packed all packages. However, China has official holidays from 1st to 5th of May.&nbsp;</p><p>Also, there is another bigger obstacle with shipping. Some customers sending emails to us saying they already can receive goods from China without issues, so why we can not ship. Our question: what goods do you receive? Prohibited medical preparations or neutral stuff?</p><p>Due to the outbreak of coronavirus pandemic Chinese customs very thoroughly control all parcels for export and look in particular for medicine-related products.&nbsp;</p><p>Due to this shipping may take some time and delay for a week or two. We are doing our best to ensure safe delivery.</p><p>All victims of delays got store credits on their balance:</p><p>$ 50 for orders below $200 <br></p><p>$100 for orders over $200</p><p>We will update you once some new info is available.</p><p>Warehouse 1 cant ship still within Europe so far, but situation is getting better.We expect shipping will be available by the middle of May.</p><p>US domestic warehouse is functioning without issues.<br></p><br><br>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">26.04.2020</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            <p></p><p>We
finally got access to our facility,warehouse 2.&nbsp; We started packing 
first pending orders today. We are not sure yet, how well shipping 
works. More info will be provided once available. Just some photo as 
evidence</p><p><a href="http://imgbox.com/5F1RDHdC" target="" rel="">http://imgbox.com/5F1RDHdC</a><br><a href="http://imgbox.com/NkAIIP8g" target="" rel="">http://imgbox.com/NkAIIP8g</a><br><a href="http://imgbox.com/opfmqgWo" target="" rel="">http://imgbox.com/opfmqgWo</a><br></p><br>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">21.03.2020</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            <p></p><p>Information for customers who placed orders recently.</p><p><br></p><p>A
part of orders was shipped. Some customers got tracking numbers, 
however those tracking numbers say now that package returned back to the
origin location. We contacted postal office and asked, what is going 
on. It turned out that they accepted packages from us, but later in 
sorting center before even packages left the origin country postal 
service returned packages back. They are not allowed sending parcels due
to isolation and quarantine.</p><p>Most orders 
shipped on&nbsp; roughly 8th-16th of March suffered from this. We could not 
know this happens. We have to wait until shipping is possible again. 
There is nothing we can do now. We make all right once shipping is 
possible.</p><p>Those who did not get tracking numbers at all, sorry, we also were not able shipping your orders due to the same reason.</p><p>p.s. It is only about orders from international warehouse 1. <br></p><p>US domestic if functioning as usually so far.<br></p>
<p></p><br>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">16.03.2020</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            Hi there.<br>EU-based warehouse 1 was not able shipping a part of latest orders, unfortunately. Postal service closes. They refuse to accept parcels. We will not be able shipping orders from warehouse 1 for a while.Preliminary, this pause will lasts about 2 weeks up to the end of March.<br>We will continue accepting orders, but you should take into account that orders will be shipped <b>with delays</b>. The delay is caused by a force majeure, which is absolutely beyond our control. We continue shipping as soon as possible. <br>Warehouse 2 still can not ship yet as well.<br>Currently only our US domestic warehouse is working without delays.<br><br>The good thing is that our promotion for both warehouses is still running and you can take advantage of it now. Promotions will most probably be rare in future.<br><br>Promo conditions for <b>warehouse 1</b>: <br><b>for $100 orders - free bonuses for the value 35$</b><br><b>for $200 orders - free bonuses for the value 80$</b><br><b>for $300 orders - free bonuses for the value 150$</b><br><br>Promo conditions for <b>warehouse 2:</b> <br><br><b>for $100 orders - free bonuses for the value 50$</b><br><b>for $200 orders - free bonuses for the value 100$</b><br><b>for $300 orders - free bonuses for the value 200$</b><br><br>Promotions will be running until we can ship normally without delays. Free bonuses will be offered by our system automatically if you pay by any cryptocurrency we accept. Bonuses are picked during the ordering process and shipped together with the main order. No promo code is needed. In case of seizures only paid items are reshipped. Pharmatropin is not participating in this promotion.<br>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">09.03.2020</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            Our email and contacts page is functioning again. <br>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">08.03.2020</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            <p>Dear customers,</p><p>we are having technical issues with our email 
addresses.All messages sent to us though the contacts form on site 
within last 12 hours have not been received. Also if you were in the 
middle of correspondence with us and tried sending a message to our 
email directly, you may get an error message saying "Undelivered Mail 
Returned to Sender... Host or domain name not found. Name service 
error". <br></p><p>Please don`t worry.We are not going to disappear, just technician issues.
It is weekend now. Our technician team will be able to fix it Monday 
morning. We are sorry for inconvenience. For now we are temporary not 
able replying to your emails.<br></p><br><br><br><br>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">02.03.2020</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            Update regarding warehouse 2. We still can not ship from it. Packages from W2 are packad in China and shipped to Europe first and than forwarded to final destination.<br>According to Chinese government only 1/3 of businesses/factories/facilities are currently operational. They promise to increase this value up to 90% by the end of March.<br>In the worst case it may take 1 month more before we can start shipping from W2. We expect though situation will be solved within one, longest two weeks.<br><br>In order to motivate customers placing orders we are launching promotion for warehouse 2 as well. This promotion will be launching as long as we are not able shipping from W2. Once we can ship we stop promotion.<br>Conditions are the following:<br><br>1) Only for orders paid with cryptocurrency.<br>2) If you participate in this promotion and place your order from warehouse 2 you automatically <b>agree to wait until we are able shipping orders from W2.</b><br>3) If you change your mind, there are no refunds, but we can cancel your order and you may place an order from warehouse 1 (without initial bonuses of course) or we can move your balance to US domestic warehouse upon request.<br><br><b>Promotion bonuses: </b><br><b>$50&nbsp; bonus for orders over $100</b><br><b>$100 bonus for orders over $200</b><br><b>$200 bonus for orders over $300</b><br><br>Bonuses are picked during the ordering process and shipped together with the main order. No promo code is needed. In case of seizures only paid items are reshipped. Pharmatropin is not participating in this promotion.<br><br>Reminder: By default all orders are shipped from warehouse 1 from within Europe. This warehouse provides best delivery success with fastest shipping time.<br><br>If at least one single item in your order is out of stock from warehouse 1, your entire order automatically will be shipped from warehouse 2. <br><p>W1 is used always by default, unless some item you ordered is not in stock there. W2 is a spare warehouse. It has longer delivery time up to 15-21 days and chosen automatically if your order has at least some item missing from warehouse 1.</p><p><br></p><p>Promotion for warehouse 1 is also running! Full details available in our previous post.<br></p>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">25.02.2020</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            <p>Good news!</p><p>We are launching promotion for orders placed from warehouse 1 and paid by cryptocurrency.&nbsp;</p><p>From now on until March 31st we will be offering free bonuses for orders from W1 as follows:</p><p><b>for $100 orders - free bonuses for the value 35$</b></p><p><b>for $200 orders - free bonuses for the value 80$</b></p><p><b>for $300 orders - free bonuses for the value 150$</b></p><p>Reminder: you do not have any warehouse selector on site (between international warehouse 1 and 2). By default our system always assigns an order&nbsp; to warehouse 1, IF all items<b> </b>in this order are in stock from W1. If at least one single item in your order is out of stock from W1, the entire order will automatically be assigned to warehouse 2. <br></p><p>How do you know, what items available from W1? Please use this page</p><p><a href="https://int.basicstero.ws/products/show?warehouse=1" target="" rel="">https://int.basicstero.ws/products/show?warehouse=1</a><br>
All items there are filtered by availability from warehouse 1. Any item 
from this list can be ordered and your order will be assigned to 
warehouse 1 by default.</p><p>Promo items will be offered at one of the ordering steps after you fill in delivery info right before you check out. <br></p><p>In case of seizures/losses only main paid items are reshipped for free, without bonus items!<br></p><br><br><br><br><br><br>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">12.02.2020</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            <p>Update regarding the current situation.</p><p>US domestic and International warehouse 1 work in normal mode.</p><p>Warehouse 2 still can not ship packages. <br>Packages from warehouse 2 are packed in Asia and shipped to Europe first. It had to start working on 5th, but due to situation with coronavirus government extended holidays till 10th. Afrerwards pause was extended again till 17th. Shipping service is not working right now, we do not have an opportunity to ship packages. It not not a regular situation, but force major, which happened for the first time for all the time we work.&nbsp; Dear customers, please be patient. Once postal service starts working, all packages will be shipped.We hope to continue on 17th of February.&nbsp;</p>In any case, there is no need for panic. Virus is not dangerous for 
you. It can survive on surfaces only within a few hours. Even if a 
package was hypothetically infected, virus would die after a few hours. 
Packages are many days on the way. So it is safe to receive it. Besides 
that we are located faraway from the epicenter.<br><br>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">10.02.2020</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            <p>Dear customers, there is a delay with uploading tracking numbers for orders shipped recently from warehouse 1. Due to internal reasons all tracking numbers will be uploaded within 2-3 days. We are sorry for inconvenience.<br></p><p>P.s. It does not delay the order processing.Orders were shipped and are on the way. <br></p><br>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">16.01.2020</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            <p>Update for all customers.</p><p>It looks like due to coming Chinese New Year services stop working even earlier than we expected. We confirm pending orders and tomorrow will be the last shipping before holidays starts. All further orders confirmed starting from tomorrow will be shipped in the very beginning of February. <br></p><p>This is only about orders placed from warehouse 2. Warehouses 1 and US domestic are not influenced.&nbsp;</p><p><br></p>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">14.01.2020</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            <p>Dear customers,</p><p><br></p>
Since we are still using and packing orders at warehouse 2 until we sell
out our left stock at W2, we are still influenced by coming Spring  
Festival (so-called Chinese New Year) in China. Officially it takes  
place starting from Friday, 24 January to Thursday , 30 January. 
Shipping services will not work during this period.<br>
For this reason orders placed from warehouse 2 ONLY (warehouse 1 is not 
influenced as well as US domestic warehouse) will be shipped on January
20th last time before holidays. We will continue accepting orders (so 
far still at older prices without price increase) during the Spring  
festival, but all of them will be shipped roughly on 4th of 5th of  
February only.<br><p>
Chinese New Year will delay processing of orders from warehouse 2. Please take it into account!</p><p><br></p><p>Respectfully,</p><p>Basicstero crew<br></p><br>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">24.12.2019</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            <p>Christmas promotion launched!</p><p></p><p><b>Only 3 days From 24th to 26th of December 2019 additional to our currently running winter promotion we are adding extra bonus items!</b></p><p><b>$400 bonus for orders over $500</b><br><b>$700 bonus for orders over $700</b><br><br>PROMO CONDITIONS<br><br>1) Only for orders paid with cryptocurrency.<br>2) Only for international warehouses<br>3) Free bonuses are offered automatically only for orders paid by cryptocurrency.<br></p><p>Total bonus list for both warehouses looks like this now: <br>If you order from<b> warehouse 1</b>, you will get the following free bonuses:<br><b>$50 USD bonus for orders over $ 200</b><br><b>$100 USD bonus for orders over $300</b></p><p><br>If your order is shipped from <b>warehouse 2</b>, you get the following free bonus:<br><b>$50 USD bonus for orders over $100</b><br><b>$100 bonus for orders over $200</b><br><b>$200 bonus for orders over $300</b><br><b>$400 bonus for orders over $500</b><br><b>$700 bonus for orders over $700</b><br><br>Christmas Promotion with $400 and $700 bonuses will be running for 3 days only till 26th of December. Promo with smaller bonuses up to 200$ will be running till the end of December as promised earlier. <br></p><p>Bonuses
are picked during the ordering process and shipped together with the 
main order. No promo code is needed. <b>In case of seizures only paid items
are reshipped</b>. Pharmatropin is not participating in this promotion.<br><br>Our price list for international warehouses is here:<br><a href="https://int.basicstero.ws/products/show" target="" rel="">https://int.basicstero.ws/products/show</a><br><br>Promo is running&nbsp; for orders paid by bitcoin or other cryptocurrency only!<br>Don`t know how and where to buy bitcoin? Check our tutorial: <a href="https://int.basicstero.ws/index/bitcoin" target="" rel="">https://int.basicstero.ws/index/bitcoin</a><br><br>Reminder:
By default all orders are shipped from warehouse 1 from within Europe. 
This warehouse provides best delivery success with fastest shipping 
time.<br><br>If at least one single item in your order is out of stock 
from warehouse 1, your entire order automatically will be shipped from 
warehouse 2. You can not chose,what warehouse to order from. W1 is used 
always by default, unless some item you ordered is not in stock there. 
W2 is a spare warehouse. It has longer delivery time up to 15-21 days 
and chosen automatically if your order has at least some item missing 
from warehouse 1.<br></p><p><br></p><br><br><p></p><br><br><br>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">19.12.2019</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            I have really very sad news today. Maybe you heard about it. There were some rumors recently that China is very serious about banning steroids production. Not just banning, let me be clear: China is criminalizing production/trade/import/export. New laws should go into force on January,1st,2020.<br><br><p>As you know, virtually all raws are produced in China. In fact, there are just a few huge factories producing steroid raws and with the coming new year they stop production. This means there will be virtually no possibility buying them – the production of raws will be halted. We hoped everything is not so serious... But just today we were trying purchasing more test e raws and got refusal.</p><br>Some raws for less popular/demanded products can be still ordered till the end of the year, but there is already a real deficiency of the popular ones like test enanthate.<br>This will effect ALL sources, absolutely all. The current available stock will be sold and all sources you usually order from will no longer have products.<br><br><p>We, Pharmacom Labs did and are still doing our best to get maximum raws now to have stock for future for 6-12 months at least + we still have a lot of ready-to-use finish products available in stock.</p><p><br></p><p><b>For this reason, we will still continue our 300/200 promotion for orders paid by cryptocurrency till the of the year. Just because we promised it. We will also have 3 days of increased bonuses up to $700/$700 for 3 days within Christmas promotion on 24th - 26th of December for warehouse 2 only.</b></p><p><br></p><b>Since January 1st prices will go up by 20% at least and may and most probably will only go higher with the time while our stock will be running low.</b> Orders placed within the promotion and not paid by January 1st will be liquidated without possibility to restore them. There will be no exclusions. We warn about it in advance. New year starts with new increased prices. So, this is really the last promotion we have.<br><br>We will still have sufficient stock for probably next 6-12 months. After this, as per current perspective, sales will be stopped due to missing stock and lack of any possibility to get raws. We are not quite sure yet, what exactly will happen in future.<br><br>There is also no certainty how shipping will work in future. Maybe Basicstero will be able shipping small orders but not large ones.Most probably we stop selling in bulk since January to have stock for retail customers directly from our store for as long time as possible.<br><br>I predict most underground labs will close because of lack of access to quality raws (or some may stay open with questionable products because real raws are already virtually not available nor even produced).<br><br>We still can ship within December from our international warehouse without issues. I don`t want it to sound like I am trying to increase our sales by using the above excuse. I am just telling all "as it is." It is just what we encountered with just today. We were already now not able purchasing some raws.<br><br>So, our advice for all. If you want to have some stock at old prices, you need to place your order and pay for it before the end of the year. I am not sure, how delivery will work afterwards, but what is sure prices will go up.<br><br>Situation is really said and there is no certainty regarding coming perspectives, but they look not well right now.<br>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">08.12.2019</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            <p>Today we have warehouse revision. For this we have to remove all pending and not yet paid orders for a while. After revision is completed within a few hours, we will restore already confirmed, but not yet shipped orders and pending not paid orders. If you don`t find your order in your account, no panic please. Just contact us, we restore your order.</p><p><br></p>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">28.11.2019</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
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
from warehouse 1.<br></p><p><br></p><br>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">23.11.2019</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            <br>We are glad to announce in advance our generous promotion for Black Friday.<br><br>Promo will be running for 1 week<b> from 28th of November to 5th of December 2019</b>.<br><br>Most of you have got used to our promotions and conditions and we don`t wanna change them so far.<br><br>PROMO CONDITIONS<br><br>1) Only for orders paid with cryptocurrency.<br>2) Only for international warehouses<br>3) Free bonuses are offered automatically only for orders paid by cryptocurrency.<br><br>If you order from<b> warehouse 1</b>, you will get the following free bonuses:<br><b>$50 USD bonus for orders over $ 200</b><br><b>$100 USD bonus for orders over $300</b><br><br>If your order is shipped from <b>warehouse 2</b>, you get the following free bonus:<br><b>$50 USD bonus for orders over $100</b><br><b>$100 bonus for orders over $200</b><br><b>$200 bonus for orders over $300</b><br><b>$400 bonus for orders over $500</b><br><b>$700 bonus for orders over $700</b><br><br>Bonuses are picked during the ordering process and shipped together with the main order. No promo code is needed. In case of seizures only paid items are reshipped. Pharmatropin is not participating in this promotion.<br><br>Our price list for international warehouses is here:<br><a href="https://int.basicstero.ws/products/show" target="" rel="">https://int.basicstero.ws/products/show</a><br><br>Promo is running&nbsp; for orders paid by bitcoin or other cryptocurrency only!<br>Don`t know how and where to buy bitcoin? Check our tutorial: <a href="https://int.basicstero.ws/index/bitcoin" target="" rel="">https://int.basicstero.ws/index/bitcoin</a><br><br>Reminder: By default all orders are shipped from warehouse 1 from within Europe. This warehouse provides best delivery success with fastest shipping time.<br><br>If at least one single item in your order is out of stock from warehouse 1, your entire order automatically will be shipped from warehouse 2. You can not chose,what warehouse to order from. W1 is used always by default, unless some item you ordered is not in stock there. W2 is a spare warehouse. It has longer delivery time up to 15-21 days and chosen automatically if your order has at least some item missing from warehouse 1.<br><br><br><br><br>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">06.11.2019</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            <p>Demand
breeds supply. Our promotions seem really demanded. We get increased 
demand, customers get best offer at great price; all are happy.<br></p><p><b>So, we decided to extend our promotion for the rest of the year till January, 1st 2020!</b></p><p>Since you all get used to our promotion conditions and know them, we&nbsp; change nothing. But I repeat terms just in case.<br></p><p>1) Only for orders paid with cryptocurrency.<br>2) Only for international warehouses<br>3) Time frame: from now to 1st of January 2020!<br>4) Free bonuses are offered automatically only for orders paid by cryptocurrency.<b><br><br>If you order from <b>warehouse 1</b>, you will get the following free bonuses:<br><b>$50 USD bonus for orders over $ 200</b><br><b>$100 USD bonus for orders over $300</b><br><br>If your order is shipped from <b>warehouse 2,</b> you get the following free bonus:<br><b>$35 USD bonus for orders over $100</b><br><b>$100 bonus for orders over $200</b><br><b>$200 bonus for orders over $300</b><br><br></b>Bonuses
are picked during the ordering process and shipped together with the 
main order. No promo code is needed. In case of seizures only paid items
are reshipped. Pharmatropin is not participating in this promotion.<b><br><br>Our price list for international warehouses is here:<br><a href="https://int.basicstero.ws/products/show[/CODE]" target="" rel="">https://int.basicstero.ws/products/show</a><br><br></b>Promo is running&nbsp; for orders paid by bitcoin or other cryptocurrency only!<br>Don`t know how and where to buy bitcoin? Check our tutorial: <br></p><p><a href="https://int.basicstero.ws/index/bitcoin[/CODE]" target="" rel="">https://int.basicstero.ws/index/bitcoin</a><br><br>Reminder:
By default all orders are shipped from warehouse 1 from within Europe. 
This warehouse provides best delivery success with fastest shipping 
time.<br><br>If at least one single item in your order is out of stock 
from warehouse 1, your entire order automatically will be shipped from 
warehouse 2. You can not chose,what warehouse to order from. W1 is used 
always by default, unless some item you ordered is not in stock there. 
W2 is a spare warehouse. It has longer delivery time up to 15-21 days 
and chosen automatically if your order has at least some item missing 
from warehouse 1.<b><br></b></p><p><br></p><br><br>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">31.10.2019</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            DID SOMEONE SAY TRICK OR TREAT?!<br><br>HALLOWEEN PROMOTION LAUNCHED!<br><br>PROMO CONDITIONS<br><br>1) Only for orders paid with cryptocurrency.<br>2) Only for international warehouses<br>3) Time frame: 31th of October to 5th of November 2019<br>4) Free bonuses are offered automatically only for orders paid by cryptocurrency.<br><br>If you order from <b>warehouse 1</b>, you will get the following free bonuses:<br><b>$50 USD bonus for orders over $ 200</b><br><b>$100 USD bonus for orders over $300</b><br><br>If your order is shipped from <b>warehouse 2,</b> you get the following free bonus:<br><b>$35 USD bonus for orders over $100</b><br><b>$100 bonus for orders over $200</b><br><b>$200 bonus for orders over $300</b><br><b>$400 bonus for orders over $500</b><br><b>$700 bonus for orders over $700</b><br><br>Bonuses are picked during the ordering process and shipped together with the main order. No promo code is needed. In case of seizures only paid items are reshipped. Pharmatropin is not participating in this promotion.<br><br>Our price list for international warehouses is here:<br><a href="https://int.basicstero.ws/products/show" target="" rel="">https://int.basicstero.ws/products/show</a><br><br>Promo is running&nbsp; for orders paid by bitcoin or other cryptocurrency only!<br>Don`t know how and where to buy bitcoin? Check our tutorial: <a href="https://int.basicstero.ws/index/bitcoin" target="" rel="">https://int.basicstero.ws/index/bitcoin</a><br><br>Reminder: By default all orders are shipped from warehouse 1 from within Europe. This warehouse provides best delivery success with fastest shipping time.<br><br>If at least one single item in your order is out of stock from warehouse 1, your entire order automatically will be shipped from warehouse 2. You can not chose,what warehouse to order from. W1 is used always by default, unless some item you ordered is not in stock there. W2 is a spare warehouse. It has longer delivery time up to 15-21 days and chosen automatically if your order has at least some item missing from warehouse 1.<br><br>Be sure to holler trick or treat!<br><br>We witch you a Happy Halloween!Boo!<br><br><br>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">05.10.2019</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            <b>Our 300/100,300/200 promotion is extremely demanded. We are extending it for one more month! </b><br>
<u>PROMO CONDITIONS</u><br>
<br>
1) Only for orders paid with cryptocurrency.<br>
2) Only for international warehouses<br>
3) Time frame: <b>5th of October to 5th of November 2019</b><br>
<br>
If you order from <b>warehouse 1</b>, you will get the following free bonuses:<br>
<b>$50 USD bonus for orders over $ 200</b><br><b>
$100 USD bonus for orders over $300</b><br>
<br>
If your order is shipped from <b>warehouse 2</b>, you get the following free bonus:<br>
<b>$35 USD bonus for orders over $100</b><br><b>
$100 USD bonus for orders over $200</b><br><b>
$200 USD bonus for orders over $300</b><br>
<br>
Bonuses are picked during the ordering process and shipped together with
the main order. No promo code is needed. In case of seizures only paid
items are reshipped. Pharmatropin is not participating in this  
promotion.<br>
<br>
Our price list for international warehouses is here: <br>
&nbsp;&nbsp;&nbsp; <a href="https://int.basicstero.ws/products/show" target="_blank" rel="">https://int.basicstero.ws/products/show</a> <br>
<br>
Reminder: By default all orders are shipped from warehouse 1 from within
Europe. This warehouse provides best delivery success with fastest  
shipping time.<br>
If at least one single item in your order is out of stock from warehouse
1, your entire order automatically will be shipped from warehouse 2.  
You can not chose,what warehouse to order from. W1 is used always by  
default, unless some item you ordered is not in stock there. W2 is a  
spare warehouse. It has longer delivery time up to 15-18 days, and as it
appears now, it has about 10% higher seizure rare compared to W1  
(towards the USA). W1 delivers almost all orders without issues, if  
customer provide all delivery info right and complete. So, orders from  
W1 have higher delivery rate (again, towards the USA). On the other  
side, W2 has discreet shipping available, which helps to deliver orders 
to those countries, where W1 was helpless. To Australia and Norway, for
example, W2 has a better delivery rate, IF discreet shipping is 
chosen.<br>
<br>
The last notice for today. Due to reasons out of our control we have to 
limit minimum MoneyGram payment to 300$. Western Union stays without 
minimum limit.<br><br>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">30.09.2019</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            USDT (Tether) on Ethereum blockchain is added to our payment options today! <br>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">24.09.2019</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            Warehouse 1 has been restocked today!<br>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">21.09.2019</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            <p>Dear customers,</p><p><br></p><p>due to the recent hassle with blackmailing towards sources and boards we decided to implement important changes for your safety.</p><p><br></p><p>From now on, our site will automatically remove your personal data from our database for orders older than 2 months.&nbsp; Our system will remove your name and address for your safety. We will keep orders with order numbers, list of products, tracking numbers and your e-mail. Without this info after sales support will be not possible, so we need to keep it.&nbsp; You can use a newly created email (not associated with your personal correspondence) for your order.</p><p><br></p><p>Also we kindly remind, that any customer can remove his order in his/her personal account at any time. However, if you do so and will need support later (if order does not arrive, e.g.) we might be not able helping you due to this. So, we advice removing any info only after you make sure you received your order completely and untouched.</p><p><br></p><p>Also, I remind that we removed limits for WU and MG. However, the currently running promotion is valid for orders paid by cryptocurrency only.</p><p><br></p><p>The last thing for today. We are starting accepting USDT (Tether) stablecoin on Ethereum blockchain (ERC-20 token). It will be available within a couple of days among other payment methods. When you use it, please make sure your USDT are on ethereum blockchain. USDT on bitcoin blockchain will be not accepted. <br></p><p><br></p><p>We wish a great weekend to all!</p><p><br></p>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">13.09.2019</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            <p><span>Great news for our customers. We removed minimum order limit for orders paid via Western Union, MoneyGram and Ria Money. No 350$ limit now. Any smallest order can by paid by any available payment option. However, our currently running promotion is valid still for orders paid by cryptocurrency only.<br></span></p><p><br></p><p>PROMO CONDITIONS</p><p></p><span>
1) Only for orders paid with cryptocurrency.<br>
2) Only for international warehouses<br>
3) Time frame: 1st of September to 1st of October 2019</span><br>
<br><b>
</b>If you order from<b> warehouse 1</b>, you will get the following free bonuses:<br>
<span><b>$50 USD bonus for orders over $ 200</b><br><b>
$100 USD bonus for orders over $300</b></span><br>
<br>
If your order is shipped from <b>warehouse 2</b>, you get the following free bonus:<br>
<span><b>$35 USD bonus for orders over $100</b><br><b>
$100 USD bonus for orders over $200</b><br><b>
$200 USD bonus for orders over $300</b></span><br><b>
</b><br>
Bonuses are picked during the ordering process and shipped together with
the main order. No promo code is needed. In case of seizures only paid 
items are reshipped. Pharmatropin is not participating in this 
promotion.<br>
<br>
<span><b>Our price list for international warehouses is here: </b><a href="https://int.basicstero.ws/products/show" target="_blank" rel=""><b>https://int.basicstero.ws/products/show</b></a></span><br>
<br>
Reminder: By default all orders are shipped from warehouse 1 from within
Europe. This warehouse provides best delivery success with fastest 
shipping time.<br>
If at least one single item in your order is out of stock from warehouse
1, your entire order automatically will be shipped from warehouse 2. 
You can not chose,what warehouse to order from. W1 is used always by 
default, unless some item you ordered is not in stock there. W2 is a 
spare warehouse. It has longer delivery time up to 15-18 days, and as it
appears now, it has about 10% higher seizure rare compared to W1 
(towards the USA). W1 delivers almost all orders without issues, if 
customer provide all delivery info right and complete. So, orders from 
W1 have higher delivery rate (again, towards the USA).  On the other 
side, W2 has discreet shipping available, which helps to deliver orders 
to those countries, where W1 was helpless. To Australia and Norway, for 
example, W2 has a better delivery rate, IF discreet shipping is chosen.<br>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">02.09.2019</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            We are announcing the next promo!<br>
Customers love this promo and we love making customers happy. So we continue our most demanded promotion without changes.<br>
<span><br>
PROMO CONDITIONS<br>
1) Only for orders paid with cryptocurrency.<br>
2) Only for international warehouses<br>
3) Time frame: 1st of September to 1st of October 2019</span><br>
<br><b>
</b>If you order from<b> warehouse 1</b>, you will get the following free bonuses:<br>
<span><b>$50 USD bonus for orders over $ 200</b><br><b>
$100 USD bonus for orders over $300</b></span><br>
<br>
If your order is shipped from <b>warehouse 2</b>, you get the following free bonus:<br>
<span><b>$35 USD bonus for orders over $100</b><br><b>
$100 USD bonus for orders over $200</b><br><b>
$200 USD bonus for orders over $300</b></span><br><b>
</b><br>
Bonuses are picked during the ordering process and shipped together with
the main order. No promo code is needed. In case of seizures only paid 
items are reshipped. Pharmatropin is not participating in this 
promotion.<br>
<br>
<span><b>Our price list for international warehouses is here: </b><a href="https://int.basicstero.ws/products/show" target="_blank" rel=""><b>https://int.basicstero.ws/products/show</b></a></span><br>
<br>
Reminder: By default all orders are shipped from warehouse 1 from within
Europe. This warehouse provides best delivery success with fastest 
shipping time.<br>
If at least one single item in your order is out of stock from warehouse
1, your entire order automatically will be shipped from warehouse 2. 
You can not chose,what warehouse to order from. W1 is used always by 
default, unless some item you ordered is not in stock there. W2 is a 
spare warehouse. It has longer delivery time up to 15-18 days, and as it
appears now, it has about 10% higher seizure rare compared to W1 
(towards the USA). W1 delivers almost all orders without issues, if 
customer provide all delivery info right and complete. So, orders from 
W1 have higher delivery rate (again, towards the USA).  On the other 
side, W2 has discreet shipping available, which helps to deliver orders 
to those countries, where W1 was helpless. To Australia and Norway, for 
example, W2 has a better delivery rate, IF discreet shipping is chosen.<br><br>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">18.08.2019</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            "Add money" section was renamed into "Submit payment info", because it more clearly explains the purpose of this section. Please don`t lose it. Former "Add money" and current "Submit payment info" is the same section.
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">22.07.2019</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            <p>Dear customers,</p><p>starting from today we have a planned revision at our european warehouse. For this we have to remove all pending not yet confirmed orders to see the real number of items shown as available by our system. We will not confirm orders in the meanwhile to keep calculations correct. Revision takes about 1 day. All pending orders will be confirmed after this. Please do not worry about your order being not confirmed immediately.<br></p>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">08.07.2019</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            Hi there,<br>we are happy to announce continuation of our crazy popular and demanded bitcoin promotion for <b>THE ENTIRE SUMMER 2019! Promotion is running till September 1st, 2019.</b><br><br>Conditions are all the same. <u><b>Please read again to avoid any misunderstanding.</b></u><br><br>Our International section has 2 shipping locations now: warehouse 1 and warehouse 2.<br><i><u>By default items are always automatically chosen from warehouse 1</u></i>. It is located within Europe and ships worldwide, incl. USA, Canada, Australia, etc. For EU customers it will be EU domestic delivery.<br>Delivery takes 8-12 days as a rule, depending on your location. <br><br><b>If you order from warehouse 1</b> and pay with cryptocurrency you get free bonuses on your choice as follows:<br><br><b>products for the value of 50 USD for orders over 200 USD</b><br><b>products for the value of 100 USD for orders over 300 USD</b><br><br>Warehouse 2 is used only as a spare warehouse and it is chosen by our system automatically ONLY if your order contains at least one item, which is out of stock in our first warehouse. Warehouse 2 is located outside of Europe! However we ship orders in such a way that packages are routed through one of the European countries. Tracking number will show delivery from one of the European countries, without mentioning the origin country it was sent from. This way takes longer and may take up to 17-21 days. Please be patient.<br><br><b>Orders placed from warehouse 2 and paid by cryptocurrency get free bonuses as follows:</b><br><br><b>products for the value of 35 USD for orders over 100 USD</b><br><b>products for the value of 100 USD for orders over 200 USD</b><br><b>products for the value of 200 USD for orders over 300 USD</b><br><br>PHARMATROPIN IS NOT PARTICIPATING IN PROMOTION!<br><br>Each item in our store has now availability indicators for both warehouses (W1 and W2). <br>In order to filter items available for some particular warehouse, please visit our "PURCHASE" page <a href="https://int.basicstero.ws/products/show" target="" rel="">https://int.basicstero.ws/products/show</a><br>Bonuses are picked up at one of the ordering steps and shipped together with the main order. No promo code is needed. <br><br>We wish the best summer in your life to everyone!<br><br>Sincerely,<br>Frank and <a target="" rel="">www.basicstero.ws</a> crew<br>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">04.06.2019</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            <p><b>PHARMACOM PROMOTION IS EXTENDED TILL 5th OF JULY 2019!</b><br></p><b>PROMO IS RUNNING FOR ORDERS PAID BY BITCON AND OTHER CRYPTO ONLY!</b><br><p>FREEBIES DEPENDS ON WAREHOUSE YOUR ORDER IS SHIPPED FROM!</p><p><b>If your order is shipped from warehouse 1</b>, you get free bonuses as follows:<br></p>products for the value of 50 USD for orders over 200 USD<br>products for the value of 100 USD for orders over 300 USD<br><p>Bonuses
are picked up at one of the ordering steps and shipped together with 
the main order. No promo code is needed. Only products in stock at 
warehouse 1 will be available for pick up. The entire order is shipped 
from warehouse 1.&nbsp; In
case of seizures only paid items are reshipped. <br></p><p><b>If your order is shipped from warehouse 2</b>, you get free bonuses as follows:<br></p>products for the value of 35 USD for orders over 100 USD<br><p>products for the value of 100 USD for orders over 200 USD <br></p><p>products for the value of 200 USD for orders over 300 USD&nbsp;</p>Bonuses
are picked up at one of the ordering steps and shipped together with 
the main order. No promo code is needed. Only products in stock at 
warehouse 2 will be available for pick up. The entire order is shipped 
from warehouse 2.&nbsp; In
case of seizures only paid items are reshipped.&nbsp; Pharmatropin is never participating in such promotions.<br>Please note, in 
both cases, in order to be eligible for bonuses mentioned above you 
should reach those limits mentioned above for your products total only, 
before shipping. 20$ shipping price is not included. If you ordered 
products from, e.g. warehouse 2 for the value of 190$ and your order 
total incl. delivery costs is 210$, you will get only 35$ worth of 
bonuses. For 100$ worth of bonuses your products total should be 200$ at
least and your entire order total incl. delivery will be 220$ in this 
case.<br>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">30.05.2019</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            <p>Dear customers,</p><p>for reasons beyond control we had to remove bank wire as payment method. It did not proof to be reliable. We also had to remove MG as payment option. The simplest and fastest way to pay is bitcoin or other cryptocurrency. Orders paid with bitcoins are always processed faster. Here is our bitcoin tutorial:</p><p><a href="https://int.basicstero.ws/index/bitcoin" target="" rel="">https://int.basicstero.ws/index/bitcoin</a></p><p>Once you learn it once you will wonder, why you have not used it before. This is an extremely user-friendly way and, which is one of the most important factors, it is safe for you, since nobody can know, why do you buy bitcoins for.</p><p><br></p><br><br>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">10.05.2019</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            Some customers report a bug on our site, where they pick up bonus items, but get an error message&nbsp; after this.&nbsp; Our team will fix it tomorrow. If you encounter this bug in the meantime, please just skip bonus items and leave a comment to your order with the list of items you prefer as a bonus. We will honor it. Our apologies for inconvenience.<br>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">02.05.2019</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            <p>Great news guys and sorry for long-read, but it is worth reading!<br></p><p>1.
In test mode we added bank wire as payment option. It is available for 
proven customers only, who has at least 2 completed orders in our store.
No exclusions!!! All asks to allow an exclusion will be ignored, don`t 
even try.<br></p><p>2. US domestic warehouse is functioning as always. 
We had huge restocking recently, almost all items are available now. 
Pharmatropin is expected to be restocked soon. Also, we lowered 
oxandrolonos price at US domestic warehouse by 30$.<br></p><p>3. Our 
EU-based warehouse has 2 shipping locations now. By the way, EU-based 
does not mean only customers from EU can order there. We ship worldwide 
from this warehouse, incl. USA, Canada, Australia, etc.<br></p><p>By 
default, all items are shipped from location 1 (we call it warehouse 1 
or W1). It is located within Europe and delivery takes 8-12 days as a 
rule, depending on your location.&nbsp; <br></p><p>Warehouse 2 is located 
outside of Europe, however we ship it a way that packages are routed 
through one of the European countries. Tracking number will show 
delivery from one of the European countries, without mentioning the 
origin country it was sent from.&nbsp; One month of trial deliveries shows 
great delivery success with less than 3% seizure rate so far. The only 
minus of this way is shipping time. It takes about 17-23 days depending 
on your location.<br></p><p>If some items in your shopping card are not 
available from the first warehouse, our system automatically assigns 
your ENTIRE order to the 2nd shipping location (warehouse 2 or W2).</p><p>Each item in our store has now availability indicators for both warehouses (W1 and W2).&nbsp;</p><p>In order to filter items available for some particular warehouse, please visit our "PURCHASE" page <a href="https://int.basicstero.ws/products/show" target="" rel="">https://int.basicstero.ws/products/show</a></p><p><b>IMPORTANT</b>:
Please remember, filtering items as per warehouse only shows, what 
items are available from warehouse 1 and what items are available from 
warehouse 2. <b>If you filter to show all items from warehouse 2 it does not mean that your order will be shipped from warehouse 2.</b></p><p><u>It works in a different way</u>.
In order to ensure fastest delivery we always ship by default from 
warehouse 1. Warehouse 2 becomes chosen automatically by our system, <b><u>ONLY WHEN</u>&nbsp;</b> one or several items in your shopping card are out of stock at warehouse 1.</p><p>E.g.&nbsp;
You ordered PHARMATEST P100 and PHARMANAN PH100. Both items are 
available at both warehouses. In this case your order is shipped from 
warehouse 1. You can not get it shipped from warehouse 2 for now. We are
going to add this opportunity later. It requires more coding to be 
completed.</p><p>Another example. You ordered PHARMATEST P100 and 
PHARMATEST E 300. TEST P100 is available from both warehouses. But TEST 
E300 is in stock only at warehouse 2. <u>It is out of stock at warehouse 1</u>. In this case your <b>ENTIRE</b> order is shipped from 
warehouse 2.</p><p>So, to say it other words. If you want your items to be shipped from warehouse 2, you need to pick up<b> at least one single items, which is out of stock</b> at warehouse 1.</p><p><i>After
you put your items into your shopping card, our system will indicate, 
what warehouse your order is going to be shipped from!</i><br></p><p>Why would you chose warehouse 2?</p><p>1. It has always almost full stock.</p><p>2. It has discreet and super discreet shipping available.</p><p>3. We launched individual promotion for it with higher bonuses!</p><p><br></p><p><b><u><i>NOW, THE MOST PLEASANT PART! PROMO CONDITIONS:</i></u></b><br></p><p><b>Promotions is running for one month from now till 3rd of June 2019!</b><br></p><b>PROMO IS RUNNING FOR ORDERS PAID BY BITCON AND OTHER CRYPTO ONLY!</b><br><p>FREEBIES DEPENDS ON WAREHOUSE YOUR ORDER IS SHIPPED FROM!</p><p><b>If your order is shipped from warehouse 1</b>, you get free bonuses as follows:<br></p>products for the value of 50 USD for orders over 200 USD<br>products for the value of 100 USD for orders over 300 USD<br><p>Bonuses
are picked up at one of the ordering steps and shipped together with 
the main order. No promo code is needed. Only products in stock at 
warehouse 1 will be available for pick up. The entire order is shipped 
from warehouse 1.&nbsp; In
case of seizures only paid items are reshipped. <br></p><p><b>If your order is shipped from warehouse 2</b>, you get free bonuses as follows:<br></p>products for the value of 35 USD for orders over 100 USD<br><p>products for the value of 100 USD for orders over 200 USD <br></p><p>products for the value of 200 USD for orders over 300 USD <br></p><p>PHARMATROPIN IS NOT PARTICIPATING IN PROMOTION!<br></p>Bonuses
are picked up at one of the ordering steps and shipped together with 
the main order. No promo code is needed. Only products in stock at 
warehouse 2 will be available for pick up. The entire order is shipped 
from warehouse 2.&nbsp; In
case of seizures only paid items are reshipped. <br><p>Please note, in 
both cases, in order to be eligible for bonuses mentioned above you 
should reach those limits mentioned above for your products total only, 
before shipping. 20$ shipping price is not included. If you ordered 
products from, e.g. warehouse 2 for the value of 190$ and your order 
total incl. delivery costs is 210$, you will get only 35$ worth of 
bonuses. For 100$ worth of bonuses your products total should be 200$ at
least and your entire order total incl. delivery will be 220$ in this 
case.<br></p><p>4. Pharmacom Labs is launching new oral products. You might have heard of it provably.<span> <br></span></p><p><span>Tesos: active agent tesofensine&nbsp; 5 mg;<br>Ligandos</span><span>: active agent ligandrol 5 mg;<br>Rados</span><span>: active agent radarine 10 mg;<br>Morenos</span><span>: active agent ibutamoren 10mg <br></span></p><p><span>Products are being tested now and will be soon available for sale at our direct store <a target="" rel="">www.basicstero.ws</a> <br></span></p><p>5.
Lately we receive complains that verification codes fail checking. It 
turned out that many customers use fake sites to check them. We warned 
customers abotu this in February yet. Please read our news <a href="http://pharmacomlabs.com/news/34" target="" rel="">http://pharmacomlabs.com/news/34</a></p><p><b>OUR ONLY COMPANY SITE IS </b><a target="" rel=""><b>WWW.PHARMACOMLABS.COM</b></a></p><p>Other sites like pharmacom-labs.com or pharmacomlaps.com <b>ARE FAKE! <br></b></p><p>There
are fake products on the market having those sites mentioned on boxes. 
Those are fakes. Be careful. We can not be liable for any issues caused 
by fake products.<br></p><p>Once again, our only company site is&nbsp; <a href="http://www.pharmacomlabs.com" target="" rel="">www.pharmacomlabs.com</a>; it has a "PURCHASE" button leading to our ONLY direct online retail store <a target="" rel="">www.basicstero.ws</a>. <br></p><p>Basicstero.ws are not resellers, this is us, Pharmacom Labs, which can be checked here</p><p><b><a href="http://pharmacomlabs.com/dealers?query=www.basicstero.ws&amp;yt0=Submit" target="" rel="">http://pharmacomlabs.com/dealers?query=www.basicstero.ws&amp;yt0=Submit</a></b><br></p><p>This was all info for now.&nbsp;</p><p>Have a great spring time everyone and take care!</p><p>Sincerely, <br></p><p>Frank and <a href="https://int.basicstero.ws/news/www.basicstero.ws" target="" rel="">www.basicstero.ws</a> crew<br></p><br><br><br><br><br><br><br><br><br>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">16.04.2019</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            We restocked our EU-based warehouse today. Many items are back in stock now.<br>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">31.03.2019</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            We have just completed full warehouse revision. To free all reserved items we we had to remove all current pending orders. We restored all paid, but not yet shipped orders. Those will be shipped on Monday. If for some reason you do not see your order in your account, please contact us, we check and restore it. Or you can just place a new order. The current list of available items is accurate and all items available on site are in stock. <br>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">30.03.2019</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            EU-based warehouse is under revision this weekend. All pending orders will be processed on Monday,<br>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">27.03.2019</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            <p>Dear customers,</p><p>due to numerous cases of unsuccessful payments via MoneyGram&nbsp; we remove this payment option for now. For the same reason we have to raise lower limits for Western Union. From now you will be able choosing Western Union as payment option for orders over 400$. Orders below 400$ can be paid by cryptocurrency only. We accept bitcoin, litecoin, ethereum, bitcoin cash, dash. Our bitcoin tutorial is available here:&nbsp;</p><p><a href="https://int.basicstero.ws/index/bitcoin" target="" rel="">https://int.basicstero.ws/index/bitcoin</a><br></p><p><br></p><p>We had to take these measures; proceeding with lower limits caused numerous cases of blocked transfers, which is a headache for both us and you.<br></p>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">17.03.2019</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            Important update regarding shipping terms from our EU-based warehouse:<br>To ensure safety of our shippers who are risking their freedom we will upload tracking numbers not earlier than 7 days after an order is actually shipped. <br>This does not mean orders will be delayed. It does not have any impact on the processing/shipping time. <br>Orders will be on the way; we will just upload tracking info only after 7 days. <br><br>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">16.03.2019</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            <p>PROMOTION EXTENDED!&nbsp; EU-BASED WAREHOUSE!</p><p>IT will be running within one month till 15th of April.</p><b>All orders are shipped from Europe! </b><br><br><b>PROMO IS RUNNING FOR ORDERS PAID BY BITCON AND OTHER CRYPTO ONLY!</b><br><br>We will provide freebies as following:<br><br>products for the value of 50 USD for orders over 200 USD<br>products for the value of 100 USD for orders over 300 USD<br><br>Freebies are chosen at one of the ordering steps and shipped together with the main order. No promo code is needed.<br><br>In
case of seizures only paid items are reshipped. <br><br>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">11.03.2019</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            Hi guys,<br>we receive many emails recently from concerned customers regarding their tracking numbers.<br>After we transferred warehouses, new EU-based warehouse has enjoyed great success. But because of all the positive interest, there were some delays. Honestly, we were not ready and did not have enough man-power. <br>As a result, we have now hired additional staff to better service the increase in business and improve processing times.<br>I uploaded many tracking numbers today. Also most of orders were dispatched, we are just expecting tracking numbers.<br>All currently placed orders should be processed without delays. <br>Please do not worry, we are doing our best. <br>An additional device to speed up processing your order is using bitcoin or other cryptocurrency as payment option. Such orders are processed within hours, whereas Western Union and MoneyGram cause a real headache lately and may require up to 3-5 days for pick-up due to independent on us reasons.<br>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">09.03.2019</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            <p>We are experiencing temporarily technical difficulties with our e-mail server.Please don`t worry, we are aware of the situation and doing our best to fix all asap.<br></p><br>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">27.02.2019</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            <p>Dear customers,</p><p>since our promotion was running for all payment options, our receivers for Western Union/MoneyGram transfers ran into limits and can not pick up payments in February at all and many just get refusals from WU for numerous transfers within short period.</p><p>Due to this we have no other choice than limiting our promotion by cryptocurrency only.&nbsp; Starting from now free promo items will be offered only for orders paid by bitcoin or altcoins (BCH, LTC, ETH,DASH).</p><p>Additionally, we have to apply new limits as following:</p><p>MoneyGram: 300$.</p><p>Western Union and Ria Money Transfers: 200$.</p><p>If your order total is below 200$ you can pay by cryptocurrency only.</p><p>We are sorry for inconvenience, however we have to take these measures, otherwise many of our customers get real headache running back and forth, canceling transfers, waiting for refunds, re-sending payments with new extra fees and so on. Our measures are only intended to make your experience with us as much flawless as possible.<br></p><p>To ensure fastest shipping of your order please use cryptocurrency. Here is our bitcoin tutorial with screenshots</p><p><a href="https://int.basicstero.ws/index/bitcoin" target="" rel="">https://int.basicstero.ws/index/bitcoin</a><br></p><p><br></p><br><br><br><br>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">14.02.2019</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            <p>PROMOTION LAUNCHED! FIRST TIME EVER WE HAVE A PROMO FOR EU-BASED WAREHOUSE!</p><p>IT will be running within one month till 14th of March.</p><b>All orders are shipped from Europe! </b><br><br><b>PROMO IS RUNNING FOR ALL PAYMENT WAYS! NOT ONLY BITCON!</b><br><br>We will provide freebies as following:<br><br>products for the value of 50 USD for orders over 200 USD<br>products for the value of 100 USD for orders over 300 USD<br><br>Freebies are chosen at one of the ordering steps and shipped together with the main order. No promo code is needed.<br><br>In case of seizures only paid items are reshipped. However, considering shipping of all orders from EU-based warehouse there should be no seizures at all.<br><br>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">11.02.2019</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            <p>Hi all,</p><p>just a brief update about warehouse change.</p><p>Currently we have 3 warehouses/sections on our site&nbsp;</p><p><a href="https://eu.basicstero.ws" target="" rel="">https://eu.basicstero.ws</a> - EU-based</p><p><a href="https://int.basicstero.ws" target="" rel="">https://int.basicstero.ws</a> - Europe-based<br></p><p><a href="https://us.basicstero.ws" target="" rel="">https://us.basicstero.ws</a> - US domestic.</p><p>Right now our programmers are working on required changes for warehouse transfer . Here is what happens next.</p><p>The address of EU-based warehouse <a href="https://eu.basicstero.ws" target="" rel="">https://eu.basicstero.ws</a> will be removed at all. EU-based warehouse becomes our International Premium warehouse. It will be moved to the address of the current Europe-based warehouse&nbsp; <a href="https://int.basicstero.ws" target="" rel="">https://int.basicstero.ws</a>&nbsp; and it will open by default once you enter <a target="" rel="">www.basicstero.ws</a> in your browser. Our programmers are working on transferring all discount from Europe-based international warehouse to the new EU-based warehouse. It takes some time. We will do our best to make this transfer unnoticeable for you. International balances/discounts will be moved to the new EU-based International Premium warehouse. Please give us a day to complete this. If someone won`t get his discount, he/she will just need to contact us and we transfer it manually. Please, do not check it right now, we will need a day to complete all.</p><p>Next, since our EU-based warehouse becomes International Premium default warehouse and we move it to the address <a href="https://int.basicstero.ws" target="" rel="">https://int.basicstero.ws</a>.<p>We will keep a link to it on site in the left-sided menu with warehouse selection. We will reset availability of all products at this warehouse to zero. You will not be able ordering from it from now. We keep it available for only about 1-2 weeks . This is the transitional step required&nbsp; to allow customers, who placed orders recently, to check their orders and submit payment details. After 1-2 weeks this warehouse will be removed completely.&nbsp;</p><p>In this way, after all changes are completed, only 2 warehouses will be available on our site:</p><p><a href="https://int.basicstero.ws" target="" rel="">https://int.basicstero.ws</a> -<b> International Premium warehouse</b> - the default one. <b>All orders placed at this warehouse will be shipped from Europe to any country worldwide</b>! Customers from the USA can safely place orders here; we have never had any seizures in the USA yet. So, we can proudly manifest, this warehouse has <b>ZERO SEIZURE RATE!</b></p><p>Customers from Europe can also place orders in this warehouse. For EU-based customers this will be old secure EU-domestic warehouse with delivery from within Europe. There is only one beautiful change. Old EU prices were lowered! You get All items at lower prices of our old Europe-based account, but with really quick and secure premium delivery!<br></p><p><a href="https://us.basicstero.ws" target="" rel="">https://us.basicstero.ws</a> - US domestic warehouse. Nothing changes here. This is the most secure and fast warehouse for US customers, who need fast and absolutely secured guaranteed delivery with no seizures. Orders placed at this warehouse are shipped from within the USA and do not get through customs. You are absolutely safe when ordering from this warehouse.<br></p><p>Regarding seizures. If your order got seized, contact us, we reship it 
discreetly from our Chinese warehouse. Despite we are closing the 
international Chinese warehouse on site, the physical warehouse keeps 
working. We will be able to reship your order any time, this closure 
will not affect you.</p><p>This is all info for now.&nbsp; We are working hard to complete all changes as fast as possible.<br></p><p><br></p><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">05.02.2019</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            <p>Dear customers, <br></p><p>we are going to have major changes in our warehouse system. </p>We got major restocking of our  
EU-based warehouse and decided not to ruin our reputation with  
increasing number of seizures.<br>
Current International section will be active on our site for <b>next 3 days  only.</b> In 3 days we remove international&nbsp; section. EU section  will be renamed into International premium.<br>
In result our site will have only 2 warehouses: International premium  
worldwide (EU-based, shipping from Europe to any country incl. USA,  
Canada, Australia) and US Domestic for US-based customers.<br>
<br>
Prices on our EU warehouse will be lowered compared to the current  
ones!!! <br>
<br>
So, international warehouse section will be active only next 3 days and 
then we remove it. We are still running the 300/200 bitcoin promo. If  
you want to take an advantage, you have 3 days to place an order and 5  
days after this to pay.<br>
<br><p>Best regards,</p><p>Basicstero.ws crew<br></p><br><br>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">04.02.2019</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            <p>Today we had major restocking of our warehouse. Almost all items are in stock.</p><p>All orders placed at this warehouse are shipped<b> from Europe to any country worldwide!</b></p><p>Fast and safe delivery with <b>zero</b> seizures!&nbsp; This warehouse is the best choice for customers from regions with tough customs, especially from the USA! <br></p>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">04.01.2019</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            Due to the New Year holidays packages from Europe can be shipped 
starting from 9th of January only. Sorry about late update. Customers 
who completed orders recently (roughly from the 30th of December till 
now) will get each 50EUR store credit for delay. Our apologies for 
inconvenience.<br>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">01.12.2018</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            <p>Hi there,</p><p>we have some news for our customers.</p><p>All international orders are shipped from Europe. US domestic warehouse stays working as usually, no worries. &nbsp;</p><p>We
are doing this to provide the best delivery success rate without 
seizures and faster delivery speed. However, this also means that our 
generous promotions like "buy for $300 - get $200 of freebies" <b>will no longer be available</b>.
We probably will have some promotions, although those will be much more
modest. We are not&nbsp; sure yet, when exactly we start shipping from the 
new premium warehouse. We think it would be right to inform all our 
customers about this in advance.</p>In light of the said above <b>we are launching our Christmas and at the same time kind of (probably) last generous 300/200 promotion right now.</b><br>For the time being we are running it <b>till the 15th of December</b>, however it may be extended till the end of the year depending on when our EU warehosue is ready to overtake all orders volume.<br><br>The new promotion is already running in our international warehouse <a href="https://int.basicstero.ws" target="" rel="">https://int.basicstero.ws</a> . Conditions are the following. Pay with bitcoin or other cryptocurrency and <b>freebies</b> are as follows:<br><br><b>$35 worth of products for orders over $100;</b><br><b>$90 worth of products for orders over $200;</b><br><b>$200 worth of products for orders over $300!</b><br><br>Detailed instructions are available on our site during the ordering process, just sign in and start ordering!<br>For those who are not familiar with bitcoin yet, we have a detailed how-to with screenshots:<br><br><a href="https://int.basicstero.ws/index/bitcoin" target="" rel="">https://int.basicstero.ws/index/bitcoin</a><br><br>Please NOTE - promotion terms and conditions:<br>*If seized, only the main paid items are reshipped but NOT the free bonus items.<br>*HGH does not participate as a bonus option in this promotion.<br>*Unfortunately,
we cannot afford to provide both the cart discounts and free bonus 
items together; therefore, you have two separate option during the 
promotion:<br><br>&nbsp;&nbsp; You can pick up free bonus items from this list 
within our promo. In this case you get free promo items chosen, but no 
discounts will be applied to your order.<br>&nbsp;&nbsp;&nbsp; You can choose to retain
the cart discounts (if you have any), but without promo items; In this 
case please don't choose any free bonus items and just click on "Skip" 
during the promotion options step of checkout. You won't get free bonus 
items, but if you have any discounts in your cart, your order total will
be discounted (for example, 10% bitcoin discount will be applied only 
if you don`t choose free bonus items). All discounts may be summed up to
a max limit of 40% off. More info about how to get the highest discount
you can find in our discounts section.<br><br><b>Take&nbsp; advantage of
our last generous promotions and stock up on gear from the most proven 
and tested lab available on the free market !</b><br><br>P.s. just 
recently we received many verifiable reports from independent certified 
lab Simec. All products pass. You can find all results on our site and 
on all boards we are presented on, e.g. here <a href="http://www.anabolicsteroidforums.com/showthread.php/50911-Chromotography-test-results-of-our-products-%28purity-quantity%29?p=1454869&amp;viewfull=1#post1454869" target="" rel="">http://www.anabolicsteroidforums.com/showthread.php/50911-Chromotography-test-results-of-our-products-%28purity-quantity%29?p=1454869&amp;viewfull=1#post1454869</a><br><br>sincerely,<br><a href="https://int.basicstero.ws/news/www.basicstero.ws" target="" rel="">www.basicstero.ws</a><br><br><br><br>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">05.09.2018</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            EUROPEAN WAREHOUSE IS OPEN! WORLDWIDE SHIPPING! PROMO IN INTERNATIONAL WAREHOUSE EXTENDED!<br><br>HI,<br><br>we have great news for you today. We fully restocked our EU domestic warehouse and its already working! First batch of orders will be shipped already tomorrow, be the first! <br><a href="https://eu.basicstero.ws" target="" rel="">https://eu.basicstero.ws</a><br><br>We ship from within Europe, if you order here However, this time we provide delivery not only within EU, but to other countries outside as well, to the USA, especially!&nbsp; Pleasant prices with minimum seizure risk and fast delivery! We did our best to organize it for you!<br><br>Another piece of news we are glad to share with you, is that we are extending our bitcoin promotion for International warehouse <a href="https://int.basicstero.ws" target="" rel="">https://int.basicstero.ws</a>.<br>It will be running till 1st of October. Conditions did not change:<br><br>Pay with bitcoin or other cryptocurrency and freebies as follows:<br><br>$35 worth of products for orders over $100;<br>$90 worth of products for for orders over $200;<br>$200 worth of products for or orders over $300;<br><br>If seized, only main paid items are reshipped.<br><br>Detailed instructions are available on site during the ordering process, just sign in and start ordering! <br>For those who is not familiar with bitcoin yet, we have a detailed howto with screenshots: <a href="https://int.basicstero.ws/index/bitcoin" target="" rel="">https://int.basicstero.ws/index/bitcoin</a><br><br>It`s right the time to get ready for the bulking season!<br><br>with best wishes,<br>basicstero.ws crew<br><br><br>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">28.09.2017</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            Dear customers,<br>our EU domestic warehouse is temporarily closed starting from now for an undefined period of time until further notification.&nbsp; We got info about local inspections at our area and can`t risk our and your safety for a while.<br>International and US domestic warehouses work in normal mode.<br>We will contact each EU customer regarding his/her order individually. Don`t worry, all ok.<br>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">23.09.2017</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            MoneyGram as payment option is temporarily available only for orders over 300$! Please use RIA transfers or bitcoin!<br><br>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">07.09.2017</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            Hi there,<br><br>our EU domestic warehouse is already open. Products are shipped from within Europe with minimum risks for EU-customers. <br>5% discount&nbsp; and faster delivery for orders paid with bitcoins! Check our tutorial here:<br><a href="https://eu.basicstero.ws/index/bitcoin" target="" rel="">https://eu.basicstero.ws/index/bitcoin</a><br><br>with best wishes,<br>Pharmacom Labs<br><a target="" rel="">www.basicstero.ws</a><br>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">04.09.2017</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            OUR EU DOMESTIC WAREhHOUSE IS BACK! WE ACCEPT ORDERS AND START SHIPPINGS FROM TODAY!<br>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">05.08.2017</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            Our EU domestic warehouse is on vocation till the 5th of September 2017! All orders will be shipped after 5th of September!<br>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">24.07.2017</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            Dear customers,<br><br>our EU domestic warehouse goes to vocation from 4th of August till 5th of September 2017!<br>Last orders in August will be shipped on 4th! Payments should be approved by that time! All orders placed after 4th of August will be shipped after 5th of September!<br>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">17.07.2017</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            <p>WARNING!!!</p><p>Dear customers,</p><p>Due to the possible ongoing bitcoin split we stop accepting bitcoin payments on 28th of July! Please do not send your bitcoins after 28th of July. We will not accept them, because those payments even if confirmed can just disappear from the wallet due to the coming bitcoin protocol update. Most of exchanges will probably also stop bitcoin exchange operations for the period from 28th of July until additional notification from the bitcoin devs team. You can read more details here <a href="https://bitcoin.org/en/alert/2017-07-12-potential-split" target="" rel="">https://bitcoin.org/en/alert/2017-07-12-potential-split</a></p><p>So, starting from 28th of July you will not be able to chose bitcoin as payment option in our store. All orders placed before 28th should be paid on 28th of July latest (if you chose bitcoin as payment option). This does not touch customers who chose Western Union and MoneyGram as payment option.</p><p>best regards,</p><p>Pharmacom Labs team</p><p><br></p>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">26.06.2017</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            Dear customers,<br><br>be aware that our EU domestic warehouse will have
a pause with shipping from  4th of August till 8th of September. After 
8th of September shippings continue as usual.<br><br>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">08.06.2017</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            <p>Dear customers,</p>

<p>our domestic warehouse with shipping from within Europe is working again!<br></p>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">29.06.2016</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            Our new address is <a href="http://www.basicstero.ws" target="" rel="">www.basicstero.ws</a><br><br><br>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">23.05.2016</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            Dear customers,<br><br>we temporarily cancel reshipping of seized orders to Scandinavian countries: Finland, Sweden, Norway, Denmark. If you are from these countries and your order is seized, it will not be reshipped for free for the second time until our next announcement. <br>Sorry for inconvenience<br>. <br>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">07.04.2016</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            Dear customers, it came to our knowledge, that our products were 
counterfeited! 
Ill-wishers forged thousands units of our orals and Human Growth 
Hormone. Please use only official distibutors. We are direct store of&nbsp; 
Pharmacom Lab, we manufacture our products; you have no risks if you 
place your orders in our store. More details you can find in our 
official page:<br><a href="http://pharmacomlabs.com/news/16" target="" rel="">http://pharmacomlabs.com/news/16</a><br><br><br>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">01.04.2016</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            Our EU domestic&nbsp; warehouse is restocked!<br>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">21.02.2016</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            Promo started. Use the code&nbsp;PHRMCMFRVR to get 20% off.
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">17.02.2016</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            20% OFF FOR ALL ITEMS IN OUR STORE! <br><br>Our promo starts on 22nd of February and will be valid until 1st of March. Use the discound code " "PHRMCMFRVR" to get a discount. <br><br>ADDITIONALY TO THIS YOU CAN GET EXTRA 5% DISCOUNT IF YOU PAY WITH BITCOINS!<br><br>DISCOUNTED ORDERS ARE NOT RESHIPPED IN CASE OF A SEIZURE! IF YOU WANT YOUR ORDER TO BE RESHIPPED FREE OF CHARGE IN CASE OF ANY POSSIBLE SEIZURE JUST DO NOT USE THE DISCOUNT CODE! <br><br>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">12.02.2016</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            Visit us on <a rel="" target="">eroids.com"&gt;https://www.eroids.com/reviews/basicstero.net"&gt;eroids.com</a><br>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">05.01.2016</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            We extended our Christmas promo till the 1st of February! Conditions are the same.<br><br>Enter promo code "CHRISTMAS" and get 20% off for all products!<br><br>Orders within this promo are not reshipped in case of losses, seizures, etc! <br><br>Don`t forget, that we offer an extra 5% discount if you pay with bitcoins!<br><br>Here is our bitcoin tutorial: <a rel="" target="" href="http://int.basicstero.net/index/bitcoin">http://int.basicstero.net/index/bitcoin</a><br><br>If you pay through bitcoin: <br>1. you get 5% extra discount<br>2. your order will be confirmed much faster as compared against Western Union or Money gram, thus, you receive it 1-2 days earlier!<br><br><br>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">20.12.2015</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            CHRISTMAS PROMO!<br>Valid: 20th of December 2015 - 5th of January 2016!<br><br>Enter promo code "CHRISTMAS" and get 20% off for all products!<br><br>Orders within this promo are not reshipped in case of losses, seizures, etc! <br><br>
                        </div>
                    </div>
                </div>
                                <div class="box13-in">
                    <div class="box13-in-item1">
                        <div class="data3">24.11.2015</div>
                    </div>
                    <div class="box13-in-item2">
                        <div class="text2">
                            BLACK FRIDAY SALE 50% OFF!<br><br>Dear customers on 27th of 
November we have huge one-day sale! Discounts for all products in our 
store 50%! <br>To get a sale place your order on 27th of November and enter discount code BLACKFRIDAY.<br>Orders
with 50% discounts are shipped only once! If your order is seized we 
won`t reship it free of charge as we usually do! If you want to get your
order with a reshipping guarantee, just do not use the discount code.<br><br><br>
                        </div>
                    </div>
                </div>
                        </div>
    </div>
</div>
@endsection