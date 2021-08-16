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
        <div class="title6">Our terms</div>
        <div class="box13">
            <div class="box13-in">
                <div class="box13-in-item2">
                    <div class="text2">
                        <p>These terms and conditions govern all users of <a href="https://int.basicstero.ws" target="" rel="">https://int.basicstero.ws</a> store.</p><p>Your purchase indicates your acceptance of these terms and conditions.</p><p>Do not confirm your order if you do not accept them.</p><p>1. The products we offer are intended for laboratory research use only. In purchasing any of these items, the customer acknowledges that there are risks involved with consumption or distribution of these products. These chemicals are NOT intended to use as food additives, drugs, cosmetics, household chemicals or other inappropriate applications.</p><p>2. Purchaser agrees to not violate any local Drug Agency laws and is familiar with local country Ministry of Health regulations, including the obligatory prescriptions needed when importing pharmaceuticals.</p><p>3. The listing of a material on this site does not constitute a license to its use in infringement of any patent. All of the products shall be handled only by qualified and properly trained professionals.</p><p>4. ALL products and services offered are for RESEARCH purposes ONLY. Under NO circumstances shall/should ANY of these materials be used for recreational purposes nor human consumption. Pharmacom Labs and basicstero.ws are NOT liable for ANY damages that may be caused by negligence, abuse, or ANY other unforeseen matter.</p><p>5. USES AND PATENTS: The materials for sale are intended for laboratory and manufacturing use only. They are NOT for use as food additives, drugs, cosmetic, household chemicals, or other inappropriate applications.</p><p>6. YOU MUST BE A MINIMUM OF 18 YEARS OF AGE. The listing of a material in this catalog does not constitute a license to, or a recommendation for, its use in infringement of any patent. All of the products will be handled only by qualified and trained individuals.</p><p>7. In purchasing these products, the customer acknowledges that there are hazards associated with their use. Customer represents and warrants to us that from customer's own independent review and study they are fully aware and knowledgeable about</p><p>(I) the health and safety hazards associated with the handling of the products purchased;</p><p>(II) Industrial hygiene controls necessary to protect its workers from such health and safety hazards;</p><p>(III) The need to adequately warn of health and safety hazards associated with products; and</p><p>(IV) Government regulations regarding the use of and exposure to such products. We reserve the right to limit sales of products or not to sell products to unqualified customers.</p><p>In addition by purchasing from Pharmacom Labs / basicstero.ws you the customer also acknowledge and agree</p><p>(I) to not bitch and complain about turnaround time before 14 business days</p><p>(II) to contact Pharmacom Labs / basicstero.ws in the event of any issue prior to posting any reviews</p><p>(III) that this is a legally binding contract and by breaking, bending, twisting or flipping of this contract you agree to forfeit your mortal soul (not to exceed 28 grams) and never return to this website again.</p><p>In no event shall Pharmacom Labs / basicstero.ws be liable for special, incidental or consequential damages, whether purchasers claim in contract, strict liability or otherwise. In consideration of the sale of products to purchaser, which sales we would not otherwise make, purchaser agrees to indemnify and hold Pharmacom Labs / basicstero.ws harmless from all claims, expenses, losses and liability of any nature whatsoever arising out of purchasers handling and/or use of purchased product.</p><p>This site is international and has international visitors and what may be legal in one country may not be legal in another, however, any information garnered from this site does not imply or suggest human or any use at all. Any replies via email or posting regarding your/my animal and using I/me/my/mine and you or yours refers to tissue samples and test subjects! My replies DO NOT imply human use and of course, do not do anything illegal with anything in this website.</p><h3>ORDERING</h3><p>1. Orders may only be processed through our shop via site checkout.&nbsp;</p><p>2. We do not have a minimum order. However, some particular payment ways (like Western Union) may have minimum limit, below which you will not be able selecting those as payment option. Checking WU/MG transfers may take in some particular cases up to 4-5 days.<br></p><p>3. Once you have placed an order, you will have 5 days to make a payment and submit the payment information into your account. If you fail to do so, your order will be automatically deleted after 5 days. In this case you will need to contact us to restore your order or just to place a new order.</p><p>4. Using Western Union as payment options you shall use your real name and ID information to be sure you will be able to withdraw your funds in case of any issues. Otherwise we take no responsibility for loss of your funds.</p><p>5. Order cancellations after the payment has been processed are not accepted. We do not refund funds in the following cases:&nbsp;</p><p>a) you paid for your order, but changed your mind</p><p>b) your order has been seized.&nbsp;</p><p>6. After you placed an order you will receive to your e-mail order confirmation, which will include your order number, specification of your order and order total as well as payment info.</p><h3>SHIPPING</h3>7. If you have placed your order in this section (EU-based warehouse) , we provide international shipping from one of EU-based countries to any country worldwide.<br><p>8. When your payment is confirmed, we will begin preparing your order for dispatch. It may take up to 48 hours. Total delivery time depends on warehouse location we ship from and may take up to 3 weeks.. Differences in delivery time are not dependent on us due to different factors such as your location, postal service efficiency, etc. Because of these reasons delivery can take longer as usual in particular cases.</p><p>9. The shipping cost is 20 USD flat rate. All parcels are shipped with a tracking number. <br></p><p>10. If your parcel is seized or lost we reship it the second time free of charge,  if seizure or loss are obvious (you have received seizure letter or tracking number says that package is not moving forwards and has not reached the final destination). If tracking number says - delivered, we shall not be liable for 
