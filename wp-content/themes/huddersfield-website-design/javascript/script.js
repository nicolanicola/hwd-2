function getTotalMenuHeight($) {
    var height = 20;
    $('.mobile-menu__list-item').each(function(index, item) {
        height += item.offsetHeight;
    })
    return height;
}


(function ($) {
    var heightOfMenu = getTotalMenuHeight($)

    $(".js-toggle-mobile-menu").toggle(function () {
        $('.js-mobile-menu').stop().animate({height: heightOfMenu}, 400);
        $('.js-mobile-menu').addClass('mobile-menu__links--is-active');

    }, function () {
        $('.js-mobile-menu').stop().animate({height: 0}, 400, function () {
            $('.js-mobile-menu').removeClass('mobile-menu__links--is-active');
        });
    });


})(jQuery);