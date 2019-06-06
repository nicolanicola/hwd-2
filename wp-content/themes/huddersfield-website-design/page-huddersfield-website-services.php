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
        <div class="featured-image" style="background:url(<?php echo get_the_post_thumbnail_url(); ?>) no-repeat; ">
            <div class="container">
                <h1 class="featured-image__title"><?php the_title(); ?></h1>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <?php $args = array(
                        'posts_per_page' => 9999,
                        'post_type'      => 'services',
                );
                $posts      = get_posts( $args );
                foreach ( $posts as $post ): setup_postdata( $post ); ?>
                    <div class="col-md-12  service">
                        <h3 class="content-title  service__title">
                            <i class="service__title__icon  fa <?php the_field('font_awesome_icon');?>"></i> <?php the_title(); ?>
                        </h3>
                        <div class="service__content">
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php endforeach;
                wp_reset_postdata(); ?>
            </div>
            <div class="u-text-center  u-m-bottom-40">
                <a href="/contact" class="button button--secondary">Get in touch</a>
            </div>
        </div>

        <div class="hero-grey">
            <div class="container">
                <?php include 'inc/previous-work.php'; ?>
            </div>
            <?php the_field( 'previous_work_title' ); ?>
        </div>

    <?php endwhile;
} ?>


<?php get_footer(); ?>
