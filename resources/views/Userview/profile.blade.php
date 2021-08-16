@extends('Userview.layouts.layout')

@section('custom_css')
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
    .box12-item4, .box12-item5 {
        height: auto;
    }

    label.full_width {
        width: 100%;
    }

    .button4 {
        width: auto;
        padding: 0 10px;
    }

    @media  screen and (min-width: 500px) {
        .box12-item5:nth-child(even) {
            margin-right: 0;
            margin-left: 10px;
        }
    }

    .has-danger {
        border-color: #ff0000;
        color: #ff0000;
    }
</style>
<style>
    .box12-item4, .box12-item5 {
        height: auto;
    }

    .mobile-only {
        display: block;
        font-family: 'SourceSansPro', sans-serif;
        color: #1c1e1f;
        margin-bottom: 5px;

    }

    @media  screen and (min-width: 500px) {
        .box12-item5.moved {
            margin-right: 0;
            margin-left: 10px;
        }

        .mobile-only {

        }
    }

    .box12-item5 {
        border: none;
    }

    .box12-item5 .form-input-line2 {
        border: 1px solid #595959;
        border-radius: 4px;
    }

    .box12-item4 {
        border: none;
    }

    .box12-item4 .form-input-line2 {
        border: 1px solid #595959;
        border-radius: 4px;
    }

    .country_select {
        width: 100%;
        height: 45px;
    }

    .error {
        text-align: center;
        color: #ff0000;
        display: block;
    }

    .has-danger select,
    .has-danger input {
        border-color: #ff0000 !important;
    }

    .has-danger span {
        color: #ff0000;
    }

    @media  only screen
    and (min-device-width: 120px)
    and (max-device-width: 499px) {
        ::-webkit-input-placeholder {
            opacity: 0;
        }

        :-moz-placeholder { /* Firefox 18- */
            opacity: 0;
        }

        ::-moz-placeholder { /* Firefox 19+ */
            opacity: 0;
        }

        :-ms-input-placeholder {
            opacity: 0;
        }
    }

    ::-webkit-input-placeholder {
        opacity: 0;
    }

    :-moz-placeholder { /* Firefox 18- */
        opacity: 0;
    }

    ::-moz-placeholder { /* Firefox 19+ */
        opacity: 0;
    }

    :-ms-input-placeholder {
        opacity: 0;
    }
</style>
@endsection

@section('content')
<div class="box1 border1">
    <div class="title6">Dashboard</div>
    
</div>


