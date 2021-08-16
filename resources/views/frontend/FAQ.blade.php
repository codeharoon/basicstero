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
        <div class="title6">Вопросы и ответы</div>
        <!--div class="attention">
            Важно! Заказы принимаем только через сайт, и если в скайпе вам предлагают сделать заказ — это обман!
        </div-->
        <div class="box14">
            <div class="box14-in">
                                    <div class="box14-in-item">
                    <div class="nfo2-title title14">Why shall I choose your store?</div>
                    <div class="nfo2-text">
                        <div class="text3">
                            <p>
                                We are DIRECT store of Pharmacom Labs, we are not resellers. We are manufacturers, we are PHARMACOM LABS! You will find all advantages of ordering in our store&nbsp;<a href="http://int.basicstero.net/index/single_brand_store" target="" rel="">here</a><span>.&nbsp; Also You can check our status at <a href="http://pharmacomlabs.com/dealers" target="_blank" rel="nofollow">the official Pharmacom Labs page</a>.&nbsp;Just enter there <a href="http://www.basicstero.ws" target="" rel="">www.basicstero.ws</a> to see the result.</span><br><br>
                            </p>
                        </div>
                    </div>
                </div>
                                    <div class="box14-in-item">
                    <div class="nfo2-title title14">Which payment options are available in your store?</div>
                    <div class="nfo2-text">
                        <div class="text3">
                            <p>
                                <p>The most preferable and fastest payment way is cryptocurrency.&nbsp; We accept bitcoin (BTC), litecoin (LTC), bitcoin cash (BCH), ethereum (ETH), dash (DASH).&nbsp;</p><p>If you pay with cryptoccurency, your orders are confirmed within a few hours, which ensures fastest processing speed. <br></p><p>On top of this you get extra 5% discount if you pay with cryptocurrency. It is as simple as Paypal - here is our tutorial for bitcoin: <a href="https://int.basicstero.ws/index/bitcoin" target="" rel="">https://int.basicstero.ws/index/bitcoin</a><br></p><p>PayPal is currently not available. All questions regarding PayPal will be ignored. About other possible payment options please contact us.<br></p><br><br><br>
                            </p>
                        </div>
                    </div>
                </div>
                                    <div class="box14-in-item">
                    <div class="nfo2-title title14">Where do you ship from?</div>
                    <div class="nfo2-text">
                        <div class="text3">
                            <p>
                                <p>Our only&nbsp; direct store is&nbsp; <a target="" rel="">www.basicstero.ws</a><br>
