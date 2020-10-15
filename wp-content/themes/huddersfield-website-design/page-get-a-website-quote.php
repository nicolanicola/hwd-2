<?php
/**
 * The template for displaying all pages.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */

get_header(); ?>

<?php if (have_posts()) {
    while (have_posts()) : the_post(); ?>

        <?php if (get_the_post_thumbnail_url()): ?>
            <div class="featured-image u-m-bottom-40"
                 style="background:url(<?php echo get_the_post_thumbnail_url(); ?>) no-repeat; background-size: cover">
                <div class="container">
                    <h1 class="featured-image__title"><?php the_title(); ?></h1>
                </div>
            </div>
        <?php endif; ?>
        <div class="container">
            <?php if (!get_the_post_thumbnail_url()): ?>
                <h1 class="page-title"><?php the_title(); ?></h1>
            <?php endif; ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('the-content'); ?>>
                <?php the_content(); ?>

                <form action="https://api.staticforms.xyz/submit" method="post" id="wpcf7-f771-p13-o1" class="contact-form wpcf7-form" onsubmit="sendTracking()">
                    <div class="row">
                        <div class="col-sm-12">
                                <label>Name *</label>
                                <br>
                                <span class="wpcf7-form-control-wrap your-name">
                                    <input type="text" name="name" required value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false">
                                </span>
                        </div>
                        <div class="col-sm-12">
                                <label>Email *</label><br><span class="wpcf7-form-control-wrap your-email">
                                    <input type="email" name="email" value="" required size="40"
                                           class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                           aria-required="true" aria-invalid="false"></span>
                        </div>
                        <div class="col-sm-12">
                                <label>Phone number</label><br><span class="wpcf7-form-control-wrap your-email">
                                    <input type="text" name="phone" value="" required size="40"
                                           class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                           aria-required="true" aria-invalid="false"></span>
                        </div>
                    </div>
                    <p class="form-fields">
                        <label>Message *</label>
                        <span class="wpcf7-form-control-wrap your-message">
                            <textarea name="message" cols="40" rows="10" required class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></textarea>
                        </span>
                    </p>
                    <p>
                        <input type="submit" value="Send" class="wpcf7-form-control wpcf7-submit button button--block button--primary">
                        <span class="ajax-loader"></span>
                    </p>
                    <input type="hidden" name="testing" value="" id="honeypot"/>

                    <input type="hidden" name="accessKey" value="6b11bb19-15de-46af-ab59-fcb162c9b6c1">
                    <input type="hidden" name="subject" value="Contact us from - huddersfieldwebsitedesigner.co.uk" />
                    <input type="hidden" name="replyTo" value="@">
                    <input type="hidden" name="redirectTo" value="<?php echo get_site_url();?>/success">
                </form>


            </article>
            <?php if ($post->ID !== 13): ?>
                <div class="u-text-center  u-m-bottom-40">
                    <a class="button button--secondary" href="<?php the_permalink(7); ?>">Get In touch</a>
                </div>
            <?php endif; ?>
        </div>

    <?php endwhile;
} ?>

<?php get_footer(); ?>
