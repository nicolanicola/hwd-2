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
        <div class="home-hero">
            <div class="home-hero__image">
                <div class="container">
                    <?php $img = get_field( 'hero_image' ); ?>
                    <img class="img-fluid" src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
                </div>
            </div>
            <div class="home-hero__text">
                <?php the_field( 'hero_text' ); ?>
            </div>
        </div>

    <?php endwhile;
} ?>

<?php get_footer(); ?>
