/**handles:font-awesome,myscript**/
window.FontAwesomeKitConfig = {"asyncLoading":{"enabled":true},"autoA11y":{"enabled":true},"baseUrl":"https://kit-free.fontawesome.com","detectConflictsUntil":null,"license":"free","method":"css","minify":{"enabled":true},"v4FontFaceShim":{"enabled":true},"v4shim":{"enabled":true},"version":"latest"};
!function(){function r(e){var t,n=[],i=document,o=i.documentElement.doScroll,r="DOMContentLoaded",a=(o?/^loaded|^c/:/^loaded|^i|^c/).test(i.readyState);a||i.addEventListener(r,t=function(){for(i.removeEventListener(r,t),a=1;t=n.shift();)t()}),a?setTimeout(e,0):n.push(e)}!function(){if(!(void 0===window.Element||"classList"in document.documentElement)){var e,t,n,i=Array.prototype,o=i.push,r=i.splice,a=i.join;d.prototype={add:function(e){this.contains(e)||(o.call(this,e),this.el.className=this.toString())},contains:function(e){return-1!=this.el.className.indexOf(e)},item:function(e){return this[e]||null},remove:function(e){if(this.contains(e)){for(var t=0;t<this.length&&this[t]!=e;t++);r.call(this,t,1),this.el.className=this.toString()}},toString:function(){return a.call(this," ")},toggle:function(e){return this.contains(e)?this.remove(e):this.add(e),this.contains(e)}},window.DOMTokenList=d,e=Element.prototype,t="classList",n=function(){return new d(this)},Object.defineProperty?Object.defineProperty(e,t,{get:n}):e.__defineGetter__(t,n)}function d(e){for(var t=(this.el=e).className.replace(/^\s+|\s+$/g,"").split(/\s+/),n=0;n<t.length;n++)o.call(this,t[n])}}();function a(e){var t,n,i,o;prefixesArray=e||["fa"],prefixesSelectorString="."+Array.prototype.join.call(e,",."),t=document.querySelectorAll(prefixesSelectorString),Array.prototype.forEach.call(t,function(e){n=e.getAttribute("title"),e.setAttribute("aria-hidden","true"),i=!e.nextElementSibling||!e.nextElementSibling.classList.contains("sr-only"),n&&i&&((o=document.createElement("span")).innerHTML=n,o.classList.add("sr-only"),e.parentNode.insertBefore(o,e.nextSibling))})}var d=function(e,t){var n=document.createElement("link");n.href=e,n.media="all",n.rel="stylesheet",n.id="font-awesome-5-kit-css",t&&t.detectingConflicts&&t.detectionIgnoreAttr&&n.setAttributeNode(document.createAttribute(t.detectionIgnoreAttr)),document.getElementsByTagName("head")[0].appendChild(n)},c=function(e,t){!function(e,t){var n,i=t&&t.before||void 0,o=t&&t.media||void 0,r=window.document,a=r.createElement("link");if(t&&t.detectingConflicts&&t.detectionIgnoreAttr&&a.setAttributeNode(document.createAttribute(t.detectionIgnoreAttr)),i)n=i;else{var d=(r.body||r.getElementsByTagName("head")[0]).childNodes;n=d[d.length-1]}var c=r.styleSheets;a.rel="stylesheet",a.href=e,a.media="only x",function e(t){if(r.body)return t();setTimeout(function(){e(t)})}(function(){n.parentNode.insertBefore(a,i?n:n.nextSibling)});var s=function(e){for(var t=a.href,n=c.length;n--;)if(c[n].href===t)return e();setTimeout(function(){s(e)})};function l(){a.addEventListener&&a.removeEventListener("load",l),a.media=o||"all"}a.addEventListener&&a.addEventListener("load",l),(a.onloadcssdefined=s)(l)}(e,t)},e=function(e,t,n){var i=t&&void 0!==t.autoFetchSvg?t.autoFetchSvg:void 0,o=t&&void 0!==t.async?t.async:void 0,r=t&&void 0!==t.autoA11y?t.autoA11y:void 0,a=document.createElement("script"),d=document.scripts[0];a.src=e,void 0!==r&&a.setAttribute("data-auto-a11y",r?"true":"false"),i&&(a.setAttributeNode(document.createAttribute("data-auto-fetch-svg")),a.setAttribute("data-fetch-svg-from",t.fetchSvgFrom)),o&&a.setAttributeNode(document.createAttribute("defer")),n&&n.detectingConflicts&&n.detectionIgnoreAttr&&a.setAttributeNode(document.createAttribute(n.detectionIgnoreAttr)),d.parentNode.appendChild(a)};function s(e,t){var n=t&&t.addOn||"",i=t&&t.baseFilename||e.license+n,o=t&&t.minify?".min":"",r=t&&t.fileSuffix||e.method,a=t&&t.subdir||e.method;return e.baseUrl+"/releases/"+("latest"===e.version?"latest":"v".concat(e.version))+"/"+a+"/"+i+o+"."+r}var t,n,i,o,l;try{if(window.FontAwesomeKitConfig){var u,f=window.FontAwesomeKitConfig,m={detectingConflicts:f.detectConflictsUntil&&new Date<=new Date(f.detectConflictsUntil),detectionIgnoreAttr:"data-fa-detection-ignore",detectionTimeoutAttr:"data-fa-detection-timeout",detectionTimeout:null};"js"===f.method&&(o=m,l={async:(i=f).asyncLoading.enabled,autoA11y:i.autoA11y.enabled},"pro"===i.license&&(l.autoFetchSvg=!0,l.fetchSvgFrom=i.baseUrl+"/releases/"+("latest"===i.version?"latest":"v".concat(i.version))+"/svgs"),i.v4shim.enabled&&e(s(i,{addOn:"-v4-shims",minify:i.minify.enabled})),e(s(i,{minify:i.minify.enabled}),l,o)),"css"===f.method&&function(e,t){var n,i=a.bind(a,["fa","fab","fas","far","fal","fad"]);e.autoA11y.enabled&&(r(i),n=i,"undefined"!=typeof MutationObserver&&new MutationObserver(n).observe(document,{childList:!0,subtree:!0})),e.v4shim.enabled&&(e.license,e.asyncLoading.enabled?c(s(e,{addOn:"-v4-shims",minify:e.minify.enabled}),t):d(s(e,{addOn:"-v4-shims",minify:e.minify.enabled}),t));e.v4FontFaceShim.enabled&&(e.asyncLoading.enabled?c(s(e,{addOn:"-v4-font-face",minify:e.minify.enabled}),t):d(s(e,{addOn:"-v4-font-face",minify:e.minify.enabled}),t));var o=s(e,{minify:e.minify.enabled});e.asyncLoading.enabled?c(o,t):d(o,t)}(f,m),m.detectingConflicts&&((u=document.currentScript.getAttribute(m.detectionTimeoutAttr))&&(m.detectionTimeout=u),document.currentScript.setAttributeNode(document.createAttribute(m.detectionIgnoreAttr)),t=f,n=m,r(function(){var e=document.createElement("script");n&&n.detectionIgnoreAttr&&e.setAttributeNode(document.createAttribute(n.detectionIgnoreAttr)),n&&n.detectionTimeoutAttr&&n.detectionTimeout&&e.setAttribute(n.detectionTimeoutAttr,n.detectionTimeout),e.src=s(t,{baseFilename:"conflict-detection",fileSuffix:"js",subdir:"js",minify:t.minify.enabled}),e.async=!0,document.body.appendChild(e)}))}}catch(e){}}();
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