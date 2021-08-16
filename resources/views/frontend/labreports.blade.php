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
    .m0a {
        margin: 0 auto;
        display: inline-block;
    }

    .component_label {
        color: #fff;
        width: 200px;
        margin-bottom: 15px;
        height: 20px;
        overflow: hidden;
        float: left;
    }

    .component_label input {
        display: inline;
    }

    .select_holder.center {
        margin: 0 5%;
    }

    .select_holder {
        width: 30%;
        float: left;
    }

    .select_holder select {
        width: 100%;
        height: 30px;
        line-height: 30px;
    }

    .toggle_form {
        display: none;
    }

    .results .result {
        float: left;
        margin: 15px;
        color: #fff;
        text-align: center;
        width: 200px;
        height: 310px;
    }

    .result img {
        width: 200px !important;
    }

    .result .imgholder {
        width: 200px;
        height: 280px;
        overflow: hidden;
        margin-bottom: 10px;
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
        <div class="title6">Test results</div>
        <div class="box13">
            <div class="box13-in">
                <div class="box13-in-item2">
                    <div class="text2">
                        Almost all chromotography tests were done by an independent GMP-certified accredited lab Simec (www.simec.ch). All results are verifiable!!! In each report there is an
                        individual
                        report number, for example C34804 for Boldenone Undecvlenate. If you have doubts in the quality you can directly contact Simec,
                        provide this report number and they will confirm authenticity of the report.
                    </div>

                    <div style="text-align:center;">
                        <button type="button" class="button4 m0a" onclick="$('.toggle_form').toggle('fast');">Toggle filter</button>
                    </div>
                    <div style="height:20px"></div>
                    <form method="POST" action="/results" class="toggle_form">
                        <input type="hidden" name="_token" value="2TzQgAdUTAnSPKK1fd5rT9oBHhhLh4InMoukKhN3">                            <div class="form-wrap" style="display:block;">
                                                                <label class="component_label">
                                    <input type="checkbox" name="components[]" value="1">
                                    Testosterone
                                </label>
                                                                <label class="component_label">
                                    <input type="checkbox" name="components[]" value="2">
                                    Nandrolone
                                </label>
                                                                <label class="component_label">
                                    <input type="checkbox" name="components[]" value="3">
                                    Boldenone
                                </label>
                                                                <label class="component_label">
                                    <input type="checkbox" name="components[]" value="4">
                                    Trenbolone
                                </label>
                                                                <label class="component_label">
                                    <input type="checkbox" name="components[]" value="5">
                                    Stanozolol
                                </label>
                                                                <label class="component_label">
                                    <input type="checkbox" name="components[]" value="6">
                                    Primobolon
                                </label>
                                                                <label class="component_label">
                                    <input type="checkbox" name="components[]" value="7">
                                    Masteron
                                </label>
                                                                <label class="component_label">
                                    <input type="checkbox" name="components[]" value="8">
                                    Mixes
                                </label>
                                                                <label class="component_label">
                                    <input type="checkbox" name="components[]" value="9">
                                    Methandienone
                                </label>
                                                                <label class="component_label">
                                    <input type="checkbox" name="components[]" value="10">
                                    Oxymetholone
                                </label>
                                                                <label class="component_label">
                                    <input type="checkbox" name="components[]" value="11">
                                    Turinabol
                                </label>
                                                                <label class="component_label">
                                    <input type="checkbox" name="components[]" value="12">
                                    Oxandrolone
                                </label>
                                                                <label class="component_label">
                                    <input type="checkbox" name="components[]" value="13">
                                    Proviron
                                </label>
                                                                <label class="component_label">
                                    <input type="checkbox" name="components[]" value="14">
                                    Halotestin
                                </label>
                                                                <label class="component_label">
                                    <input type="checkbox" name="components[]" value="15">
                                    Human Growth Hormone
                                </label>
                                                                <label class="component_label">
                                    <input type="checkbox" name="components[]" value="16">
                                    Clomid
                                </label>
                                                                <label class="component_label">
                                    <input type="checkbox" name="components[]" value="17">
                                    Toremifene
                                </label>
                                                                <label class="component_label">
                                    <input type="checkbox" name="components[]" value="18">
                                    Exemestane
                                </label>
                                                                <label class="component_label">
                                    <input type="checkbox" name="components[]" value="19">
                                    Anastrazole
                                </label>
                                                                <label class="component_label">
                                    <input type="checkbox" name="components[]" value="20">
                                    Letrozole
                                </label>
                                                                <label class="component_label">
                                    <input type="checkbox" name="components[]" value="21">
                                    Isotretinoin
                                </label>
                                                                <label class="component_label">
                                    <input type="checkbox" name="components[]" value="22">
                                    Human Chorionic Gonadotropin
                                </label>
                                                                <label class="component_label">
                                    <input type="checkbox" name="components[]" value="23">
                                    Sibutramine
                                </label>
                                                                <label class="component_label">
                                    <input type="checkbox" name="components[]" value="24">
                                    Triiodothyronine
                                </label>
                                                            <br clear="all">
                            <div class="select_holder">
                                <select name="type">
                                                                                <option value="0">All types</option>
                                                                                <option value="1">Purity</option>
                                                                                <option value="2">Dosage</option>
                                                                        </select>
                            </div>

                            <div class="select_holder center">
                                <select name="date_start">
                                    <option value="0">Date from</option>
                                                                                <option value="5 - 2015">5 - 2015</option>
                                                                                <option value="7 - 2015">7 - 2015</option>
                                                                                <option value="8 - 2015">8 - 2015</option>
                                                                                <option value="10 - 2015">10 - 2015</option>
                                                                                <option value="11 - 2015">11 - 2015</option>
                                                                                <option value="12 - 2015">12 - 2015</option>
                                                                                <option value="1 - 2016">1 - 2016</option>
                                                                                <option value="2 - 2016">2 - 2016</option>
                                                                                <option value="3 - 2016">3 - 2016</option>
                                                                                <option value="4 - 2016">4 - 2016</option>
                                                                                <option value="5 - 2016">5 - 2016</option>
                                                                                <option value="9 - 2016">9 - 2016</option>
                                                                                <option value="8 - 2017">8 - 2017</option>
                                                                                <option value="1 - 2018">1 - 2018</option>
                                                                                <option value="3 - 2018">3 - 2018</option>
                                                                                <option value="7 - 2018">7 - 2018</option>
                                                                                <option value="8 - 2018">8 - 2018</option>
                                                                        </select>
                            </div>

                            <div class="select_holder">
                                <select name="date_end">
                                    <option value="0">Date to</option>
                                                                                <option value="5 - 2015">5 - 2015</option>
                                                                                <option value="7 - 2015">7 - 2015</option>
                                                                                <option value="8 - 2015">8 - 2015</option>
                                                                                <option value="10 - 2015">10 - 2015</option>
                                                                                <option value="11 - 2015">11 - 2015</option>
                                                                                <option value="12 - 2015">12 - 2015</option>
                                                                                <option value="1 - 2016">1 - 2016</option>
                                                                                <option value="2 - 2016">2 - 2016</option>
                                                                                <option value="3 - 2016">3 - 2016</option>
                                                                                <option value="4 - 2016">4 - 2016</option>
                                                                                <option value="5 - 2016">5 - 2016</option>
                                                                                <option value="9 - 2016">9 - 2016</option>
                                                                                <option value="8 - 2017">8 - 2017</option>
                                                                                <option value="1 - 2018">1 - 2018</option>
                                                                                <option value="3 - 2018">3 - 2018</option>
                                                                                <option value="7 - 2018">7 - 2018</option>
                                                                                <option value="8 - 2018">8 - 2018</option>
                                                                        </select>
                            </div>
                            <br clear="all">
                        </div>
                        <div style="height:20px"></div>
                        <div style="text-align:center;">
                            <button type="submit" class="button4 m0a">Search</button>
                        </div>
                    </form>
                    <div class="results">
                                                        <a href="/uploads/pdf/bold500-dosage-09-02-16_120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/bold500-dosage-09-02-16_120_200_0.png" width="120">
                                    </div>
                                    Pharmabold 500 - dosage
                                </div>
                            </a>
                                                        <a href="/uploads/pdf/Boldenone undecylenate-purity-08-05-2015_120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/Boldenone undecylenate-purity-08-05-2015_120_200_0.PNG" width="120">
                                    </div>
                                    Boldenone undecylenate - raws purity
                                </div>
                            </a>
                                                        <a href="/uploads/pdf/Boldenone-dosage-2015-06-02_120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/Boldenone-dosage-2015-06-02_120_200_0.PNG" width="120">
                                    </div>
                                    Pharmabold 300 - dosage
                                </div>
                            </a>
                                                        <a href="/uploads/pdf/dianabolos-dosage-2016-01-21_120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/dianabolos-dosage-2016-01-21_120_200_0.PNG" width="120">
                                    </div>
                                    Dianabolos - dosage
                                </div>
                            </a>
                                                        <a href="/uploads/pdf/Exemestane 2 purity - 11.27.2015_120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/Exemestane 2 purity - 11.27.2015_120_200_0.PNG" width="120">
                                    </div>
                                    Exemestane - raws purity
                                </div>
                            </a>
                                                        <a href="/uploads/pdf/Exemestane purity - 11.27.2015_120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/Exemestane purity - 11.27.2015_120_200_0.PNG" width="120">
                                    </div>
                                    Exemestane - raws purity
                                </div>
                            </a>
                                                        <a href="/uploads/pdf/Isotretinoin raws purity 11-2015_120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/Isotretinoin raws purity 11-2015_120_200_0.PNG" width="120">
                                    </div>
                                    Isotretinoin - raws purity
                                </div>
                            </a>
                                                        <a href="/uploads/pdf/isotretinoin raws purity_120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/isotretinoin raws purity-sample2-11-15_120_200_0.JPG" width="120">
                                    </div>
                                    Isotretinoin sample 2 - raws purity
                                </div>
                            </a>
                                                        <a href="/uploads/pdf/letrozole raws purity 11-2015_120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/letrozole raws purity 11-2015_120_200_0.PNG" width="120">
                                    </div>
                                    Letrozole - raws purity
                                </div>
                            </a>
                                                        <a href="/uploads/pdf/Masteron 100-dosage-2015-12-17_120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/Masteron 100-dosage-2015-12-17_120_200_0.PNG" width="120">
                                    </div>
                                    Pharmadro P - dosage
                                </div>
                            </a>
                                                        <a href="/uploads/pdf/nan600-dosage-09-02-16_120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/nan600-dosage-09-02-16_120_200_0.jpg" width="120">
                                    </div>
                                    Pharmanan D600 - dosage
                                </div>
                            </a>
                                                        <a href="/uploads/pdf/Nandrolone decanoate purity 08.20.2015_120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/Nandrolone decanoate purity 08.20.2015_120_200_0.PNG" width="120">
                                    </div>
                                    Nandrolone decanoate - purity
                                </div>
                            </a>
                                                        <a href="/uploads/pdf/Nandrolone decanoate-2015-06-02_120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/Nandrolone decanoate-2015-06-02_120_200_0.PNG" width="120">
                                    </div>
                                    Pharmanan D300 - dosage
                                </div>
                            </a>
                                                        <a href="/uploads/pdf/Oxandrolone-10-dosage-2015-08-10_120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/Oxandrolone-10-dosage-2015-08-10_120_200_0.PNG" width="120">
                                    </div>
                                    Oxandrolonos - dosage
                                </div>
                            </a>
                                                        <a href="/uploads/pdf/Oxymetholone purity 08.05.2015 _120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/Oxymetholone purity 08.05.2015_120_200_0.PNG" width="120">
                                    </div>
                                    Oxymetholone - purity
                                </div>
                            </a>
                                                        <a href="/uploads/pdf/pharmaprim_dosage_02_2016_120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/pharmaprim_dosage_02_2016_120_200_0.PNG" width="120">
                                    </div>
                                    Pharmaprim 100 - dosage
                                </div>
                            </a>
                                                        <a href="/uploads/pdf/Pharmatest C - dosage 02.1_120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/Pharmatest C - dosage 02.16_120_200_0.JPG" width="120">
                                    </div>
                                    Pharmatest C 250 - dosage
                                </div>
                            </a>
                                                        <a href="/uploads/pdf/pharmatest e300 dosage 02.16_120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/pharmatest e300 dosage 02.16_120_200_0.JPG" width="120">
                                    </div>
                                    Pharmatest E300 - dosage
                                </div>
                            </a>
                                                        <a href="/uploads/pdf/pharmatest e500 dosage_120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/pharmatest e500 dosage_120_200_0.jpg" width="120">
                                    </div>
                                    Pharmatest E500 - dosage
                                </div>
                            </a>
                                                        <a href="/uploads/pdf/Primobolan -dosage-2015-08-10_120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/Primobolan -dosage-2015-08-10_120_200_0.PNG" width="120">
                                    </div>
                                    Pharmaprim 100 - dosage
                                </div>
                            </a>
                                                        <a href="/uploads/pdf/Primobolan purity 08.05.2015_120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/Primobolan purity 08.05.2015_120_200_0.PNG" width="120">
                                    </div>
                                    Primobolan - purity
                                </div>
                            </a>
                                                        <a href="/uploads/pdf/Tectosterone cypionate dosage 12-01-2015_120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/Tectosterone cypionate dosage 12-01-2015_120_200_0.jpg" width="120">
                                    </div>
                                    Pharmatest C250 - dosage
                                </div>
                            </a>
                                                        <a href="/uploads/pdf/test_p_dosage_02_2016.JPG_120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/test_p_dosage_02_2016_120_200_0.JPG" width="120">
                                    </div>
                                    Pharmatest P100 - dosage
                                </div>
                            </a>
                                                        <a href="/uploads/pdf/test500-dosage-09-02-16_120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/test500-dosage-09-02-16_120_200_0.jpg" width="120">
                                    </div>
                                    Pharmatest E500 - dosage
                                </div>
                            </a>
                                                        <a href="/uploads/pdf/Testosterone decanoate purity 08.05.2015_120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/Testosterone decanoate purity 08.05.2015_120_200_0.PNG" width="120">
                                    </div>
                                    Testosterone decanoate - purity
                                </div>
                            </a>
                                                        <a href="/uploads/pdf/Testosterone Enanthate purity 08.05.2015_120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/Testosterone Enanthate purity 08.05.2015_120_200_0.PNG" width="120">
                                    </div>
                                    Testosterone enanthate - purity
                                </div>
                            </a>
                                                        <a href="/uploads/pdf/Testosterone Enanthate-dosage-2015-06-02_120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/Testosterone Enanthate-dosage-2015-06-02_120_200_0.PNG" width="120">
                                    </div>
                                    Pharmatest E300 - dosage
                                </div>
                            </a>
                                                        <a href="/uploads/pdf/Testosterone propionate purity 08.05.2015_120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/Testosterone propionate purity 08.05.2015_120_200_0.PNG" width="120">
                                    </div>
                                    Testosterone propionate - purity
                                </div>
                            </a>
                                                        <a href="/uploads/pdf/Toremifene citrate - purity - 11.27.2015_120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/Toremifene citrate - purity - 11.27.2015_120_200_0.PNG" width="120">
                                    </div>
                                    Toremifene citrate - purity
                                </div>
                            </a>
                                                        <a href="/uploads/pdf/Tren ace purity 11.27.2015_120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/Tren ace purity 11.27.2015_120_200_0.PNG" width="120">
                                    </div>
                                    Trenbolone acetate - purity
                                </div>
                            </a>
                                                        <a href="/uploads/pdf/tren-a100-dosage-microbio-metals-2016-01-21.pdf_120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/tren-a100-dosage-microbio-metals-2016-01-21.pdf_120_200_0.JPG" width="120">
                                    </div>
                                    Pharmatren A100 - dosage &amp;amp; microbiological testing/heavy metals
                                </div>
                            </a>
                                                        <a href="/uploads/pdf/Trenbolone acetate-100-dosage-2015-06-02_120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/Trenbolone acetate-100-dosage-2015-06-02_120_200_0.PNG" width="120">
                                    </div>
                                    Pharmatren A - dosage
                                </div>
                            </a>
                                                        <a href="/uploads/pdf/Trenbolone enanthate -27-11-purity_120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/Trenbolone enanthate -27-11-purity_120_200_0.PNG" width="120">
                                    </div>
                                    Trenbolone enanthate - purity
                                </div>
                            </a>
                                                        <a href="/uploads/pdf/Trenbolone Enanthate purity 10.09.2015_120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/Trenbolone Enanthate purity 10.09.2015_120_200_0.PNG" width="120">
                                    </div>
                                    Trenbolone enanthate - purity
                                </div>
                            </a>
                                                        <a href="/uploads/pdf/Trenbolone enanthate- purity-11-2015_120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/Trenbolone enanthate- purity-11-2015_120_200_0.PNG" width="120">
                                    </div>
                                    Trenbolone enanthate - purity
                                </div>
                            </a>
                                                        <a href="/uploads/pdf/proviron-dosage-03.2016._120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/provironos_dosage_03_2016_120_200_0.PNG" width="120">
                                    </div>
                                    Provironos - dosage
                                </div>
                            </a>
                                                        <a href="/uploads/pdf/pharmatren_e_dosage_03_2016_120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/pharmatren_e_dosage_03_2016_120_200_0.PNG" width="120">
                                    </div>
                                    Pharmatren E200 - dosage
                                </div>
                            </a>
                                                        <a href="/uploads/pdf/anastrozol_120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/anastrozol_120_200_0.PNG" width="120">
                                    </div>
                                    Anastrozolos - Dosage
                                </div>
                            </a>
                                                        <a href="/uploads/pdf/tren hexa-03-2016_120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/trenhexa-03-16_120_200_0.PNG" width="120">
                                    </div>
                                    Trenbolone Hexahydrobenzylcarbonate - - raws purity
                                </div>
                            </a>
                                                        <a href="/uploads/pdf/pharmanan_d300_06_2016_120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/pharmanan_d300_06_2016_120_200_0.PNG" width="120">
                                    </div>
                                    Pharmanan D300 - dosage
                                </div>
                            </a>
                                                        <a href="/uploads/pdf/Primo_purity_03_2016_120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/Primo_purity_03_2016_120_200_0.PNG" width="120">
                                    </div>
                                    Primobolan - raws purity
                                </div>
                            </a>
                                                        <a href="/uploads/pdf/turinabolos_dosage_03_2016_120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/turinabolos_dosage_03_2016_120_200_0.PNG" width="120">
                                    </div>
                                    Turinabolos - dosage
                                </div>
                            </a>
                                                        <a href="/uploads/pdf/pharmananp100_dosage_05_16_120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/pharmananp100_dosage_05_16_120_200_0.JPG" width="120">
                                    </div>
                                    Pharmanan P100_dosage
                                </div>
                            </a>
                                                        <a href="/uploads/pdf/sust300_dosage_05_16_120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/sust300_dosage_05_16_120_200_0.JPG" width="120">
                                    </div>
                                    Pharmasust 300_dosage_05_16
                                </div>
                            </a>
                                                        <a href="/uploads/pdf/pharmamix6_dosage_03_16_120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/pharmamix6_dosage_03_16_120_200_0.JPG" width="120">
                                    </div>
                                    Pharma Mix 6_dosage_03_2016
                                </div>
                            </a>
                                                        <a href="/uploads/pdf/pharmamix3_dosage_03_16_120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/pharmamix3_dosage_03_16_120_200_0.JPG" width="120">
                                    </div>
                                    Pharma Mix 3_dosage_03_2016
                                </div>
                            </a>
                                                        <a href="/uploads/pdf/pharmamix1_dosage_03_16_120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/pharmamix1_dosage_03_16_120_200_0.JPG" width="120">
                                    </div>
                                    Pharma Mix 1_dosage_03_2016
                                </div>
                            </a>
                                                        <a href="/uploads/pdf/oxy_dosage_05_2016_120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/oxy_dosage_05_2016_120_200_0.JPG" width="120">
                                    </div>
                                    Pharmaoxy_dosage_05_2016
                                </div>
                            </a>
                                                        <a href="/uploads/pdf/oxy_dosage_s2_05_2016_120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/oxy_dosage_s2_05_2016_120_200_0.JPG" width="120">
                                    </div>
                                    Pharmaoxy_dosage_s2_05_2016
                                </div>
                            </a>
                                                        <a href="/uploads/pdf/pharmatest_c_04_2016_120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/pharmatest_c_04_2016_120_200_0.JPG" width="120">
                                    </div>
                                    Pharmatest C - dosage (sample was shipped to Simec by our customer)
                                </div>
                            </a>
                                                        <a href="/uploads/pdf/Oxandrolone - purity - 11.2015_120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/Oxandrolone - purity - 11.2015_120_200_0.JPG" width="120">
                                    </div>
                                    Oxandrolone - raws purity - 11.2015
                                </div>
                            </a>
                                                        <a href="/uploads/pdf/Stanos_dosage_03_2016_120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/Stanos_dosage_03_2016_120_200_0.JPG" width="120">
                                    </div>
                                    Stanos - dosage - 03.2016
                                </div>
                            </a>
                                                        <a href="/uploads/pdf/pharmatren h - dosage - 03.2016_120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/pharmatren h - dosage - 03.2016_120_200_0.JPG" width="120">
                                    </div>
                                    Pharmatren H - dosage - 03.2016
                                </div>
                            </a>
                                                        <a href="/uploads/pdf/nanp_dosage_microbiological_120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/nanp_dosage_microbiological_120_200_0.PNG" width="120">
                                    </div>
                                    Pharmanan P (from customer)
                                </div>
                            </a>
                                                        <a href="/uploads/pdf/anastrozolos_120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/2_120_200_0.png" width="120">
                                    </div>
                                    Anastrozolos
                                </div>
                            </a>
                                                        <a href="/uploads/pdf/C58852_120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/1_120_200_0.png" width="120">
                                    </div>
                                    Halotestos
                                </div>
                            </a>
                                                        <a href="/uploads/pdf/C64442_120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/test e300_120_200_0.png" width="120">
                                    </div>
                                    PHARMATEST E300 dosage
                                </div>
                            </a>
                                                        <a href="/uploads/pdf/C64443_120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/trena100_120_200_0.png" width="120">
                                    </div>
                                    PHARMATREN A100 dosage
                                </div>
                            </a>
                                                        <a href="/uploads/pdf/C64445_120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/clomos_120_200_0.png" width="120">
                                    </div>
                                    Clomos
                                </div>
                            </a>
                                                        <a href="/uploads/pdf/C64447_120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/prim100_120_200_0.png" width="120">
                                    </div>
                                    PHARMAPRIM 100
                                </div>
                            </a>
                                                        <a href="/uploads/pdf/C64449_120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/exos_120_200_0.png" width="120">
                                    </div>
                                    Exos
                                </div>
                            </a>
                                                        <a href="/uploads/pdf/bold_120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/03-2018-bold300_120_200_0.png" width="120">
                                    </div>
                                    Pharmabold 300
                                </div>
                            </a>
                                                        <a href="/uploads/pdf/oxandrolonos_120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/03-2018-oxandrolonos_120_200_0.png" width="120">
                                    </div>
                                    Oxandrolonos
                                </div>
                            </a>
                                                        <a href="/uploads/pdf/C64446_120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/07-18-farestos_120_200_0.png" width="120">
                                    </div>
                                    Farestos
                                </div>
                            </a>
                                                        <a href="/uploads/pdf/clomos_120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/clomos_120_200_0.png" width="120">
                                    </div>
                                    Clomos
                                </div>
                            </a>
                                                        <a href="/uploads/pdf/anastrozolos_120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/anastrozolos_120_200_0.png" width="120">
                                    </div>
                                    Anastrozolos
                                </div>
                            </a>
                                                        <a href="/uploads/pdf/dianabolos_120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/dianabolos_120_200_0.png" width="120">
                                    </div>
                                    Dianabolos
                                </div>
                            </a>
                                                        <a href="/uploads/pdf/nand300_120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/nan_d_300_120_200_0.png" width="120">
                                    </div>
                                    Pharmanan D300
                                </div>
                            </a>
                                                        <a href="/uploads/pdf/prim100_120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/_120_200_0.prim100_dosage" width="120">
                                    </div>
                                    Pharmaprim 100
                                </div>
                            </a>
                                                        <a href="/uploads/pdf/provironos_120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/provironos_120_200_0.png" width="120">
                                    </div>
                                    Provironos
                                </div>
                            </a>
                                                        <a href="/uploads/pdf/stanos_120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/stanos_120_200_0.png" width="120">
                                    </div>
                                    Stanos
                                </div>
                            </a>
                                                        <a href="/uploads/pdf/teste300_120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/test_e_300_dosage_120_200_0.png" width="120">
                                    </div>
                                    Pharmatest E300
                                </div>
                            </a>
                                                        <a href="/uploads/pdf/testp100_120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/test_p_100_120_200_0.png" width="120">
                                    </div>
                                    Pharmatest P100
                                </div>
                            </a>
                                                        <a href="/uploads/pdf/trena100_120_200_0.pdf" target="_blank">
                                <div class="result">
                                    <div class="imgholder">
                                        <img src="/uploads/pdf/tren_a_100_120_200_0.png" width="120">
                                    </div>
                                    Pharmatren A100
                                </div>
                            </a>
                                                </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection