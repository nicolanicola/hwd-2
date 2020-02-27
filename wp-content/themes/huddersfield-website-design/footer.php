<?php
/**
 * The template for displaying the footer.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
?>
</div> <!-- page content -->

<div class="page-footer-testimonials">
    <?php $args = array(
        'posts_per_page' => 2,
        'post_type' => 'testimonial',
    );
    $testimonials = get_posts($args); ?>
    <div class="container">
    </div>
</div>
<footer class="page-footer">
    <div class="container">


        <div class="row">
            <div class="col-md-5  u-text-right footer-box  border-right-white-md ">
                <?php $args = array(
                    'posts_per_page' => 6,
                    'post_type' => 'faq',
                );
                $faqs = get_posts($args); ?>
                <div class="faqs-container">
                    <h2 class="white  title">
                        <a class="white" href="<?php the_permalink(17); ?>">FAQS</a></h2>
                    <ul class="faqs-list">
                        <?php foreach ($faqs as $faq) : ?>
                            <li class="faqs-list__faq">
                                <a href="<?php the_permalink(17); ?>#<?php uglify($faq->post_title, 1); ?>"
                                   class="faqs-list__faq__link">
                                    <?php echo $faq->post_title; ?>
                                </a>
                            </li>
                        <?php endforeach ?>
                        <a href="<?php the_permalink(17); ?>" class="button--secondary  button  button--block"> View
                            all</a>
                    </ul>
                </div>
            </div>
            <div class="col-md-6    footer-box  offset-md-1  border-top-white-sm">
                <h2 class="white  title">Get A free website quote</h2>
                <?php include 'inc/contact-form.php'; ?>
            </div>

        </div>
    </div>

</footer>

<div class="container  footer-menu-container">

    <?php $menu = wp_get_nav_menu_items('footer'); ?>
    <?php
    if ($menu) :?>
        <div class="row">
            <?php $cols = array_chunk($menu, 4); ?>
            <?php foreach ($cols as $col): ?>
                <div class="col-6 col-sm-4  col-md-2">
                    <ul class="footer-menu-list">
                        <?php foreach ($col as $menuItem): ?>
                            <li class="footer-menu-list__item">
                                <a class="" href="<?php echo $menuItem->url; ?>">
                                    <?php echo $menuItem->title; ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endforeach; ?>
            <div class="col-12 col-sm-4  col-md-3 text-center">
                <div class="footer-social__container clearfix ">
                    <?php include "inc/facebook-like.php"; ?>
                    <div class="footer-social footer-social--phone-number mr-3">
                        Tel: <a href="tel:07792443572" target="_blank">
                            07792 443572
                        </a>

                    </div>

                </div>
            </div>
            <div class="col-12 col-sm-4  col-md-3 d-none d-lg-block">
                <a href="/" class="site-header__logo  block m-auto">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/huddersfield-web-design-logo.svg"
                         alt="huddersfield webiste design logo">
                </a>
            </div>
        </div>

    <?php endif; ?>


</div>


<?php
/* Always have wp_footer() just before the closing </body>
 * tag of your theme, or you will break many plugins, which
 * generally use this hook to reference JavaScript files.
 */

wp_footer();
?>
</body>
</html>