any losses, unless you have other trustworthy evidences of a 
seizure/loss (photo of seizure letter, etc.). Reshipping of a seized/lost package occurs not earlier than 4 weeks after the first package has been shipped, unless trustworthy evidences are provided earlier. <br></p><p>11. If you haven`t claimed for your package for some reason within the 
due time span and it is shipped back, we shall not be liable for any losses.
Unclaimed packages are not reshipped.</p><p>12. When you have received your package, you are obligated to film the unpacking process in the event of any issue or dispute. Without this we shall not be liable for any complaints (missing or damaged items, etc.).</p><p>13. If you have received a parcel with damaged items, we will reship ONLY those damaged items provided that you can provide photos of the unpacking as described above.</p><p>14. Please double check the information you submit to us. We shall not be liable for any nondelivery due to inaccurate information. We can assure you that we accurately forward all necessary information in its entirety to the postal service. Orders lost due to wrong delivery address are not reshipped.</p><b>SPECIAL CONDITIONS</b><br><p><span>
<b>1.</b>
Basicstero.ws is the direct store of Pharmacom</span> Labs; we are Pharmacom Labs.&nbsp; We produce all the
items that are available in our basicstero.ws store.&nbsp; Therefore, we
control the manufacturing process and quality of all the products in our
range.&nbsp; With basicstero.ws you get the real manufacturer’s guarantee.&nbsp;
Thus,&nbsp;items of questionable quality may be
an eligible subject for free replacement; Users have right to request
replacement of questionable items<span>.&nbsp;
If the quality of an item is being questioned, then it is required that an
independent qualitative/quantitative analysis of said item be performed by an
independent third-party laboratory.&nbsp; This is our standard protocol to
resolve issues regarding product quality and similar cases.&nbsp; In general,
we use independent GMP-certified accredited Swiss lab Simec AG (<a href="http://www.simec.ch/" target="_blank" rel="">www.simec.ch</a></span><span>) for these purposes.&nbsp; However,<b>&nbsp;</b>to absolutely
eliminate any possibility of our influence on the testing results, a customer
is authorized to choose any certified lab of his or her own choice that meet
the two <b>mandatory</b> conditions listed below (these conditions are necessary
to ensure that the analysis results are as trustworthy and reliable as possible
for all partied involved):</span></p>

<p><span><b>I.</b>&nbsp;
Only brand new untouched/unopened items (vials/ampoules/pills) are eligible to
be sent for testing.&nbsp; Therefore, we can only guarantee the quality of
unopened items only because after an item is opened its contents, purity, and
composition are no longer under our exclusive control.</span></p>

<p>&nbsp;<b>II.</b>&nbsp; The lab chosen should correspond
to all respective testing standards.&nbsp; Each test report should have an
individual verifiable report number so that any person can contact the lab to
verify the report to confirm the result was not forged. <br></p>

<p>If a customer
decides to take advantage of the option to send a sample to a certified
laboratory of his or her choice and meets the terms listed, he or she is
required to inform us about this in advance, provide the ORDER NUMBER which
contained the product in question, and provide photos of the item in
question.&nbsp; Basicstero.ws is bound by these terms to replace to the
customer the item sent for testing independent on whether the final result will
be positive or negative.&nbsp; Furthermore, if the lab report shows a negative
result and some considerable deviations are found, Basicstero.ws will
completely cover all testing expenses and provide to the customer a bonus for
all inconvenience caused.&nbsp; However, if the report shows a positive result
and no significant deviations are found, the customer will be required to cover
all testing expenses, but he or she still gets a replacement for the item that
was sent to be tested.</p>

<p>IMPORTANT: Deviations within +/- 10% from
concentration stated on the label are permissible.&nbsp; Therefore, if the product in question is found to be
within +/- 10% of Pharmacom’s advertised concentration it is considered a
positive good result. </p>

<p>&nbsp;Any and all
questions regarding the entire testing procedure, testing expenses, payment
details, and all other aspects of this process are to be discussed and agreed
upon individually via e-mail.</p>

<p>&nbsp;2.&nbsp;All
claims/complaints/blood works regarding Pharmatropin (Human Growth Hormone)
will only be considered within one week (7 days) of the delivery to the
customer&nbsp;(as per tracking number).&nbsp; Pharmatropin requires special
storage conditions and should be kept refrigerated to keep its potency for a
long time; we cannot verify whether or not these conditions are met and
maintained by a customer; therefore, we may not, should not, and will not be
held responsible for any inefficiency or bad blood work results caused by
improper storage conditions.</p>

<p>&nbsp;</p><br><br><br><br><br><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection