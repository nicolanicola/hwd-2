const SENDING_TEXT = 'SENDING...';
const SUBMIT_TEXT = 'GET QUOTE';
const INVALID_DATA = 'There are errors in the form above';

function isMobile($) {
    return $('.js-is-mobile').css('display') !== 'none';
}


function getTotalMenuHeight($) {
    var height = 20;
    $('.mobile-menu__list-item').each(function (index, item) {
        height += item.offsetHeight;
    })
    return height;
}

function getHash() {
    var hash = location.hash;
    if (hash) {
        return hash.split('#')[1].split('&')[0]
    }
    return false;
}

function sleepFor(sleepDuration) {
    var now = new Date().getTime();
    while (new Date().getTime() < now + sleepDuration) { /* do nothing */
    }
}

function toggleSending($) {
    var submitText = $('.contact-form__submit__text');
    var spinner = $('.contact-form__spinner');
    if (submitText.html() !== SENDING_TEXT) {
        submitText.text(SENDING_TEXT);
        spinner.removeClass('hidden')
    } else {
        submitText.text(SUBMIT_TEXT);
        spinner.addClass('hidden')
    }

}

function handleSubmit(e, $, data) {
    e.preventDefault(); // Prevent the default form submit
    var validatedData = validate(data);
	gtag_report_conversion();
    if (validatedData.valid) {
        $('.contact-form__error-message').addClass('hidden');
        $('.contact-form__error').addClass('hidden');
        toggleSending($);
        $.ajax({
            url: adminUrl,
            type: 'post',
            dataType: 'JSON', // Set this so we don't need to decode the response...
            data: data,
            success: function (data) {
                toggleSending($);
                if (data.status === 'success') {
                    $('.contact-form__success-message').removeClass('hidden');
                    $('.contact-form__error-message').addClass('hidden');
                } else {
                    $('.contact-form__success-message').addClass('hidden');
                    $('.contact-form__error-message').removeClass('hidden');
                    $('.contact-form__error-message__text').html(data.message);
                }
            }
        });

    } else {
        validatedData.errors.forEach(function (error) {
            $('.' + error.field).removeClass('hidden');
            $('.' + error.field).text(error.message);
            $('.contact-form__success-message').addClass('hidden');
            $('.contact-form__error-message').removeClass('hidden');
            $('.contact-form__error-message__text').html(INVALID_DATA);
        })

    }
}

function validate(data) {
    var valid = true;
    var errors = [];
    var newData = {};
    data.forEach(function (d) {
        newData[d.name] = d.value;
        if (d.value == '') {
            valid = false;
            errors.push({
                field: 'contact-form__' + d.name + '__error',
                message: 'This field is required'
            });
        }
    })
    return {
        valid: valid,
        errors: errors
    }
}
function sendTracking (){
    gtag_report_conversion()
    return true;
}


(function ($) {
    $('.contact-form__field').blur(function (e) {
        if ((this).value !== '') {
            $(this).next().addClass('hidden')
        }
    })
    $('.contact-form').submit(function (e) {
        sendTracking();
        return true;
        //handleSubmit(e, $, $(this).serializeArray())
    })

    //pass array of formfields

    $(".js-toggle-mobile-menu").toggle(function () {
        var heightOfMenu = getTotalMenuHeight($);
        $('.js-mobile-menu').stop().animate({height: heightOfMenu}, 400);
        $('.js-mobile-menu').addClass('mobile-menu__links--is-active');

    }, function () {
        $('.js-mobile-menu').stop().animate({height: 0}, 400, function () {
            $('.js-mobile-menu').removeClass('mobile-menu__links--is-active');
        });
    });

    //FAQs page
    $('.js-show-hide h2').click(function (e) {
        var element = $(e.target).parent();
        if ($(element).find('.js-show-hide-content').hasClass('hidden')) {
            $(element).find('.js-show-hide-content').removeClass('hidden');
            $(element).find('.js-show-hide-icon').html('-')
        } else {
            $(element).find('.js-show-hide-content').addClass('hidden');
            $(element).find('.js-show-hide-icon').html('+')
        }
    })

    var hash = getHash();
    if (hash) {
        var xPosition = $("#" + hash).offset().top - 180;
        $('html, body').animate({
            scrollTop: xPosition
        }, 2000);
    }

    if ($('body').hasClass('single-website')) {
        $('.menu-item-7').addClass('active');
    }


})(jQuery);