There are&nbsp; 2 sections on site to chose (in the left-sided menu):<br>
<br>
1) <a href="https://int.basicstero.ws/products/show" target="" rel="">https://int.basicstero.ws/products/show</a><br>
<br>&nbsp; This section offers products from our Europe-based warehouse. It has 2 shipping locations, which 
we call warehouse 1 (W1) and warehouse 2 (W2).&nbsp; By default we ship 
worldwide from warehouse1 . So, for 
EU-based customers it will be domestic delivery. For other countries 
international delivery.&nbsp; It takes 9-12 days as a rule.<br>
<br>
The second shipping location (or W2)&nbsp; is used as a spare 
warehouse only in case if some items are missing at warehouse 1. You will receive packages from one of European countries. To reduce possible 
seizure risks we do not disclose names of countries we ship from. Shipping from W2 takes 
up to 17-21 days. <br>
<br>
2) <a href="https://us.basicstero.ws/products/show" target="" rel="">https://us.basicstero.ws/products/show</a><br>
<br>
This is our US domestic warehouse : delivery from within the USA to any US state.<br>
First class mail shipping (ETA 4-8 days) and Express overnight shipping (for orders over 800$) are available. <br>
Independent on warehouse, we reship your order one time more if it is 
lost, seized, comes damaged, etc. However, in such case as per 
conditions you should be ready to provide unpacking video (for damaged 
or missing items). Without it complains are not accepted. <br>
Seizures are seen as per tracking number, so no evidence is needed as a rule.</p>
                            </p>
                        </div>
                    </div>
                </div>
                                    <div class="box14-in-item">
                    <div class="nfo2-title title14">What discounts do you provide?</div>
                    <div class="nfo2-text">
                        <div class="text3">
                            <p>
                                <p>Info about all currently running and permanent discounts can be found in the&nbsp;<a rel="" target="" href="http://int.basicstero.net/discounts/">DISCOUNTS</a>&nbsp;section of our store.</p><br>
                            </p>
                        </div>
                    </div>
                </div>
                                    <div class="box14-in-item">
                    <div class="nfo2-title title14">How can I order?</div>
                    <div class="nfo2-text">
                        <div class="text3">
                            <p>
                                <span>Orders may only be processed through our shop <a rel="" target="">www.basicstero.net</a> via site checkout. If someone is trying to persuade you to place an order via Skype, E-mail, or any other means of communication, they are attempting to scam you. Be alert!</span><br>
                            </p>
                        </div>
                    </div>
                </div>
                                    <div class="box14-in-item">
                    <div class="nfo2-title title14">Is payment through PayPal available?</div>
                    <div class="nfo2-text">
                        <div class="text3">
                            <p>
                                No, now we currently do not accept PayPal. All questions regarding Paypal will be ignored.<br>
                            </p>
                        </div>
                    </div>
                </div>
                                    <div class="box14-in-item">
                    <div class="nfo2-title title14">How much time does delivery take?</div>
                    <div class="nfo2-text">
                        <div class="text3">
                            <p>
                                <p>For European-based warehouses:<br></p><p>Warehouse 1:&nbsp; 6 - 12days as a rule<br></p><p>Warehouse 2:&nbsp; up to 17-21 days </p><p>For the USA Domestic warehouse: 2-6 days<br></p><p>Differences in shipping time are not dependent on us, but are due to different factors such as your location, postal service efficiency, custom clearance, etc. Because of these reasons delivery can take longer in particular cases. Please notice, the given times do not include time needed to check your payment. If you pay not by cryptocurrency, it may take a few extra days to pick up your payment. <br></p><br><br><br><br><br><br>
                            </p>
                        </div>
                    </div>
                </div>
                                    <div class="box14-in-item">
                    <div class="nfo2-title title14">Do you accept orders per e-mail?</div>
                    <div class="nfo2-text">
                        <div class="text3">
                            <p>
                                No, we do not accept orders per e-mail. Only via site checkout.<br>
                            </p>
                        </div>
                    </div>
                </div>
                                    <div class="box14-in-item">
                    <div class="nfo2-title title14">How long does it take to check payment?How can I confirm my payment?</div>
                    <div class="nfo2-text">
                        <div class="text3">
                            <p>
                                <p>Once you make a payment according to the instructions provided please submit the necessary payment information under your account into Dashboard - Add money section. This information will be processed as fast as possible.</p><p>Please note if you pay via money in minutes services, it may take up to several days to check your payment, that is why we always advice using cryptocurrency, which is confirmed much faster.<br></p><br>
                            </p>
                        </div>
                    </div>
                </div>
                                    <div class="box14-in-item">
                    <div class="nfo2-title title14">How much does shipping cost?</div>
                    <div class="nfo2-text">
                        <div class="text3">
                            <p>
                                For the europe-based warehouse: 20$ flat rate to any country regardless of its location<br>For the USA Domestic section: 20$ flat rate for standard shipping and 50$ flat rate for express overnight shipping<br><br>
                            </p>
                        </div>
                    </div>
                </div>
                                    <div class="box14-in-item">
                    <div class="nfo2-title title14">Is it safe to order through the site? I am afraid someone could steal my personal data!</div>
                    <div class="nfo2-text">
                        <div class="text3">
                            <p>
                                Do not worry about it. Our site is located at our own secure server. We have own team of programmers and software security specialists. A chance of breaking our site is just negligible. Also after you placed your order and it was proceeded you can delete it from the site in your personal account, thus, your personal info will not be available from the outside.<br>
                            </p>
                        </div>
                    </div>
                </div>
                                    <div class="box14-in-item">
                    <div class="nfo2-title title14">When do I get tracking number?</div>
                    <div class="nfo2-text">
                        <div class="text3">
                            <p>
                                <p>For safety reasons we provide tracking numbers ONLY 1 week&nbsp; after your order is shipped. <br></p><p>PLEASE DO NOT ASK FOR TRACKING NUMBERS EARLIER THAN 7 DAYS AFTER YOUR ORDER HAS BEEN PAID. IN ANY CASE WE WILL NOT BE ABLE TO PROVIDE YOU TRACKING NUMBER BEFORE!</p><p>Actually there is no need to ask for tracking numbers. We will send your tracking info both to your account and to your email when we are ready.<br>The fact that you don`t have tracking number does not delay delivery itself. Please be patient. This is yours and our safety!<br><br></p><br>
                            </p>
                        </div>
                    </div>
                </div>
                                    <div class="box14-in-item">
                    <div class="nfo2-title title14">A while ago I signed up in the international section, but now I need to place an order in the domestic section. Shall I sign up again?</div>
                    <div class="nfo2-text">
                        <div class="text3">
                            <p>
                                Yes. Our warehouses have different databases, which are independent on each other. If you have already signed up in our international section, our database in the US domestic section can not see it, thus, your credentials for the international section won`t be valid. In fact we have 2 different stores at one site: International (EU-based) and US domestic.<br>
                            </p>
                        </div>
                    </div>
                </div>
                                    <div class="box14-in-item">
                    <div class="nfo2-title title14">I placed an order but I forgot to submit payment info into Add money section. Will you ship my order?</div>
                    <div class="nfo2-text">
                        <div class="text3">
                            <p>
                                <p>IMPORTANT: If you haven’t submitted payment info we will not know, that you paid. Your order will be reserved only within 5 days and after this our store deletes it.&nbsp;<br>SO, IF YOU DON`T SUBMIT PAYMENT INFO TO THE ADD MONEY SECTION WE WILL NOT KNOW THAT YOU PAID! THIS IS VERY IMPORTANT! PLEASE DON`T FORGET ABOUT THIS STEP!</p>Also please make sure that you submit payment info in the same section of our store, where you have placed your order. If you placed your order in the international section and submitted payment info in the US domestic section, we will transfer funds to your US domestic account.<p>If for some reason you cannot enter payment info or you submitted it in the wrong section, please contact us!</p><br>
                            </p>
                        </div>
                    </div>
                </div>
                                    <div class="box14-in-item">
                    <div class="nfo2-title title14">My order is seized/lost/damaged! Will you reship it?</div>
                    <div class="nfo2-text">
                        <div class="text3">
                            <p>
                                <p>Yes, we reship your order once again, independent on the warehouse you chose. There should be sufficient reason/evidence for reship. If it is a loss or a seizure, we see it as per tracking number as a rule. However, if your order is lost, but tracking number says it is delivered, you should provide some evidence of not delivered order (loss claim from postal service, etc.).</p><p>If you ask for reship of your order, because it came damaged, you should have unpacking video of your package, otherwise complains are not accepted.&nbsp; On the video should be clearly seen the from side of the package, your name, address.&nbsp; <br></p><br><br><br><br>
                            </p>
                        </div>
                    </div>
                </div>
                                    <div class="box14-in-item">
                    <div class="nfo2-title title14">Do you deliver to the USA from your international section?</div>
                    <div class="nfo2-text">
                        <div class="text3">
                            <p>
                                Sure, we do. <br>International means that your order will be shipped from our warehouse in Europe. It takes longer (10-21 days), but prices are lower compared to US domestic warehouse,. If you need fast delivery you need to choose the US domestic section. In this case your order will be shipped from within the USA. Delivery time 2-6 days.<br>
                            </p>
                        </div>
                    </div>
                </div>
                                    <div class="box14-in-item">
                    <div class="nfo2-title title14">I paid through Western Union to the name received immediately after i placed my order. Later I checked the payment data and the name changed. Is it ok?</div>
                    <div class="nfo2-text">
                        <div class="text3">
                            <p>
                                Yes, this is ok. We change names all the time to avoid blocking of our receivers by Western Union. Your payment will be picked up and you don`t need to resend your payment to the new name.<br>
                            </p>
                        </div>
                    </div>
                </div>
                                    <div class="box14-in-item">
                    <div class="nfo2-title title14">I received my order, but when I opened the package I found that some vials are damaged /missing. What shall I do?</div>
                    <div class="nfo2-text">
                        <div class="text3">
                            <p>
                                <p>When you have received your package, you are obligated (according to ordering conditions, I.11) to film the unpacking process in the event of any issue or dispute. Without this we shall not be liable for any complaints (missing or damaged items, etc.).&nbsp; </p><p>On the video should be clearly seen the front side of the 
package, your name, address.&nbsp; <br></p><p></p><p>If you have proofs we reship damaged or missing items for free.</p><br>
                            </p>
                        </div>
                    </div>
                </div>
                                    <div class="box14-in-item">
                    <div class="nfo2-title title14">Do you have a minimum order?</div>
                    <div class="nfo2-text">
                        <div class="text3">
                            <p>
                                <p>We do not have a minimum order. HOWEVER: orders below $350 can be paid by cryptocurrency only. <br></p>
                            </p>
                        </div>
                    </div>
                </div>
                                    <div class="box14-in-item">
                    <div class="nfo2-title title14">My order is seized. Can you refund my money?</div>
                    <div class="nfo2-text">
                        <div class="text3">
                            <p>
                                Acording our ordering conditions (I.5) we do not refund funds in the following cases:&nbsp;<p>a) you paid for your order, but changed your mind</p><p>b) your order has been seized or lost, damaged, etc.<br></p>In this case we will reship it for the second time (but only once!) and in a discreet way to reduce any possible seizure risks. <br>
                            </p>
                        </div>
                    </div>
                </div>
                                    <div class="box14-in-item">
                    <div class="nfo2-title title14">I made a mistake in the delivery address! Will I get my order?</div>
                    <div class="nfo2-text">
                        <div class="text3">
                            <p>
                                Please double check the information you submit to us. According to ordering conditions (I.13) we shall not be liable for any non-delivery due to inaccurate information. We can assure you that we accurately forward all necessary information in its entirety to the postal service.<br>
                            </p>
                        </div>
                    </div>
                </div>
                                    <div class="box14-in-item">
                    <div class="nfo2-title title14">Which e-mail shall I leave in delivery details?</div>
                    <div class="nfo2-text">
                        <div class="text3">
                            <p>
                                First of all we do not specify your e-mail address at package. Don`t worry.<br>We need it only to send you order details and tracking info.<br>Generally you can chose any e-mail address that you have access to. Certain email providers like hushmail, MSN, or Hotmail may mark our e-mails as spam, so always be sure to check your spam folders if a confirmation email or reply is not received.<br>
                            </p>
                        </div>
                    </div>
                </div>
                                    <div class="box14-in-item">
                    <div class="nfo2-title title14">My international order is sezied. May I get store credit in the domestic section rather than a reship?</div>
                    <div class="nfo2-text">
                        <div class="text3">
                            <p>
                                No. We pay to our domestic shippers for each item shipped.&nbsp; If your international order is seized and we would reship it from the domestic warehouse we would not only lose products, but also would have to pay to our shippers and cover shipping costs from our pocket. Sorry, we do not do this. Reshipping always occurs from the warehouse, where the original order was placed from.<br>
                            </p>
                        </div>
                    </div>
                </div>
                                    <div class="box14-in-item">
                    <div class="nfo2-title title14">What does my order status mean?</div>
                    <div class="nfo2-text">
                        <div class="text3">
                            <p>
                                ORDER STATUSES IN OUR STORE<br>1. WAITING FOR PAYMENT is assigned immediately after you place an order.&nbsp;<br>2. PAYMENT IS BEING CHECKED is assigned after you submit payment information into your account.&nbsp;<br>3. ORDER PROCESSING is assigned after we pick up the payment and have begun its preparation for shipping. Preparation time for international orders can take at most up to 3 days..&nbsp;<br>4. ORDER SHIPPED is assigned as soon as your package is handed over to the shipping company. In a while after that we will give you a tracking number sent to both your email and in your order details here on the site.<br>
                            </p>
                        </div>
                    </div>
                </div>
                                    <div class="box14-in-item">
                    <div class="nfo2-title title14">Western Union blocked my payment. What shall I do?</div>
                    <div class="nfo2-text">
                        <div class="text3">
                            <p>
                                <span>Unfortunately such things happen. You can take your money back and resend payment after negotiation with us.<br>IMPORTANT: Using Western Union and other similar services as payment way you shall use your real name and ID information to be sure you will be able to withdraw your funds in case of any issues. Otherwise we take no responsibility for loss of your funds.</span><br>
                            </p>
                        </div>
                    </div>
                </div>
                                </div>
        </div>

    </div>

</div>

@endsection