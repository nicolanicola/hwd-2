<?php
/**
 * The template for displaying all pages.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */

get_header(); ?>

<?php if ( have_posts() ) {
    while ( have_posts() ) : the_post(); ?>
        <div class="container">
            <h1 class="page-title"><?php the_title(); ?> </h1>
            <article id="post-<?php the_ID(); ?>" <?php post_class( 'the-content' ); ?>>
                <?php the_content(); ?>
            </article>

            <?php  if($post->ID !== 13):?>
            <div class="u-text-center  u-m-bottom-40">
                <a class="button button--secondary" href="<?php the_permalink( 7 ); ?>">Get In touch</a>
            </div>
            <?php endif;?>
        </div>

    <?php endwhile;
} ?>

<?php get_footer(); ?>
