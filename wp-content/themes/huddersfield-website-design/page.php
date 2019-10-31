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