<div class="box17 border1">
    <form action="https://basicstero.ws/user/profile" method="POST">
        <input type="hidden" name="_token" value="2TzQgAdUTAnSPKK1fd5rT9oBHhhLh4InMoukKhN3">
        <div class="box17-in">
            <div class="wrap7">
                <div class="title19">Edit profile</div>
            </div>

            <div class="wrap11">
                <div class="box18-in">
                    <div class="box18-in-item">
                        <div class="form-wrap">
                            <div class="box12-item4">
                                <span class="mobile-only">Full name *</span>
                                <input type="text" id="form-input-line" value="Haroon iqbal"
                                       class="form-input-line2" name="order_address[fio]" placeholder="Ф.И.О. *" autocomplete="off">
                            </div>
                            <div class="box12-item4 ">
                                <span class="mobile-only">E-mail *</span>
                                <input type="text" id="form-input-line" value="harooniqbal585@gmail.com"
                                       class="form-input-line2" name="order_address[email]" placeholder="E-mail *" autocomplete="off">
                            </div>

                            <div class="box12-item5">
                                <span class="mobile-only">Address line 1 *</span>
                                <input type="text" id="form-input-line" value="Lahore, pakistan"
                                       class="form-input-line2" name="order_address[address_street]" placeholder="Address line 1 *" autocomplete="off">
                            </div>
                            <div class="box12-item5 moved">
                                <span class="mobile-only">Address line 2 (optional)</span>
                                <input type="text" id="form-input-line" value="Lahore, pakistan"
                                       class="form-input-line2" name="order_address[address_street2]" placeholder="Address line 2 (optional)" autocomplete="off">
                            </div>

                            <div class="box12-item5">
                                <span class="mobile-only">City *</span>
                                <input type="text" id="form-input-line" value="Lahore"
                                       class="form-input-line2" name="order_address[address_city]" placeholder="City *" autocomplete="off">
                            </div>
                            <div class="box12-item5 moved">
                                <span class="mobile-only">State / Region</span>
                                <input type="text" id="form-input-line" value="punjab"
                                       class="form-input-line2" name="order_address[address_region]" placeholder="State / Region" autocomplete="off">
                            </div>

                            <div class="box12-item5">
                                <span class="mobile-only">Zip Code *</span>
                                <input type="text" id="form-input-line" value="30936"
                                       class="form-input-line2" name="order_address[address_index]" placeholder="Zip Code *" autocomplete="off">
                            </div>
                            <div class="box12-item5 moved">
                                <span class="mobile-only">Choose your country *</span>
                                <select class="country_select" name="order_address[address_country]">
                                    <option value="">Choose your country *</option>
                                                                                <option value="United States"
                                                                                            >
                                            United States
                                        </option>
                                                                                <option value="Afghanistan"
                                                                                            >
                                            Afghanistan
                                        </option>
                                                                                <option value="Albania"
                                                                                            >
                                            Albania
                                        </option>
                                                                                <option value="Algeria"
                                                                                            >
                                            Algeria
                                        </option>
                                                                                <option value="American Samoa"
                                                                                            >
                                            American Samoa
                                        </option>
                                                                                <option value="Andorra"
                                                                                            >
                                            Andorra
                                        </option>
                                                                                <option value="Angola"
                                                                                            >
                                            Angola
                                        </option>
                                                                                <option value="Anguilla"
                                                                                            >
                                            Anguilla
                                        </option>
                                                                                <option value="Antarctica"
                                                                                            >
                                            Antarctica
                                        </option>
                                                                                <option value="Antigua and Barbuda"
                                                                                            >
                                            Antigua and Barbuda
                                        </option>
                                                                                <option value="Argentina"
                                                                                            >
                                            Argentina
                                        </option>
                                                                                <option value="Armenia"
                                                                                            >
                                            Armenia
                                        </option>
                                                                                <option value="Aruba"
                                                                                            >
                                            Aruba
                                        </option>
                                                                                <option value="Australia"
                                                                                            >
                                            Australia
                                        </option>
                                                                                <option value="Austria"
                                                                                            >
                                            Austria
                                        </option>
                                                                                <option value="Azerbaijan"
                                                                                            >
                                            Azerbaijan
                                        </option>
                                                                                <option value="Bahamas"
                                                                                            >
                                            Bahamas
                                        </option>
                                                                                <option value="Bahrain"
                                                                                            >
                                            Bahrain
                                        </option>
                                                                                <option value="Bangladesh"
                                                                                            >
                                            Bangladesh
                                        </option>
                                                                                <option value="Barbados"
                                                                                            >
                                            Barbados
                                        </option>
                                                                                <option value="Belarus"
                                                                                            >
                                            Belarus
                                        </option>
                                                                                <option value="Belgium"
                                                                                            >
                                            Belgium
                                        </option>
                                                                                <option value="Belize"
                                                                                            >
                                            Belize
                                        </option>
                                                                                <option value="Benin"
                                                                                            >
                                            Benin
                                        </option>
                                                                                <option value="Bermuda"
                                                                                            >
                                            Bermuda
                                        </option>
                                                                                <option value="Bhutan"
                                                                                            >
                                            Bhutan
                                        </option>
                                                                                <option value="Bolivia"
                                                                                            >
                                            Bolivia
                                        </option>
                                                                                <option value="Bosnia and Herzegovina"
                                                                                            >
                                            Bosnia and Herzegovina
                                        </option>
                                                                                <option value="Botswana"
                                                                                            >
                                            Botswana
                                        </option>
                                                                                <option value="Bouvet Island"
                                                                                            >
                                            Bouvet Island
                                        </option>
                                                                                <option value="Brazil"
                                                                                            >
                                            Brazil
                                        </option>
                                                                                <option value="British Indian Ocean Territory"
                                                                                            >
                                            British Indian Ocean Territory
                                        </option>
                                                                                <option value="Brunei Darussalam"
                                                                                            >
                                            Brunei Darussalam
                                        </option>
                                                                                <option value="Bulgaria"
                                                                                            >
                                            Bulgaria
                                        </option>
                                                                                <option value="Burkina Faso"
                                                                                            >
                                            Burkina Faso
                                        </option>
                                                                                <option value="Burundi"
                                                                                            >
                                            Burundi
                                        </option>
                                                                                <option value="Cambodia"
                                                                                            >
                                            Cambodia
                                        </option>
                                                                                <option value="Cameroon"
                                                                                            >
                                            Cameroon
                                        </option>
                                                                                <option value="Canada"
                                                                                            >
                                            Canada
                                        </option>
                                                                                <option value="Cape Verde"
                                                                                            >
                                            Cape Verde
                                        </option>
                                                                                <option value="Cayman Islands"
                                                                                            >
                                            Cayman Islands
                                        </option>
                                                                                <option value="Central African Republic"
                                                                                            >
                                            Central African Republic
                                        </option>
                                                                                <option value="Chad"
                                                                                            >
                                            Chad
                                        </option>
                                                                                <option value="Chile"
                                                                                            >
                                            Chile
                                        </option>
                                                                                <option value="Christmas Island"
                                                                                            >
                                            Christmas Island
                                        </option>
                                                                                <option value="Cocos (Keeling) Islands"
                                                                                            >
                                            Cocos (Keeling) Islands
                                        </option>
                                                                                <option value="Colombia"
                                                                                            >
                                            Colombia
                                        </option>
                                                                                <option value="Comoros"
                                                                                            >
                                            Comoros
                                        </option>
                                                                                <option value="Congo"
                                                                                            >
                                            Congo
                                        </option>
                                                                                <option value="Cook Islands"
                                                                                            >
                                            Cook Islands
                                        </option>
                                                                                <option value="Costa Rica"
                                                                                            >
                                            Costa Rica
                                        </option>
                                                                                <option value="Croatia (Hrvatska)"
                                                                                            >
                                            Croatia (Hrvatska)
                                        </option>
                                                                                <option value="Cuba"
                                                                                            >
                                            Cuba
                                        </option>
                                                                                <option value="Cyprus"
                                                                                            >
                                            Cyprus
                                        </option>
                                                                                <option value="Czech Republic"
                                                                                            >
                                            Czech Republic
                                        </option>
                                                                                <option value="Denmark"
                                                                                            >
                                            Denmark
                                        </option>
                                                                                <option value="Djibouti"
                                                                                            >
                                            Djibouti
                                        </option>
                                                                                <option value="Dominica"
                                                                                            >
                                            Dominica
                                        </option>
                                                                                <option value="Dominican Republic"
                                                                                            >
                                            Dominican Republic
                                        </option>
                                                                                <option value="East Timor"
                                                                                            >
                                            East Timor
                                        </option>
                                                                                <option value="Ecuador"
                                                                                            >
                                            Ecuador
                                        </option>
                                                                                <option value="Egypt"
                                                                                            >
                                            Egypt
                                        </option>
                                                                                <option value="El Salvador"
                                                                                            >
                                            El Salvador
                                        </option>
                                                                                <option value="Equatorial Guinea"
                                                                                            >
                                            Equatorial Guinea
                                        </option>
                                                                                <option value="Eritrea"
                                                                                            >
                                            Eritrea
                                        </option>
                                                                                <option value="Estonia"
                                                                                            >
                                            Estonia
                                        </option>
                                                                                <option value="Ethiopia"
                                                                                            >
                                            Ethiopia
                                        </option>
                                                                                <option value="Falkland Islands (Malvinas)"
                                                                                            >
                                            Falkland Islands (Malvinas)
                                        </option>
                                                                                <option value="Faroe Islands"
                                                                                            >
                                            Faroe Islands
                                        </option>
                                                                                <option value="Fiji"
                                                                                            >
                                            Fiji
                                        </option>
                                                                                <option value="Finland"
                                                                                            >
                                            Finland
                                        </option>
                                                                                <option value="France"
                                                                                            >
                                            France
                                        </option>
                                                                                <option value="France, Metropolitan"
                                                                                            >
                                            France, Metropolitan
                                        </option>
                                                                                <option value="French Guiana"
                                                                                            >
                                            French Guiana
                                        </option>
                                                                                <option value="French Polynesia"
                                                                                            >
                                            French Polynesia
                                        </option>
                                                                                <option value="French Southern Territories"
                                                                                            >
                                            French Southern Territories
                                        </option>
                                                                                <option value="Gabon"
                                                                                            >
                                            Gabon
                                        </option>
                                                                                <option value="Gambia"
                                                                                            >
                                            Gambia
                                        </option>
                                                                                <option value="Georgia"
                                                                                            >
                                            Georgia
                                        </option>
                                                                                <option value="Germany"
                                                                                            >
                                            Germany
                                        </option>
                                                                                <option value="Ghana"
                                                                                            >
                                            Ghana
                                        </option>
                                                                                <option value="Gibraltar"
                                                                                            >
                                            Gibraltar
                                        </option>
                                                                                <option value="Guernsey"
                                                                                            >
                                            Guernsey
                                        </option>
                                                                                <option value="Greece"
                                                                                            >
                                            Greece
                                        </option>
                                                                                <option value="Greenland"
                                                                                            >
                                            Greenland
                                        </option>
                                                                                <option value="Grenada"
                                                                                            >
                                            Grenada
                                        </option>
                                                                                <option value="Guadeloupe"
                                                                                            >
                                            Guadeloupe
                                        </option>
                                                                                <option value="Guam"
                                                                                            >
                                            Guam
                                        </option>
                                                                                <option value="Guatemala"
                                                                                            >
                                            Guatemala
                                        </option>
                                                                                <option value="Guinea"
                                                                                            >
                                            Guinea
                                        </option>
                                                                                <option value="Guinea-Bissau"
                                                                                            >
                                            Guinea-Bissau
                                        </option>
                                                                                <option value="Guyana"
                                                                                            >
                                            Guyana
                                        </option>
                                                                                <option value="Haiti"
                                                                                            >
                                            Haiti
                                        </option>
                                                                                <option value="Heard and Mc Donald Islands"
                                                                                            >
                                            Heard and Mc Donald Islands
                                        </option>
                                                                                <option value="Honduras"
                                                                                            >
                                            Honduras
                                        </option>
                                                                                <option value="Hong Kong"
                                                                                            >
                                            Hong Kong
                                        </option>
                                                                                <option value="Hungary"
                                                                                            >
                                            Hungary
                                        </option>
                                                                                <option value="Iceland"
                                                                                            >
                                            Iceland
                                        </option>
                                                                                <option value="India"
                                                                                            >
                                            India
                                        </option>
                                                                                <option value="Isle of Man"
                                                                                            >
                                            Isle of Man
                                        </option>
                                                                                <option value="Indonesia"
                                                                                            >
                                            Indonesia
                                        </option>
                                                                                <option value="Iran (Islamic Republic of)"
                                                                                            >
                                            Iran (Islamic Republic of)
                                        </option>
                                                                                <option value="Iraq"
                                                                                            >
                                            Iraq
                                        </option>
                                                                                <option value="Ireland"
                                                                                            >
                                            Ireland
                                        </option>
                                                                                <option value="Israel"
                                                                                            >
                                            Israel
                                        </option>
                                                                                <option value="Italy"
                                                                                            >
                                            Italy
                                        </option>
                                                                                <option value="Ivory Coast"
                                                                                            >
                                            Ivory Coast
                                        </option>
                                                                                <option value="Jersey"
                                                                                            >
                                            Jersey
                                        </option>
                                                                                <option value="Jamaica"
                                                                                            >
                                            Jamaica
                                        </option>
                                                                                <option value="Japan"
                                                                                            >
                                            Japan
                                        </option>
                                                                                <option value="Jordan"
                                                                                            >
                                            Jordan
                                        </option>
                                                                                <option value="Kazakhstan"
                                                                                            >
                                            Kazakhstan
                                        </option>
                                                                                <option value="Kenya"
                                                                                            >
                                            Kenya
                                        </option>
                                                                                <option value="Kiribati"
                                                                                            >
                                            Kiribati
                                        </option>
                                                                                <option value="Korea, Republic of"
                                                                                            >
                                            Korea, Republic of
                                        </option>
                                                                                <option value="Kosovo"
                                                                                            >
                                            Kosovo
                                        </option>
                                                                                <option value="Kuwait"
                                                                                            >
                                            Kuwait
                                        </option>
                                                                                <option value="Kyrgyzstan"
                                                                                            >
                                            Kyrgyzstan
                                        </option>
                                                                                <option value="Lao People&#039;s Democratic Republic"
                                                                                            >
                                            Lao People&#039;s Democratic Republic
                                        </option>
                                                                                <option value="Latvia"
                                                                                            >
                                            Latvia
                                        </option>
                                                                                <option value="Lebanon"
                                                                                            >
                                            Lebanon
                                        </option>
                                                                                <option value="Lesotho"
                                                                                            >
                                            Lesotho
                                        </option>
                                                                                <option value="Liberia"
                                                                                            >
                                            Liberia
                                        </option>
                                                                                <option value="Libyan Arab Jamahiriya"
                                                                                            >
                                            Libyan Arab Jamahiriya
                                        </option>
                                                                                <option value="Liechtenstein"
                                                                                            >
                                            Liechtenstein
                                        </option>
                                                                                <option value="Lithuania"
                                                                                            >
                                            Lithuania
                                        </option>
                                                                                <option value="Luxembourg"
                                                                                            >
                                            Luxembourg
                                        </option>
                                                                                <option value="Macau"
                                                                                            >
                                            Macau
                                        </option>
                                                                                <option value="Macedonia"
                                                                                            >
                                            Macedonia
                                        </option>
                                                                                <option value="Madagascar"
                                                                                            >
                                            Madagascar
                                        </option>
                                                                                <option value="Malawi"
                                                                                            >
                                            Malawi
                                        </option>
                                                                                <option value="Malaysia"
                                                                                            >
                                            Malaysia
                                        </option>
                                                                                <option value="Maldives"
                                                                                            >
                                            Maldives
                                        </option>
                                                                                <option value="Mali"
                                                                                            >
                                            Mali
                                        </option>
                                                                                <option value="Malta"
                                                                                            >
                                            Malta
                                        </option>
                                                                                <option value="Marshall Islands"
                                                                                            >
                                            Marshall Islands
                                        </option>
                                                                                <option value="Martinique"
                                                                                            >
                                            Martinique
                                        </option>
                                                                                <option value="Mauritania"
                                                                                            >
                                            Mauritania
                                        </option>
                                                                                <option value="Mauritius"
                                                                                            >
                                            Mauritius
                                        </option>
                                                                                <option value="Mayotte"
                                                                                            >
                                            Mayotte
                                        </option>
                                                                                <option value="Mexico"
                                                                                            >
                                            Mexico
                                        </option>
                                                                                <option value="Micronesia, Federated States of"
                                                                                            >
                                            Micronesia, Federated States of
                                        </option>
                                                                                <option value="Moldova, Republic of"
                                                                                            >
                                            Moldova, Republic of
                                        </option>
                                                                                <option value="Monaco"
                                                                                            >
                                            Monaco
                                        </option>
                                                                                <option value="Mongolia"
                                                                                            >
                                            Mongolia
                                        </option>
                                                                                <option value="Montenegro"
                                                                                            >
                                            Montenegro
                                        </option>
                                                                                <option value="Montserrat"
                                                                                            >
                                            Montserrat
                                        </option>
                                                                                <option value="Morocco"
                                                                                            >
                                            Morocco
                                        </option>
                                                                                <option value="Mozambique"
                                                                                            >
                                            Mozambique
                                        </option>
                                                                                <option value="Myanmar"
                                                                                            >
                                            Myanmar
                                        </option>
                                                                                <option value="Namibia"
                                                                                            >
                                            Namibia
                                        </option>
                                                                                <option value="Nauru"
                                                                                            >
                                            Nauru
                                        </option>
                                                                                <option value="Nepal"
                                                                                            >
                                            Nepal
                                        </option>
                                                                                <option value="Netherlands"
                                                                                            >
                                            Netherlands
                                        </option>
                                                                                <option value="Netherlands Antilles"
                                                                                            >
                                            Netherlands Antilles
                                        </option>
                                                                                <option value="New Caledonia"
                                                                                            >
                                            New Caledonia
                                        </option>
                                                                                <option value="New Zealand"
                                                                                            >
                                            New Zealand
                                        </option>
                                                                                <option value="Nicaragua"
                                                                                            >
                                            Nicaragua
                                        </option>
                                                                                <option value="Niger"
                                                                                            >
                                            Niger
                                        </option>
                                                                                <option value="Nigeria"
                                                                                            >
                                            Nigeria
                                        </option>
                                                                                <option value="Niue"
                                                                                            >
                                            Niue
                                        </option>
                                                                                <option value="Norfolk Island"
                                                                                            >
                                            Norfolk Island
                                        </option>
                                                                                <option value="Northern Mariana Islands"
                                                                                            >
                                            Northern Mariana Islands
                                        </option>
                                                                                <option value="Norway"
                                                                                            >
                                            Norway
                                        </option>
                                                                                <option value="Oman"
                                                                                            >
                                            Oman
                                        </option>
                                                                                <option value="Pakistan"
                                                 selected                                             >
                                            Pakistan
                                        </option>
                                                                                <option value="Palau"
                                                                                            >
                                            Palau
                                        </option>
                                                                                <option value="Palestine"
                                                                                            >
                                            Palestine
                                        </option>
                                                                                <option value="Panama"
                                                                                            >
                                            Panama
                                        </option>
                                                                                <option value="Papua New Guinea"
                                                                                            >
                                            Papua New Guinea
                                        </option>
                                                                                <option value="Paraguay"
                                                                                            >
                                            Paraguay
                                        </option>
                                                                                <option value="Peru"
                                                                                            >
                                            Peru
                                        </option>
                                                                                <option value="Philippines"
                                                                                            >
                                            Philippines
                                        </option>
                                                                                <option value="Pitcairn"
                                                                                            >
                                            Pitcairn
                                        </option>
                                                                                <option value="Poland"
                                                                                            >
                                            Poland
                                        </option>
                                                                                <option value="Portugal"
                                                                                            >
                                            Portugal
                                        </option>
                                                                                <option value="Puerto Rico"
                                                                                            >
                                            Puerto Rico
                                        </option>
                                                                                <option value="Qatar"
                                                                                            >
                                            Qatar
                                        </option>
                                                                                <option value="Reunion"
                                                                                            >
                                            Reunion
                                        </option>
                                                                                <option value="Romania"
                                                                                            >
                                            Romania
                                        </option>
                                                                                <option value="Rwanda"
                                                                                            >
                                            Rwanda
                                        </option>
                                                                                <option value="Saint Kitts and Nevis"
                                                                                            >
                                            Saint Kitts and Nevis
                                        </option>
                                                                                <option value="Saint Lucia"
                                                                                            >
                                            Saint Lucia
                                        </option>
                                                                                <option value="Saint Vincent and the Grenadines"
                                                                                            >
                                            Saint Vincent and the Grenadines
                                        </option>
                                                                                <option value="Samoa"
                                                                                            >
                                            Samoa
                                        </option>
                                                                                <option value="San Marino"
                                                                                            >
                                            San Marino
                                        </option>
                                                                                <option value="Sao Tome and Principe"
                                                                                            >
                                            Sao Tome and Principe
                                        </option>
                                                                                <option value="Saudi Arabia"
                                                                                            >
                                            Saudi Arabia
                                        </option>
                                                                                <option value="Senegal"
                                                                                            >
                                            Senegal
                                        </option>
                                                                                <option value="Serbia"
                                                                                            >
                                            Serbia
                                        </option>
                                                                                <option value="Seychelles"
                                                                                            >
                                            Seychelles
                                        </option>
                                                                                <option value="Sierra Leone"
                                                                                            >
                                            Sierra Leone
                                        </option>
                                                                                <option value="Singapore"
                                                                                            >
                                            Singapore
                                        </option>
                                                                                <option value="Slovakia"
                                                                                            >
                                            Slovakia
                                        </option>
                                                                                <option value="Slovenia"
                                                                                            >
                                            Slovenia
                                        </option>
                                                                                <option value="Solomon Islands"
                                                                                            >
                                            Solomon Islands
                                        </option>
                                                                                <option value="Somalia"
                                                                                            >
                                            Somalia
                                        </option>
                                                                                <option value="South Africa"
                                                                                            >
                                            South Africa
                                        </option>
                                                                                <option value="South Georgia South Sandwich Islands"
                                                                                            >
                                            South Georgia South Sandwich Islands
                                        </option>
                                                                                <option value="Spain"
                                                                                            >
                                            Spain
                                        </option>
                                                                                <option value="Sri Lanka"
                                                                                            >
                                            Sri Lanka
                                        </option>
                                                                                <option value="St. Helena"
                                                                                            >
                                            St. Helena
                                        </option>
                                                                                <option value="St. Pierre and Miquelon"
                                                                                            >
                                            St. Pierre and Miquelon
                                        </option>
                                                                                <option value="Sudan"
                                                                                            >
                                            Sudan
                                        </option>
                                                                                <option value="Suriname"
                                                                                            >
                                            Suriname
                                        </option>
                                                                                <option value="Svalbard and Jan Mayen Islands"
                                                                                            >
                                            Svalbard and Jan Mayen Islands
                                        </option>
                                                                                <option value="Swaziland"
                                                                                            >
                                            Swaziland
                                        </option>
                                                                                <option value="Sweden"
                                                                                            >
                                            Sweden
                                        </option>
                                                                                <option value="Switzerland"
                                                                                            >
                                            Switzerland
                                        </option>
                                                                                <option value="Syrian Arab Republic"
                                                                                            >
                                            Syrian Arab Republic
                                        </option>
                                                                                <option value="Taiwan"
                                                                                            >
                                            Taiwan
                                        </option>
                                                                                <option value="Tajikistan"
                                                                                            >
                                            Tajikistan
                                        </option>
                                                                                <option value="Tanzania, United Republic of"
                                                                                            >
                                            Tanzania, United Republic of
                                        </option>
                                                                                <option value="Thailand"
                                                                                            >
                                            Thailand
                                        </option>
                                                                                <option value="Togo"
                                                                                            >
                                            Togo
                                        </option>
                                                                                <option value="Tokelau"
                                                                                            >
                                            Tokelau
                                        </option>
                                                                                <option value="Tonga"
                                                                                            >
                                            Tonga
                                        </option>
                                                                                <option value="Trinidad and Tobago"
                                                                                            >
                                            Trinidad and Tobago
                                        </option>
                                                                                <option value="Tunisia"
                                                                                            >
                                            Tunisia
                                        </option>
                                                                                <option value="Turkey"
                                                                                            >
                                            Turkey
                                        </option>
                                                                                <option value="Turkmenistan"
                                                                                            >
                                            Turkmenistan
                                        </option>
                                                                                <option value="Turks and Caicos Islands"
                                                                                            >
                                            Turks and Caicos Islands
                                        </option>
                                                                                <option value="Tuvalu"
                                                                                            >
                                            Tuvalu
                                        </option>
                                                                                <option value="Uganda"
                                                                                            >
                                            Uganda
                                        </option>
                                                                                <option value="Ukraine"
                                                                                            >
                                            Ukraine
                                        </option>
                                                                                <option value="United Arab Emirates"
                                                                                            >
                                            United Arab Emirates
                                        </option>
                                                                                <option value="United Kingdom"
                                                                                            >
                                            United Kingdom
                                        </option>
                                                                                <option value="United States minor outlying islands"
                                                                                            >
                                            United States minor outlying islands
                                        </option>
                                                                                <option value="Uruguay"
                                                                                            >
                                            Uruguay
                                        </option>
                                                                                <option value="Uzbekistan"
                                                                                            >
                                            Uzbekistan
                                        </option>
                                                                                <option value="Vanuatu"
                                                                                            >
                                            Vanuatu
                                        </option>
                                                                                <option value="Vatican City State"
                                                                                            >
                                            Vatican City State
                                        </option>
                                                                                <option value="Venezuela"
                                                                                            >
                                            Venezuela
                                        </option>
                                                                                <option value="Vietnam"
                                                                                            >
                                            Vietnam
                                        </option>
                                                                                <option value="Virgin Islands (British)"
                                                                                            >
                                            Virgin Islands (British)
                                        </option>
                                                                                <option value="Virgin Islands (U.S.)"
                                                                                            >
                                            Virgin Islands (U.S.)
                                        </option>
                                                                                <option value="Wallis and Futuna Islands"
                                                                                            >
                                            Wallis and Futuna Islands
                                        </option>
                                                                                <option value="Western Sahara"
                                                                                            >
                                            Western Sahara
                                        </option>
                                                                                <option value="Yemen"
                                                                                            >
                                            Yemen
                                        </option>
                                                                                <option value="Yugoslavia"
                                                                                            >
                                            Yugoslavia
                                        </option>
                                                                                <option value="Zaire"
                                                                                            >
                                            Zaire
                                        </option>
                                                                                <option value="Zambia"
                                                                                            >
                                            Zambia
                                        </option>
                                                                                <option value="Zimbabwe"
                                                                                            >
                                            Zimbabwe
                                        </option>
                                                                        </select>
                            </div>

                        </div>

                    </div>
                    <div class="box18-in-item">

                    </div>
                </div>

            </div>

            <div class="wrap10">
                <div class="further">
                    <div class="further-item1">
                        <input type="submit" class="button4" value="Update profile">
                    </div>
                </div>
            </div>

        </div>
    </form>
</div>
@endsection