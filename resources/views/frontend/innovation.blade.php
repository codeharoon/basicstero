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
        <div class="title6">Innovations</div>
        <div class="box13">
            <div class="box13-in">
                <div class="box13-in-item2">
                    <div class="text2">
                                
    <h3>INNOVATION TECHNOLOGIES IN OUR MANUFACTURING PRACTICE</h3>

    <p>Dear customers! In order to provide you with best quality on the market, we are dedicated to keeping up with all new innovations of raw material quality assurance, drug synthesis, and the final packaging of our products. For almost ten years our company has developed from scratch to the biggest pharmaceutical company with the cutting-edge equipment for producing oral and injectable drugs. The main thrust of the company are hormonal and therapeutic agents. Starting with an initial capital of 20,000 dollars and the entry-level four drugs for almost ten years we have increased the number to over forty. We developed health safe technologies of producing high quality drugs with the purity of at least 98,5%.</p>
     <h3>PHARMACOM LABS - INTRODUCTION</h3>
    <p><video style="width:100%;" controls="true" preload="metadata" name="media" poster="http://pharmacomlabs.com/video/PharmacomLabs_preview.png">
        <source src="http://pharmacomlabs.com/video/PharmacomLabs.mp4" type="video/mp4">
        </video></p>

    <p>Let us briefly describe several advantages you get by choosing the Pharmacom Labs products!</p>
    <p>We are a big pharmaceutical company providing pharmaceutical grade quality! Our products are manufactured in a cleanroom at several fully automated cutting-edge production lines with full quality control! You can see our production process with your own eyes and ensure yourself in the cutting-edge technologies we use in our manufacturing practice!</p>

