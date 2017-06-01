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
            <div class="container">
                <div class="row">
                    <div class=" col-xl-4  col-lg-6  hidden-md-down">
                        <div class="home-hero__text">
                            <?php the_field( 'hero_text' ); ?>
                        </div>
                    </div>
                    <div class="col-xs-4   col-lg-6   col-xl-4">
                        <div class="home-hero__image">
                            <?php $img = get_field( 'hero_image' ); ?>
                            <img class="img-fluid" src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
                        </div>
                    </div>
                    <div class="col-xl-4  hidden-lg-down">
                        <div class="contain-form-container">
                            <?php require 'inc/contact-form.php'; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="home-hero__text  home-hero__text--mobile  hidden-lg-up">
            <?php the_field( 'hero_text' ); ?>
        </div>
        </div>
        <section class="home-checkboxes  container-fluid  u-text-center">
            <ul class="home-checkboxes__list  clearfix  inline-block  ">
                <?php $tickboxes = get_field( 'tickboxes' ); ?>
                <?php foreach ( $tickboxes as $tickbox ): ?>
                    <li class="home-checkboxes__list-item  pull-left">
                        <i class="fa fa-check  home-checkboxes__tick"></i> <?php echo $tickbox['tickbox']; ?>
                    </li>

                <?php endforeach; ?>
            </ul>
        </section>
        <div class="container-fluid  hidden-xl-up  home-get-quote">
            <div class="row">
                <div class="col-12 col-md-8  offset-md-2">
                    <div class="home-get-quote__content">
                        <h2 class="u-text-center  home-get-quote__title">Get A Website Quote</h2>
                        <div class="contain-form-container  contain-form-container--small-hero">
                            <?php require 'inc/contact-form.php'; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="home-previous-work">
            <div class="container">

                <h2 class="u-text-center">Previous Work</h2>
                <div class="row">
                    <?php $args  = array(
                            'posts_per_page' => 9999,
                            'post_type'      => 'website',
                    );
                    $posts_array = get_posts( $args );
                    $rand_keys   = array_rand( $posts_array, 3 );
                    $posts       = [
                            $posts_array[ $rand_keys[0] ],
                            $posts_array[ $rand_keys[1] ],
                            $posts_array[ $rand_keys[2] ]
                    ];
                    foreach ( $posts as $post ): setup_postdata( $post ); ?>
                        <div class="col-md-4  home-previous-work__item">
                            <a class="home-previous-work__link" href="<?php the_permalink(); ?>">
                                <?php $image = get_field( 'thumbnail' ); ?>
                                <img class="img-fluid" src="<?php echo $image['url']; ?>"
                                     alt="<?php echo $image['alt']; ?>">
                                <h4 class="home-previous-work__title"><?php the_title(); ?></h4>
                            </a>
                        </div>
                    <?php endforeach;
                    wp_reset_postdata(); ?>
                </div>
            </div>
            <?php the_field( 'previous_work_title' ); ?>
        </div>
        <div class="container-fluid  hidden-md-down">
            <h2 class="u-text-center">Satisfied Customers</h2>
            <div class="home-logos">
                <?php $logos = get_field( 'logos' ); ?>
                <?php $key = 0;?>
                <ul class="clearfix">
                    <?php foreach ( $logos as $logo ): ?>
                        <li class="home-logos__logo">
                            <img class="home-logos__image  img-fluid" src="<?php echo $logo['url']; ?>" title="<?php echo $logo['title'];?>" alt="<?php echo $logo['title'];?>">
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>

    <?php endwhile;
} ?>

<?php get_footer(); ?>
