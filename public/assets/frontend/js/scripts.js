$(".one-show-more").click(function () {
    $(".text-one").toggleClass("one-show-more-height");
    $(this).css('display','none');
    $('.one-show-less').css('display','block');
});
$(".one-show-less").click(function () {
    $(".text-one").toggleClass("one-show-more-height");
    $(this).css('display','none');
    $('.one-show-more').css('display','block');
});

$(".two-show-more").click(function () {
    $(".text-two").toggleClass("two-show-more-height");
    $(this).css('display','none');
    $('.two-show-less').css('display','block');
});
$(".two-show-less").click(function () {
    $(".text-two").toggleClass("two-show-more-height");
    $(this).css('display','none');
    $('.two-show-more').css('display','block');
});

$(".three-show-more").click(function () {
    $(".text-three").toggleClass("three-show-more-height");
    $(this).css('display','none');
    $('.three-show-less').css('display','block');
});
$(".three-show-less").click(function () {
    $(".text-three").toggleClass("three-show-more-height");
    $(this).css('display','none');
    $('.three-show-more').css('display','block');
});
