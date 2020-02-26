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
while (have_posts()) :
the_post(); ?>
    <div class="featured-image"
         style="background:url(<?php echo get_the_post_thumbnail_url(); ?>) no-repeat; background-size: cover ">
        <div class="container">
            <h1 class="featured-image__title"><?php the_title(); ?></h1>
        </div>
    </div>

<div class="container">
    <section>

        <article id="post-<?php the_ID(); ?>" <?php post_class('the_content'); ?>>

            <?php $args = array('post_type' => 'faq');
            $query = new WP_Query($args);
            while ($query->have_posts()) : $query->the_post(); ?>

                <article id="<?php uglify(get_the_title(), 1); ?>" class="faq-article  js-show-hide  ">
                    <h2 class="faq-h1"><?php the_title(); ?> <span class="js-show-hide-icon">-</span></h2>
                    <div class="post-content js-show-hide-content"><?php the_content(); ?></div>
                </article>
            <?php endwhile;
            wp_reset_postdata(); ?>
            <article>
                <h1 class="get-in-touch-h2">Got another question not answered here? <a
                            href="<?php the_permalink(13); ?>"
                            class="cta-btn"><span>Contact Me</span></a>
                </h1>
            </article>


        </article>
        <?php endwhile;
        } ?>
    </section>


</div>
<div class="hero-grey">
    <div class="container">
        <?php include 'inc/previous-work.php'; ?>
    </div>
    <?php the_field('previous_work_title'); ?>
</div>

<?php get_footer(); ?>
