<?php
/**
 * The template for displaying Archive pages.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */

get_header(); ?>
    <div class="container">
        <h1 class="page-title"> Testimonials </h1>
        <div class="row">
            <div class="col-sm-8">
				<?php
				if ( have_posts() ) {
					the_post();
				} ?>
				
				<?php rewind_posts();
				
				get_template_part( 'loop', 'archive' );
				?>
            </div>
            <div class="col-sm-4">
				<?php get_sidebar(); ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>