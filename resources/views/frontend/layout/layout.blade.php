
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

  @yield('addition_style')

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
                        <a class="personal_area"
                                                      href="{{route('news')}}"
                                                   >News</a>
                    </span>
                                    <span>
                        <a class=""
                                                      href="{{route('purchase')}}"
                                                   >Purchase</a>
                    </span>
                                    <span>
                        <a class=""
                                                      href="{{route('discount')}}"
                                                   >Discounts</a>
                    </span>
                                    <span>
                        <a class=""
                                                      href="{{route('faq')}}"
                                                   >FAQ</a>
                    </span>
                                    <span>
                        <a class=""
                                                      href="{{route("terms")}}"
                                                   >Our terms</a>
                    </span>
                                    <span>
                        <a class=""
                                                      href="{{route('innovations')}}"
                                                   >Innovations</a>
                    </span>
                                    <span>
                        <a class=""
                                                      href="{{route('results')}}"
                                                   >Lab reports</a>
                    </span>
                                    <span>
                        <a class=""
                                                      href="{{route('reviews')}}"
                                                   >Reviews</a>
                    </span>
                                    <span>
                        <a class=""
                                                      href="{{route('reviews')}}"
                                                   >Check code</a>
                    </span>
                                    <span>
                        <a class=""
                                                      href="{{route('contact')}}"
                                                   >Contact us</a>
                    </span>
                                                            </div>
            <div class="nav2">
                <span><a class=""
                         href="{{route('oralsteroids')}}">ORAL LINE</a></span>

                <span><a class=""
                         href="{{route('injectableline')}}">INJECTABLE LINE</a></span>
                <span><a class=""
                         href="{{route('hgh')}}">HGH AND PEPTIDES</a></span>
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
                <a class="" href="{{route('login')}}">Login</a>
            </div>
            <a href="{{route('cart')}}">
                <div class="icon-in-item top_cart">
                    <div class="icon-quantity" id="cart_quantity">0</div>
                </div>
            </a>
            </div>

</div>





</div>

@yield('content')

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
<script src="{{asset('js/toastr.js')}}" type="text/javascript"></script>
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
<script type='text/javascript' src='{{asset('js/jquery.countdown.js')}}'></script>
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
