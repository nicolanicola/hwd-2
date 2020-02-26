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
            <h1 class="page-title">Recent Work</h1>
            <div class="row">
                <?php $args = array(
                        'posts_per_page' => 9999,
                        'post_type'      => 'website',
                );
                $posts      = get_posts( $args );
                foreach ( $posts as $post ): setup_postdata( $post ); ?>
                    <div class="col-md-4  col-sm-6     website-thumbnail__item">
                        <a class="website-thumbnail__link  website-thumbnail__link--background " href="<?php the_permalink(); ?>">
                            <?php $image = get_field( 'thumbnail' ); ?>
                            <img class="img-fluid" src="<?php echo $image['sizes']['mobile-new']; ?>" title="<?php echo $image['title']; ?>" alt="<?php echo $image['alt']; ?>">
                            <h4 class="website-thumbnail__title"><?php the_title(); ?></h4>
                            <h5 class="website-thumbnail__subtitle">
                                <?php the_field('business_type_and_location'); ?>
                            </h5>
                        </a>
                    </div>
                <?php endforeach;
                wp_reset_postdata(); ?>
            </div>
            <div class="u-text-center  u-m-bottom-40">
                <a href="<?php the_permalink( 648 ); ?>" class="button button--primary">Get in touch</a>
            </div>
        </div>


    <?php endwhile;
} ?>


<?php get_footer(); ?>
