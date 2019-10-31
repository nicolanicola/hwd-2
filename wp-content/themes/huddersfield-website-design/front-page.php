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
                        <h1 class="home-hero__text"><?php the_field( 'hero_text' ); ?></h1>
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

        <div class="hero-grey">
            <div class="container">
				<?php $text = get_field( 'previous_work_title' ); ?>
				<?php include 'inc/previous-work.php'; ?>
            </div>

        </div>
<!--        <div class="container-fluid  hidden-md-down">-->
<!--            <h2 class="u-text-center">Satisfied Customers</h2>-->
<!--            <div class="home-logos">-->
<!--				--><?php //$logos = get_field( 'logos' ); ?>
<!--				--><?php //$key = 0; ?>
<!--                <ul class="clearfix">-->
<!--					--><?php //foreach ( $logos as $logo ): ?>
<!--                        <li class="home-logos__logo">-->
<!--                            <img class="home-logos__image  img-fluid" src="--><?php //echo $logo['url']; ?><!--"-->
<!--                                 title="--><?php //echo $logo['title']; ?><!--" alt="--><?php //echo $logo['title']; ?><!--">-->
<!--                        </li>-->
<!--					--><?php //endforeach; ?>
<!--                </ul>-->
<!--            </div>-->
<!--        </div>-->
	
	<?php endwhile;
} ?>

<?php get_footer(); ?>
