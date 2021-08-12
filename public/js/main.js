jQuery(document).ready(function ($) {




    $(function () {

        $('ul.tabs__caption').on('click', 'li:not(.active)', function () {
            $(this)
                .addClass('active').siblings().removeClass('active')
                .closest('div.tabs').find('div.tabs__content').removeClass('active').eq($(this).index()).addClass('active');
        });

    });


    $("#scroll-arrow").on("click", "a", function (event) {
        event.preventDefault();
        var id = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({
            scrollTop: top - 0
        }, 1000);
    });


    /*$(".box-item3").click(function () {
        $(this).toggleClass('box-item3-active');
    });*/


    $(".nfo-title").click(function () {
        $(this).next(".nfo-text").slideToggle();
        $(this).toggleClass('nfo-active');
        $(this).next(".nfo-text").css('display', 'block');
    });


    $(".nfo2-title").click(function () {
        $(this).next(".nfo2-text").slideToggle();
        $(this).toggleClass('nfo2-active');
        $(this).next(".nfo2-text").css('display', 'block');
    });

    $(".nfo2-title").click(function () {
        $(this).parent().toggleClass('box14-in-item-active');

    });

    $('.mob-header-menu-icon').click(function () {
        $('.mob-header-menu-icon').css('display', 'none')
        $('.mob-header-menu-close').css('display', 'block')

        $(".content-1").animate({
            "left": "+=165"
        }, 400);

    });


    $('.mob-header-menu-close').click(function () {
        $('.mob-header-menu-close').css('display', 'none')
        $('.mob-header-menu-icon').fadeIn(500).css('display', 'block')

        $(".content-1").animate({
            "left": "-=165px"
        }, 200);
    });



    $('.mob-header-menu').hide();
    $('.mob-header-menu-icon').click(function () {
        $('.mob-header-menu').slideDown();
        $('.mob-header-menu-icon').css('display', 'none')
        $('.mob-header-menu-close').css('display', 'block')
    });
    $('.mob-header-menu-close').click(function () {
        $('.mob-header-menu').slideUp();
        $('.mob-header-menu-close').css('display', 'none')
        $('.mob-header-menu-icon').css('display', 'block')

    });


    $('.mob-header-menu').hide();
    $('.header-items-in-item').click(function () {
        $('.search').slideDown();
        $('.search-item').css('display', 'none')
        $('.search').css('display', 'block')
    });



    $(function () {

        $('ul.tabs__caption').on('click', 'li:not(.active)', function () {
            $(this)
                .addClass('active').siblings().removeClass('active')
                .closest('div.tabs').find('div.tabs__content').removeClass('active').eq($(this).index()).addClass('active');
        });

    });







    $('.sl1').slick({
        infinite: true,
        dots: false,
        arrows: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [

            {
                breakpoint: 1250,

                settings: {
                    slidesToShow: 3,
                }
    },
            {
                breakpoint: 1050,

                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,

                }
    },
            {
                breakpoint: 720,

                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,

                }
    }

]

    });

});
