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
                                @foreach ($lab_report as $item)
                                    <a href="{{asset('assets/backend/report/file/'.$item->file)}}" target="_blank">
                                        <div class="result">
                                            <div class="imgholder">
                                                <img src="{{asset('assets/backend/report/image/'.$item->thumbnail)}}" width="120">
                                            </div>
                                            {{$item->title}}
                                        </div>
                                    </a>
                                @endforeach
                                                     

                                                </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection