
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Buy steroids online | Best anabolic steroids for bodybuilding | Cheap steroids for sale</title>
    <meta name="description" content="Europe warehouse: steroids for sale. Anabolic shop Basicstero sells all types of steroids online. Buy best anabolic steroids by Pharmacom Labs for bodybuilding">
    <meta name="keywords" content="buy steroids online">

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!--style-->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/fonts.css')}}" rel="stylesheet">
    <link href="{{asset('css/toastr.css')}}" rel="stylesheet">

    <!--slider-->
    <link href="{{asset('slick/slick.css')}}" rel="stylesheet">
    <link href="{{asset('slick/slick-theme.css')}}" rel="stylesheet">
    <!--font-awesome-->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">


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
    <style>
        .personal_area {
            text-shadow: 2px 2px 2px #059dea;
            font-size: 18px !important;
        }
    </style>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
</head>
<body>
<div class="content">
    <div class="mob-header-menu-icon">
        <img src="{{asset('img/mobnav.png')}}" alt="">
    </div>

    <div class="content-1">
        <div class="wrap-1">
            <div class="mob-header-menu-close">
                <img src="{{asset('img/close.png')}}" alt="">
            </div>
            <div class="logo">
                <a href="/"><img src="{{asset('img/logo.png')}}" alt=""></a>
            </div>
            <div class="nav">
                                    <span>
                        <a class=""
                                                      href="#"
                                                   >News</a>
                    </span>
                                    <span>
                        <a class=""
                                                      href="#"
                                                   >Purchase</a>
                    </span>
                                    <span>
                        <a class=""
                                                      href="#"
                                                   >Discounts</a>
                    </span>
                                    <span>
                        <a class=""
                                                      href="#"
                                                   >FAQ</a>
                    </span>
                                    <span>
                        <a class=""
                                                      href="#"
                                                   >Our terms</a>
                    </span>
                                    <span>
                        <a class=""
                                                      href="#"
                                                   >Innovations</a>
                    </span>
                                    <span>
                        <a class=""
                                                      href="#"
                                                   >Lab reports</a>
                    </span>
                                    <span>
                        <a class=""
                                                      href="#"
                                                   >Reviews</a>
                    </span>
                                    <span>
                        <a class=""
                                                      href="#"
                                                   >Check code</a>
                    </span>
                                    <span>
                        <a class=""
                                                      href="#"
                                                   >Contact us</a>
                    </span>
                                                            </div>
            <div class="nav2">
                <span><a class=""
                         href="#">ORAL LINE</a></span>

                <span><a class=""
                         href="#">INJECTABLE LINE</a></span>
                <span><a class=""
                         href="#">HGH AND PEPTIDES</a></span>
            </div>

        </div>
        <div class="footer-1">
            <div class="logo2"><img src="{{asset('img/logo2.png')}}" alt=""></div>
            <div class="text1">
                <p>
                    © Copyright Pharmacom Labs, 2013-2021                </p>
            </div>

        </div>
    </div>
    <div class="content-2">

                    <div class="header border1">
                <div class="header-in">
    <div class="header-in-item1">

        <div class="search">
            <div class="search-in">
                <form method="get" action="/products/show">
                    <input type="text" class="search_word" id="search_word" name="title" value=""
                           placeholder="">
                </form>
            </div>
            <div class="search-button"></div>
        </div>

    </div>

    <div class="header-in-item2">

                    <a href="#">
                <select class="my_select_form currency_select">
                    <option  selected  value="1">USD</option>
                    <option  value="2">EUR</option>
                    <option  value="3">GBP</option>
                </select>
            </a>
            <div class="icon-in auth_a">
                <div class="icon-in-item"></div>
                <a class="" href="#">Login</a>
            </div>
            <a href="#">
                <div class="icon-in-item top_cart">
                    <div class="icon-quantity" id="cart_quantity">0</div>
                </div>
            </a>
            </div>

</div>




<style>
    .currency_select {
        font-size: 14px !important;
        height: 24px !important;
        padding: 0px 15px 0 10px !important;
    }
</style>
            </div>
        
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
            <div class="box2-in-item">
    <a href="#">
        <div class="box2-img">
            <img src="{{asset('products/img_product_112_400_0_0.jpg')}}" alt="">
        </div>
    </a>
    <div class="wrap1">
        <a href="#">
            <div class="title1">PHARMATREN H 100</div>
        </a>
        <div class="title2">
            Trenbolone hexahydrobenzylcarbonate
        </div>

        <div class="cart-item1 aligner">
            <div class="cart">
                <div class="minus2"></div>
                <div class="sum2">
                    <input type="text" data-product_id="114" class="product_quantity" disabled="" value="1">
                </div>
                <div class="plus2"></div>
            </div>
        </div>

        <div class="price cart-button quantity_max" data-product_id="114" data-warehouse="1">
            <span class="wh_label">W1 - IN STOCK</span> <span class="price_label">$68.00</span>
        </div>

        <div class="price cart-button quantity_max" data-product_id="114" data-warehouse="2">
            <span class="wh_label">W2 - IN STOCK</span> <span class="price_label">$68.00</span>
        </div>

        <div class="price cart-button quantity_max" data-product_id="114" data-warehouse="3">
            <span class="wh_label">W3 - IN STOCK</span> <span class="price_label">$95.00</span>
        </div>
    </div>
</div>
<div class="box2-in-item">
    <a href="#">
        <div class="box2-img">
            <img src="{{asset('products/img_product_191_400_0_0.png')}}" alt="">
        </div>
    </a>
    <div class="wrap1">
        <a href="#">
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
    <a href="#">
        <div class="box2-img">
            <img src="{{asset('products/img_product_208_400_0_0.png')}}" alt="">
        </div>
    </a>
    <div class="wrap1">
        <a href="#">
            <div class="title1">PHARMA MIX 4 Ampules</div>
        </a>
        <div class="title2">
            Nand. Phenyl;Nand. Deca;Test. Phenyl;Test. Deca
        </div>

        <div class="cart-item1 aligner">
            <div class="cart">
                <div class="minus2"></div>
                <div class="sum2">
                    <input type="text" data-product_id="208" class="product_quantity" disabled="" value="1">
                </div>
                <div class="plus2"></div>
            </div>
        </div>

        <div class="price cart-button quantity_max" data-product_id="208" data-warehouse="1">
            <span class="wh_label">W1 - IN STOCK</span> <span class="price_label">$79.00</span>
        </div>

        <div class="price cart-button quantity_max" data-product_id="208" data-warehouse="2">
            <span class="wh_label">W2 - IN STOCK</span> <span class="price_label">$79.00</span>
        </div>

        <div class="price cart-button quantity_none" data-product_id="208" data-warehouse="3">
            <span class="wh_label">W3 - OUT OF STOCK</span> <span class="price_label">$115.00</span>
        </div>
    </div>
</div>
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

        <div class="footer">
            <div class="footer-in">


            </div>
        </div>

        <div class="mob-footer-1">
            <div class="logo2"><img src="{{asset('img/logo2.png')}}" alt=""></div>
            <div class="text1">
                <p>
                    © Copyright Pharmacom Labs, 2013-2021-2021
                </p>
            </div>

        </div>

    </div>


</div>
<script src="{{asset('js/jquery-2.2.0.min.js')}}" type="text/javascript"></script>
<script src="{{asset('slick/slick.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/toastr/toastr.js')}}" type="text/javascript"></script>
<script>
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": false,
        "positionClass": "toast-top-center",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "3000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };

    $.ajaxSetup({headers: {'X-CSRF-TOKEN': 'M4psU57wO10E8Cf7Wkd106TdXqHsMyrhtwvccSR8'}});

    $(document).ready(function () {
        $('body').on('click', '.cart-button, .cart-trigger', function () {
            id = $(this).data('product_id');
            wh = $(this).data('warehouse');
            if ($('.product_quantity', $(this).parent().parent()).val() > 0) quantity = $('.product_quantity', $(this).parent().parent()).val();
            else {
                quantity = 1;
                $('.product_quantity', $(this).parent().parent()).val(quantity);
            }

            if ($('.cart .sum input').length > 0) {
                obj = $(this).parent().parent().parent();
                quantity = $('.sum input', obj).val();
            }
            addToCart(id, quantity, wh);
        });

        
            });

    function addToCart(product_id, quantity, warehouse) {
        $.post('/add_to_cart', {product_id: product_id, quantity: quantity, warehouse: warehouse}, function (response) {
            data = JSON.parse(response);
            $('#cart_quantity').html(data.quantity);

            toastr.success("Product added to cart");
        }).fail(function (data) {
            tx = JSON.parse(data.responseText);
            toastr.error(tx.error);
            prod = $('.product_quantity[data-product_id="' + product_id + '"]');
            $.each(prod, function () {
                if ($(this).data('warehouse') == warehouse) {
                    $(this).val(0);
                }
            });
        });
    }

    $(document).ready(function () {
        $('.cart .plus2').click(function () {
            obj = $(this).parent();
            quantity = $('.sum2 input', obj).val();
            quantity++;
            $('.sum2 input', obj).val(quantity);
            id = $('.sum2 input', obj).data('product_id');
            if (typeof setQuantity == 'function') setQuantity(id, quantity);
        });

        $('.cart .minus2').click(function () {
            obj = $(this).parent();
            quantity = $('.sum2 input', obj).val();
            quantity--;
            if (quantity < 1) quantity = 1;
            $('.sum2 input', obj).val(quantity);
            id = $('.sum2 input', obj).data('product_id');
            if (typeof setQuantity == 'function') setQuantity(id, quantity);
        });

        $('.cart .minus3').click(function () {
            obj = $(this).parent();
            quantity = $('.sum2 input', obj).val();
            quantity--;
            if (quantity < 0) quantity = 0;
            $('.sum2 input', obj).val(quantity);
            id = $('.sum2 input', obj).data('product_id');
            if (typeof setQuantity == 'function') setQuantity(id, quantity);
        });
    });

</script>
<!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
    window.$zopim || (function (d, s) {
        var z = $zopim = function (c) {
            z._.push(c)
        }, $ = z.s =
            d.createElement(s), e = d.getElementsByTagName(s)[0];
        z.set = function (o) {
            z.set._.push(o)
        };
        z._ = [];
        z.set._ = [];
        $.async = !0;
        $.setAttribute('charset', 'utf-8');
        $.src = '//v2.zopim.com/?1wsrO4shXbvC5TirVlxB4whRCEAZDRRd';
        z.t = +new Date;
        $.type = 'text/javascript';
        e.parentNode.insertBefore($, e)
    })(document, 'script');
</script>
<!--End of Zopim Live Chat Script-->
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-66505145-2', 'auto');
    ga('send', 'pageview');

</script>
    <script type='text/javascript' src='/js/jquery.countdown.js'></script>
    <script>
        $(document).ready(function () {
            $('.currency_select').change(function () {
                val = $(this).val();
                window.location = '/set_currency/' + val;
            })
        });
    </script>
<div id="overlay"></div>

</body>

</html>
