<form action="https://api.staticforms.xyz/submit" method="post" class="contact-form" onsubmit="sendTracking()">
    <div class="relative">
        <input type="text"
               name="name"
               required
               value="" size="40"
               class="block  contact-form__field"
               placeholder="ENTER YOUR NAME"/>
        <div class="contact-form__name__error  contact-form__error  hidden  js-contact-form-error"></div>
    </div>
    <div class="relative">
        <input type="email"
               name="email"
               required
               class="block  contact-form__field"
               value="" size="40"
               placeholder="ENTER YOUR EMAIL"/>
        <div class="contact-form__email__error  contact-form__error hidden  js-contact-form-error"></div>
    </div>
    <div class="relative">
        <textarea
                name="message"
                required
                cols="40" rows="3"
                class="block  contact-form__field"
                placeholder="ENTER YOUR MESSAGE"></textarea>
        <div class="contact-form__message__error  contact-form__error  hidden  js-contact-form-error"></div>
    </div>
    <input type="hidden" name="testing" value="" id="honeypot"/>
    <input type="hidden" name="action" value="contact_send"/>
    <button class="button--primary  button  button--block  contact-form__submit">
        <i class="hidden  contact-form__spinner fa fa-circle-o-notch fa-spin"></i>
        <span class="contact-form__submit__text">GET A QUOTE</span>
    </button>
    <div class="contact-form__success-message  hidden">
        <i class="fa fa-check  home-checkboxes__tick"></i> Your email has been sent
    </div>
    <input type="hidden" name="accessKey" value="6b11bb19-15de-46af-ab59-fcb162c9b6c1">
    <input type="hidden" name="subject" value="Contact us from - huddersfieldwebsitedesigner.co.uk" />
    <input type="hidden" name="replyTo" value="@">
    <input type="hidden" name="redirectTo" value="<?php echo get_site_url();?>/success">

    <div class="contact-form__error-message  hidden">
        <i class="fa fa-remove  contact-form__error-message__icon"></i>
        <span class="contact-form__error-message__text"></span>
    </div>
</form>


<script>
    var adminUrl = '<?php echo admin_url( "admin-ajax.php" ) ?>';
	function sendTracking (){
		gtag_report_conversion()
		return true;
	}
</script>