<h3>NEWEST PRODUCTION VIDEO DIRECTLY FROM OUR FACILITY</h3>
    <p><video style="width:100%;" controls="true" preload="metadata" name="media" poster="http://pharmacomlabs.com/video/Production_latest.png"><source src="http://pharmacomlabs.com/video/Production_latest.mp4" type="video/mp4"></video></p>
    
    <h3>PHARMACOM LABS - VIALS FILLING</h3>
    <p><video style="width:100%;" controls="true" preload="metadata" name="media" poster="http://pharmacomlabs.com/video/Vials_preview.png"><source src="http://pharmacomlabs.com/video/Vials.mp4" type="video/mp4"></video></p>
    <h3>PHARMACOM LABS - PILLS PRODUCTION</h3>
    <p><video style="width:100%;" controls="true" preload="metadata" name="media" poster="http://pharmacomlabs.com/video/Vials_preview.png"><source src="http://pharmacomlabs.com/video/Pills.mp4" type="video/mp4"></video></p>
    <h3>PHARMACOM LABS - VIALS STERILIZATION AND AMPULES PRODUCTION</h3>
    <p><video style="width:100%;" controls="true" preload="metadata" name="media" poster="http://pharmacomlabs.com/video/black_preview.png"><source src="http://pharmacomlabs.com/video/Washing2.mp4" type="video/mp4"></video></p>
    <h3>PHARMACOM LABS - AMPULES PRODUCTION</h3>
    <p><video style="width:100%;" controls="true" preload="metadata" name="media" poster="http://pharmacomlabs.com/video/black_preview.png"><source src="http://pharmacomlabs.com/video/Fire.mp4" type="video/mp4"></video></p>
    
    <h3>PHARMACOM LABS - VIALS WASHING</h3>
    <p><video style="width:100%;" controls="true" preload="metadata" name="media" poster="http://pharmacomlabs.com/video/black_preview.png"><source src="http://pharmacomlabs.com/video/Washing.mp4" type="video/mp4"></video></p>
    
    <h3>PHARMACOM LABS - CONTINUOUS INTERNAL QUALITY MONITORING</h3>
    <p>We possess our own testing lab and chromatography equipment, which allow us to conduct consistent analysis and monitoring of all raw powders as well as final products. Please check on video a part of the the testing process:</p>
    <p><video style="width:100%;" controls="true" preload="metadata" name="media" poster="http://pharmacomlabs.com/video/Testing_preview.png"><source src="http://pharmacomlabs.com/video/Testing.mp4" type="video/mp4"></video></p>

    <h3>WHAT SHALL YOU NOW ABOUT OUR PRODUCTS?</h3>
    <p>1. We check filling settings of our production lines before we start to produce each new batch. Each ml of our oils as well as each pill contains the manifested quantity of the raw material. You can check our products in a lab and you will assure yourself in this.</p>

    <p>2. We add always a bit more than 10 ml oil in each vial. We consider the small oil amount that stays in the needle after injection. Hence, we provide virtually 10,5 ml oil in each vial.</p>

    <p>3. We don`t have underdosed vials or pills! As you can see on the video above our production line is fully automated. We recheck our equipment settings before we launch each new batch. All settings for each vial or pill within one batch are equal. If one vial was underdosed, it would mean that all other vials from this batch are underdosed too, which is just impossible.</p>

    <p>4. We pay huge attention to preservation of health, that`s why we carefully sterilize all our oils for intramuscular injections. When using our oils you can be 100% sure you will never catch staphylococcus or any other bacteria. Please read a separate text about it below!</p>

    <p>5. We use 5 to 10% pharmaceutical grade ethyl oleate in our oils. As a result injections are not painful and don`t cause big lumps, etc. (Attention shall be paid only with high concentrated oils 450-600 mg/ml! As carrier in all our vials is used grape seed oil.</p>

    <p>6. Our products have lot of protection elements against counterfeits, especially protection codes, which can be checked in the respective section of our site. You will always know whether your vial is genuine or not.</p>

    <p>7. Our product range has unique compounds, which most of other sources can`t offer. For example, GW1516 (increases endurance by times!); along with the regular stanozolol water suspension we produce oil-based stanozolol, which can be mixed with any oils and reduces the risk of abscesses. We offer injectable oxymetholone and methandienone (due to the missing first pass through the liver both have higher bioavailability = efficiency as compared against the oral versions). We have very interesting and extremely popular mixes line. Now we are working on several other new compounds! All the time we work on developing new product forms and mixes, 

    </p><p>8. We test all our products internally on our volunteers before we launch them in the market. If some problems are reported, we improve formulas and only after this start selling. You always get proven and safe product!</p>

    <p>9. In our vials we do not use rubber caps, which can be damaged under oil impact with the time! As result tiny particles off the rubber can get off when inserting the needle and fall into oil or get into the needle causing dangerous to health consequences! Instead of rubber we use silicon caps, which do not have this shortcoming and are oil-resistant!</p>

    <p>10. We take into account remarks of our customers. Everyone can write his suggestions and ideas to us and we will consider them! We have full support for our products and are always available and open for questions and new ideas!</p>

    <p>11. Our products have one of the best and most secured designs among all steroid manufacturers worldwide! For the moment there have been reported no one case of counterfeiting Pharmacom Labs products! All vials are supplied in original cardboard boxes with brief manuals inside.</p>

    <h3>Why shall you choose Pharmacom Labs? Or what do other manufacturers hide from you?</h3>

    <p>1. Oil, by nature, contains small water particles. When present in the cooking oil you use at breakfast, there's little need for concern. But those same water particles present in an oil you are about to inject present a far greater problem. You might know what can happen if you attempt to mix 1ml of oil and 1ml of water for injection. But that's only the beginning, the water itself is also a very good medium for bacteria to reproduce - in stark contrast to sterile oil. Therefore we put great care into oil dehydration to minimize all potential health risks, however slim. Many cheap oil based steroids cannot offer the same guarantee. Pharmacom Labs remains one of the few manufacturers that can offer these measures with high-performance equipment at a decent price!</p>

    <p>2. Are you aware of how and under what circumstances the labs you know of filter their final products? Syringe filters are often used in lesser quality labs, but they are not reliable; a proper filter would need to be at least 22 micrometers as a minimum. If you imagine the process of sieving oil through a filter of an average size to meet commercial demand, you would need at least 600 kPa of pressure. This is simply impossible without sufficient equipment, custom fit vacuum pumps or compressors designed for pharmaceutical use, a pressured air dryer, a large quantity of filters including cyclons. No labs selling cheap products possess this cost prohibitive, professional equipment.</p>

    <p>3. Do you know if and how other manufacturers avoid double bond (olefinic bond) sequences in ethyl oleate? How they avoid fast oxidation?
    <br>This olefinic bond is the cause of a so-called "unsaturated condition" of EO - all unsaturated acids are highly attracted to all olefin-type combination reactions. Most labs use standard vials and rubber caps purchased from ordinary online supply stores. But ethyl oleate as a solvent can react with rubber causing its oxidation. With time, as you might have guessed, the rubber degrades.
    <br>So we ask - how many manufacturers use a non-toxic, hypoallergenic thermoplastic rubber which additionally mitigates this shortcoming? Are they even aware of it at all?</p>

    <p>4. Plenty of labs will be quick to tell you they use benzyl alcohol as an antiseptic agent, but do they know that it is truly only effective under very specific, controlled conditions? One of the strongest conditions being the pH level of oil - benzyl alcohol loses its antiseptic efficiency at a pH <5 or >7. Do they have the capabilities to control for this? We have our doubts. If you use a cheap testosterone product from a lesser lab, your bloodwork may indeed reflect that it contained active hormone. But we ask you, what could happen with longterm storage of such a product? Believe us, you will not want to inject it into your body!</p>

    <p>5. What preserving agents are other manufacturers using against gram-negative bacteria - if they are even using them at all?
    <br>
    Benzyl alcohol, while effective against gram-positive bacteria, is not sufficient against gram-negative bacteria which have a thicker cell membrane, making them resistant to not only BA but many preserving agents in general. While we cannot disclose the specific technologies we use as part of our production secret, we guarantee we have the means and the will to use them in our oils.
    <br>
    Neglecting the use of parabens, chlorobutanol, and other such agents clearly implies clandestine production, typically with the intent to sell as many products as possible with minimal expense - no longterm strategy of precautions thereof. Whether or not a customer intends to use a product two or three years down the road is certainly of no concern to them, which poses a serious question of concern to consumers.
    <br>
    So we have to reiterate: we have the industrial scale equipment and the technical prowess to ensure all of these standards - and plenty more we cannot disclose. But with that comes a greater cost than what you would find in lesser clandestine labs.</p>

    <p>Finally, it is ultimately up to you what you purchase and put inside your body. Whether the products you put inside your body are cheaper, and can include underdosed items and potential health risks, or of highest quality and proven through a rigorous, health-conscious process every time. Our established record of over 10 years and the professional quality we possess compared to the multitude of issues and infections found in smaller, cheaper, short-lived labs speaks for itself. Is it worth a few extra dollars? Thank you very much for your attention...and may the force be with you!</p>
    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection